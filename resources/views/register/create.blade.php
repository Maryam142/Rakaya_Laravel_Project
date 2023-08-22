<x-layout>
    <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 p-6 border rounded-xl px-5">

            <h1 class="text-center font-bold text-xl  text-pink-300"> !أهلًا ومرحبـــا </h1>
            <h6 class="text-center text-xl mt-2 text-indigo-400">سجل حساب جديد</h6>


            <form method="POST" action="/register" class="mt-10">

                @csrf

                {{-- name --}}
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-900">الاسم</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="mohammed">

                    @error('name')
                    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                {{-- username --}}
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-900">اسم المستخدم</label>
                    <input type="text" id="username" name="username" value="{{old('username')}}" class="border border-gray-400 p-2 w-full rounded-xl" placeholder="salem" required>

                    @error('username')
                    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>


                {{-- email --}}
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-900">البريد الالكتروني</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" class="border border-gray-400 p-2 w-full rounded-xl" placeholder="xxx@example.com" required>

                    @error('email')
                    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>



                {{-- pass --}}
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-900">كلمة المرور</label>
                    <input type="password" id="password" name="password" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="****">

                    @error('password')
                    <p class="text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="my-3">
                    هل لديك حساب بالفعل؟ <span class="text-pink-300"> <a href="/login"> سجل الدخول </a></span>
                </div>


                {{-- submit --}}
                <div class="mb-6  flex justify-center">
                <button type="submit" required class="text-center text-black hover:bg-purple-300  hover:text-white bg-purple-200 p-2 rounded-xl w-full">
                        ارسال
                    </button>

                </div>
            </form>
        </main>
    </section>
</x-layout>