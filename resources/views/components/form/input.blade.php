@props(['name','content'=>' ', 'type'=> 'text'])

<div class="mb-6">

    <label for="{{ $name }}" 
    class="block mb-2 font-bold text-xs text-gray-600">    
    {{$content}}
    </label>

    <input type="{{$type}}"
     id="{{ $name }}" 
    name="{{ $name }}" value="{{$slot ?? old(name)}}"  
    class="mb-3 border border-gray-400 p-2 w-full rounded"
    {{$attributes}}
    >


    @error('{{ $name }}')
    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
    @enderror

</div>