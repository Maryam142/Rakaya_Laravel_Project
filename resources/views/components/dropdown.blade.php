@props(['trigger'])
<div x-data="{show: false}" @click.away="show=false" class="text-right">
   {{--Trigger--}}
  
   <div @click="show = !show">

   {{ $trigger }}
   </div>

    {{--Links--}}
    <div x-show="show" class="py2  absolute bg-gray-100 w-full mt-2 rounded-xl z-50" style="display:none; overflow:auto; max-height:300px;">
        {{$slot}}
    </div>
</div>