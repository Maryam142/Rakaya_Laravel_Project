@auth
        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf

            <header class="flex items-center">
            <div class="flex-shrink-0"><img src="/images/u (2).png" width="50px" alt=""></div>

                <h2 class="ml-4">
                    ترغب بمشاركة رأيك؟
                </h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring"
                    rows="5"
                    placeholder="شاركنا رأيك في المنتج"
                    required></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

           
            <div class="mb-6  flex justify-center">
                    <button type="submit" required class="text-center border border-gray-400 text-black hover:bg-gray-700  hover:text-white bg-blue-100 p-2 rounded-xl w-full ">
                        ارسال
                    </button>
                </div>
        </form>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">تسجيل حساب</a> او
        <a href="/login" class="hover:underline">تسجيل الدخول</a>لمشاركة تعليقك 
    </p>
@endauth