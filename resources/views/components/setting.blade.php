@props(['heading'])

        <h1 class="text-lg font-light text-xl w-128 text-pink-300 font-bold border-b mb-8">{{$heading}}</h1>
     
    <div class="flex ">
        <aside class="w-64 rounded-xl p-6  ">
            <h4 class="font-bold mb-4">لوحة التحكم </h4>
            <ul>
             <li> <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-pink-500': '' }} ">اضافة منتج</a>  </li>
             <li> <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-pink-500': '' }}">كل المنتجات</a>  </li>
             <li> <a href="#" class="{{ request()->is('admin/posts/createPost') ? 'text-purple-500': '' }}  text-gray-400">اضافة قسم</a>  </li>
             <li> <a href="#" class="{{ request()->is('admin/posts/createPost') ? 'text-purple-500': '' }} text-gray-400">المبيعات</a>  </li>
            </ul>

        </aside>

        <div class="flex-1">
                {{$slot}}
        </div>

    </div>
