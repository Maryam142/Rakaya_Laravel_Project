@props(['trigger'])
<div x-data="{show: false}" @click.away="show=false" class="text-right relative w-32">
   {{--Trigger--}}
  
   <div @click="show = !show">

   {{ $trigger }}
   </div>

    {{--Links--}}
    <div x-show="show" class="py-2 absolute bg-gray-100 w-full max-w-auto mt-2 rounded-xl z-50 overflow-auto max-h-52" style="display:none; overflow:auto; max-height:300px;">
        {{$slot}}
    </div>
</div>