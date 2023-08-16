<x-layout>
    <section class="px-6 py-8">
      <x-setting heading="إدارة المنتجات">
        <main class="max-w-lg mx-auto mt-10 p-6 border rounded-xl px-5">

            <form method="POST" action="/admin/posts" class="mt-6 " enctype="multipart/form-data">

                @csrf

                {{-- title --}}
                <x-form.input name="title" content="العنوان"/>
                {{-- slug --}}
                <x-form.input name="slug" content="slug"/>
                {{-- Excerpt --}}
                <x-form.textarea name="excerpt" content="وصف مختصر للمنتج"/>
                {{-- Body --}}
                <x-form.textarea name="body"content="وصف المنتج"/>

                {{-- thumbnail --}}
                <x-form.input name="thumbnail" type="file" content="صورة المنتج"/>

                {{-- Category --}}
                <div class="mb-6">
                    <label for="category_id" 
                    class="block mb-2 font-bold text-xs text-gray-600">نوع المنتج</label>
                    <select id="category_id" name="category_id" required class="border border-gray-300 p-2 w-full rounded-xl">
                        @php
                        $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)

                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                {{-- submit --}}
                <div class="mb-6 mt-2  flex justify-center">
                    <button type="submit" required class="text-center bg-purple-200 border border-purple-200 text-black hover:bg-purple-300   hover:text-white p-2 rounded-xl w-full mt-4">
                        تم
                    </button>
                </div>
            </form>
        </main>
    </x-setting>
  </section>
</x-layout>