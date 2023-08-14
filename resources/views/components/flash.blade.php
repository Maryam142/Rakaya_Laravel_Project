@if(session()->has('success'))
    <div x-data ="{show:  true}"
    x-init="setTimeout(() => show = false, 400)"
    x-show="show"


    class="fixed bottom-5 right-0 bg-pink-400 text-white py-2 px-4 rounded-xl ">
        <p>{{ session()->get('success')}}</p>

    </div>
    @endif