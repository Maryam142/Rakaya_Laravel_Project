@props(['name'])

<div class="mb-6">
    <label for="{{ $name }}" class="block mb-2 font-bold text-xs text-gray-600">وصف المنتج</label>
   
    <textarea 
    id="{{ $name }}" 
    name="{{ $name }}" 
    value="{{old($name )}}" 
    required 
    class="mb-3 border border-gray-300 p-2 w-full rounded-xl"></textarea>

    @error('{{ $name }}')
    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
    @enderror
</div>