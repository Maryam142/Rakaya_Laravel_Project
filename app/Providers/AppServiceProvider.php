<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Blade;
use MailchimpMarketing\ApiClient;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){

        $client = (new ApiClient);

       app()->bind(Newsletter::class, function(){
       
        $client = (new ApiClient)->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
     });
     return new Newsletter($client);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        Model::unguard();

        Gate::define('admin', function (User $user) {
            return $user->username === 'maryam1422';
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
