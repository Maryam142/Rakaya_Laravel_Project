<x-layout>
    <section class="px-6 py-8">


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="{{  asset('storage/'.$post->thumbnail) }}" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        نشر قبل <time>{!! $post-> created_at ->diffForHumans() !!}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <!-- <img src="/images/lary-avatar.svg" alt="Lary avatar"> -->
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">:هذا العمل تم بالتعاون مع</h5>
                            <h6>
                                <a href="/?author={{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a>
                            </h6>
                        </div>
                        <svg viewBox="0 0 1024 1024" class="icon h-7" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M537.225476 296.123203s96.447809-86.32994 130.715039-154.104697c28.603987-41.219668 49.564896-143.376764-37.708918-97.437725-34.750678 18.290437-53.30586 56.655462-103.147011-15.309176-10.302039-14.883282-37.847046-60.937427-69.156037 6.238777 0.471937 3.994199-29.651457 49.967769-80.309865 8.207099 0 0-77.121413-50.117408-70.364657 26.670196 5.444542 21.50191 3.222984 110.502323 117.109441 200.907036zM535.176579 727.853476s96.459319 86.32994 130.726549 154.104697c28.592476 41.219668 49.564896 143.376764-37.708917 97.437726-34.762189-18.290437-53.30586-56.655462-103.147012 15.309176-10.359593 14.883282-37.847046 61.006491-69.156037-6.238777 0.471937-3.982688-29.662967-49.967769-80.321376-8.2071 0 0-77.121413 50.117408-70.364656-26.670196 5.456052-21.4904 3.222984-110.502323 117.109441-200.907035z" fill="#F09AC1"></path>
                                <path d="M531.942084 291.956345s84.545788-75.68258 114.577095-135.077579c25.070214-36.131957 43.452736-125.673371-33.047101-85.409087-30.468713 16.034347-46.733274 49.656981-90.416223-13.421428-9.035867-13.041576-33.173718-53.420967-60.626639 5.467563 0.414384 3.453198-25.991067 43.798056-70.399188 7.194162 0 0-67.613609-43.924673-61.674109 23.378147 4.776923 18.842948 2.820111 96.850682 102.652054 176.113077zM528.120545 739.571326s84.545788 75.694091 114.577096 135.08909c25.070214 36.131957 43.452736 125.673371-33.047101 85.409087-30.468713-16.034347-46.733274-49.668492-90.416224 13.421428-9.035867 13.041576-33.173718 53.420967-60.626638-5.479074 0.414384-3.453198-25.991067-43.740503-70.399189-7.182651 0 0-67.613609 43.924673-61.674108-23.389658 4.776923-18.831437 2.820111-96.850682 102.652053-176.113077z" fill="#E772AC"></path>
                                <path d="M374.717998 132.245957a344.65214 344.65214 0 0 0 76.177538 129.563973c1.530918 1.634514 3.959667-0.817257 2.44026-2.44026a340.588878 340.588878 0 0 1-75.279707-128.044566c-0.69064-2.106451-4.01722-1.151066-3.338091 0.920853zM486.647642 87.803304a630.208559 630.208559 0 0 1-7.102076 166.90455c-0.391362 2.175514 2.935218 3.107878 3.32658 0.909342a633.155288 633.155288 0 0 0 7.228693-167.756339c-0.195681-2.198536-3.648879-2.210046-3.453197 0zM617.535341 114.968458c-9.208527 27.625581-21.593996 53.9965-35.084487 79.768864-6.607118 12.661724-13.467471 25.070214-20.316313 37.536258s-14.112067 24.978129-24.379575 35.11902c-1.588471 1.56545 0.851789 4.005709 2.44026 2.440259 9.530825-9.415719 16.506284-20.719186 23.021317-32.356461q10.84304-19.418481 21.225654-39.136239c14.054514-26.601132 26.969473-53.881393 36.431235-82.496891 0.70215-2.117961-2.635941-3.015793-3.32658-0.909342zM380.599944 928.449724a340.565856 340.565856 0 0 1 75.291218-128.033056c1.519407-1.634514-0.920853-4.074773-2.44026-2.45177a344.629119 344.629119 0 0 0-76.177538 129.575484c-0.69064 2.117961 2.647451 3.027303 3.32658 0.909342zM492.644695 971.971524a633.178309 633.178309 0 0 0-7.228694-167.756339c-0.379852-2.187025-3.706432-1.254662-3.32658 0.920853a629.633026 629.633026 0 0 1 7.102076 166.835486c-0.195681 2.221557 3.257516 2.198536 3.453198 0zM623.405777 943.897027c-9.208527-27.947879-21.801187-54.560522-35.429807-80.57461-6.906395-13.191215-14.077535-26.232791-21.271697-39.262856-6.733735-12.23583-13.962429-24.172383-23.965192-34.094571-1.57696-1.56545-4.028731 0.87481-2.440259 2.440259 9.807081 9.691975 16.794051 21.421336 23.42419 33.38091q10.359593 18.589714 20.27027 37.375109c13.927897 26.336387 26.716239 53.328881 36.085915 81.668123 0.69064 2.09494 4.028731 1.151066 3.32658-0.920853z" fill="#FCC3DF"></path>
                                <path d="M228.923996 519.890407a283.887373 274.287484 90 1 0 548.574968 0 283.887373 274.287484 90 1 0-548.574968 0Z" fill="#F6B1D0"></path>
                                <path d="M229.246294 521.593984a265.896214 256.90639 90 1 0 513.812779 0 265.896214 256.90639 90 1 0-513.812779 0Z" fill="#FCD2E8"></path>
                                <path d="M324.473973 652.907578c16.517795 22.158018 35.521892 42.255628 59.25687 56.736036a167.986552 167.986552 0 0 0 75.970347 23.677425c2.233068 0.149639 2.210046-3.303559 0-3.453198a167.169295 167.169295 0 0 1-74.220727-23.205488c-23.274552-13.81279-41.956351-33.967954-58.013719-55.504395-1.312215-1.761131-4.316497 0-2.981261 1.74962z" fill="#FFFFFF"></path>
                            </g>
                        </svg>
                    </div>

                    <button class="text-center bg-purple-200 border border-purple-200 text-black hover:bg-purple-300 hover:text-white p-2 rounded-xl w-full mt-4"> اضف للسلة</button>

                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/" class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            الرجوع لباقي المنتجات
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {!! $post->title !!}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {!! $post->body !!}
                    </div>

                    <!-- Comments -->
                    <section class="col-span-8 col-start-5 mt-20 space-y-5">
                        <div class="border border-gray-200 p-6 rounded-xl">
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
                        </div>


                        @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                        @endforeach
                    </section>

                </div>
            </article>
        </main>
    </section>
</x-layout>