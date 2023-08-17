<!doctype html>

<title>متجر واااو</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">


<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    * {
        text-align: right;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div class="mx-3">
                <a href="/">
                    <img src="/images/logo.png" alt="Laracasts Logo" width="145" height="10">
                </a>
            </div>

            <div class="mt-8 mx-9 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-md font-bold"> {{ auth()->user()->name }} أهلًا و سهلًا </button>
                        <x-down-arrow class="relative flex-inline pointer-events-none mt-1"></x-down-arrow>
                    </x-slot>
                    @admin
                    <x-dropdown-item href="/admin/posts/create">لوحة التحكم </x-dropdown-item>
                    <x-dropdown-item href="/admin/posts/create">منتج جديد </x-dropdown-item>
                    @endadmin

                    <x-dropdown-item href="/admin/posts/create">مشترياتي  </x-dropdown-item>
                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
                         تسجيل الخروج
                    </x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>



                <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  text-blue-400 mx-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg></a>


                @endauth

                @guest
                <a href="/register" class="text-xs font-bold uppercase"> تسجيل جديد </a>
                <a href="/login" class="ml-5 text-xs font-bold uppercase"> تسجيل الدخول </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-5 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </a>

                @endguest

                <a href="#" class="bg-pink-300 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    iاشترك للحصول على التحديثات
                </a>
            </div>
        </nav>

        {{$slot}}

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/logo.png" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl text-center mt-8">ابق على اطلاع على أحدث التصاميم</h5>
            <p class="text-sm mt-3 text-center">.. نعدك بتصاميم تاخذك لعالم ثاني</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full text-center">

                    <form method="POST" action="#" class="lg:flex text-sm align-items-center">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="بريدك الالكتروني" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit" class="transition-colors duration-300 bg-pink-300 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            اشتراك
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash />

</body>