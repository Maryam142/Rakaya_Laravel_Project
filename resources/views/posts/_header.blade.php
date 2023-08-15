<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        .. <span class="text-pink-300">واااو </span>تصمم

    </h1>

    <!-- <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg"
                                                               alt="Head of Lary the mascot"></h2> -->

    <p class="text-sm mt-14">
        هنا الألوان تحلّي اللحظة ♡
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-category-dropdown/>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category')  }}">
                @endif 


                <input 
                type="text" 
                name="search" 
                placeholder="ابحث هنا" 
                class="bg-transparent placeholder-black font-semibold text-sm text-right" 
                value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>