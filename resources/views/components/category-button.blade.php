@props(['category'])

<a href="/categories/{{ $category->slug }}" 
 class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold" 
 style="font-size: 10px">
    {!! $category->name !!}
</a>