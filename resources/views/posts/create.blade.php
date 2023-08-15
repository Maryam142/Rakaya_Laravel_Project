<x-layout>
    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl px-5">
            <h1 class="font-bold text-lg mx-auto text-purple-300">نشر منتج جديد</h1>

            <form method="POST" action="/admin/posts" class="mt-6 " enctype="multipart/form-data">

                @csrf

                {{-- title --}}
                <x-form.input name="title" />
                {{-- slug --}}
                <x-form.input name="slug" />

                {{-- Excerpt --}}
                <x-form.textarea name="Excerpt"/>

                {{-- Body --}}
                <x-form.textarea name="Body"/>

                {{-- thumbnail --}}
                <x-form.input name="thumbnail" type="file" />

                {{-- Category --}}
                <div class="mb-6">
                    <label for="category" class="block mb-2 font-bold text-xs text-gray-600">نوع المنتج</label>
                    <select id="category" name="category" required class="border border-gray-300 p-2 w-full rounded-xl">
                        @php
                        $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)

                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                    @error('Category')
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
    </section>
</x-layout>