<x-layout>
    <x-setting :heading="'تعديل المنتج '.$post->title ">
    <main class="max-w-lg mx-auto mt-10 p-6 border rounded-xl px-5">
        <form method="POST" action="/admin/posts/{{ $post->id }}" class="mt-6 " enctype="multipart/form-data">

            @csrf
            @method('PATCH')

            {{-- title --}}
            <x-form.input name="title" content="العنوان" >{{old('title', $post->title)}}  </x-form.input>
            {{-- slug --}}
            <x-form.input name="slug" content="slug" > {{old('slug', $post->slug)}}  </x-form.input>
            {{-- Excerpt --}}
            <x-form.textarea name="excerpt" content="وصف مختصر للمنتج"> {{old('excerpt', $post->excerpt)}} </x-form.textarea>
            {{-- Body --}}
            <x-form.textarea name="body" content="وصف المنتج"> {{old('body', $post->body)}} </x-form.textarea>
            {{-- thumbnail --}}
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>

                <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="" class="rounded-xl ml-6 mb-5" width="100">
            </div>

            {{-- Category --}}
            <div class="mb-6">
                <label for="category_id" class="block mb-2 font-bold text-xs text-gray-600">نوع المنتج</label>

                <select name="category_id" id="category_id" required class="border border-gray-300 p-2 w-full rounded-xl">
                  @foreach (\App\Models\Category::all() as $category)
                    <option 
                    value="{{ $category->id }}" 
                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                    >{{ ucwords($category->name) }}</option>
                 @endforeach
                </select>

                <x-form.error name="category" />
            </div>

            {{-- submit --}}
            <div class="mb-6 mt-2  flex justify-center">
                <button type="submit" 
                onclick="return confirm('هل انت متأكد من تعديل المنتج؟')" 
                class="text-center bg-purple-200 border border-purple-200 text-black hover:bg-purple-300   hover:text-white p-2 rounded-xl w-full mt-4">
                    تعديل
                </button>
            </div>
        </form>
    </main>
 </x-setting>
</x-layout>