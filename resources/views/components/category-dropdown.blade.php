<x-dropdown>

    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9d text-sm inline-flex font-semibold text-right flex lg:inline-flex w-32 text-center">
            {{ isset($currentCategory)? ucwords($currentCategory->name) : 'الاقسام'}}
        </button>
        <x-down-arrow class="" absolute pointer-events-none></x-down-arrow>

    </x-slot>

    <x-dropdown-item href="/"> الكل</x-dropdown-item>


    @foreach ($categories as $category)
    <x-dropdown-item href="/?category={{$category->slug}}&{{ http_build_query( request()->except('category') ) }}">
        {{ ucwords($category->name) }}
    </x-dropdown-item>
    @endforeach

</x-dropdown>   