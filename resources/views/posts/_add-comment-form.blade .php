@auth
<form method="POST" action="/posts/{{ $post->slug }}/comments">
    @csrf

    <header class="flex justify-between items-center">

        <h2 class="ml-4">
            ترغب بمشاركة رأيك؟
        </h2>
        <div class="flex-shrink-0 mx-4"><img src="/images/u (2).png" width="50px" alt=""></div>

    </header>

    <div class="mt-6">
        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring border border-gray-400 p-5 rounded-xl" rows="5" placeholder="شاركنا رأيك في المنتج" required></textarea>

        @error('body')
        <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div class="mb-6  flex justify-center">
        <button type="submit" required class="text-center text-black hover:bg-pink-400  hover:text-white bg-pink-100 p-2 rounded-xl px-5 mt-4 ">
            ارسال
        </button>
    </div>
</form>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline text-purple-300">تسجيل حساب</a> او
    <a href="/login" class="hover:underline text-pink-400">تسجيل الدخول </a>لمشاركة تعليقك
</p>
@endauth