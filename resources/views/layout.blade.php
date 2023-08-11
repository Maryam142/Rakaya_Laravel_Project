<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    *{
        text-align: right;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="Laracasts Logo" width="145" height="10">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">الصفحة الرئيسية</a>

                <a href="#" class="bg-pink-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                  iاشترك للحصول على التحديثات
                </a>
            </div>
        </nav>

        <header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
                .. <span class="text-pink-500">واااو  </span>تصمم

            </h1>

            <!-- <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg"
                                                               alt="Head of Lary the mascot"></h2> -->

            <p class="text-sm mt-14">
            هنا الألوان تحلّي اللحظة ♡
            </p>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                <!--  Category -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold text-right">
                        <option value="category" disabled selected>الاقسام
                        </option>
                        <option value="personal">شخصي</option>
                        <option value="business">للأعمال</option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!-- Other Filters -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold text-right">
                        <option value="category" disabled selected>تصنيفات أخرى
                        </option>
                        <option value="foo">Foo
                        </option>
                        <option value="bar">Bar
                        </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!-- Search -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                    <form method="GET" action="#">
                        <input type="text" name="search" placeholder="ابحث هنا"
                               class="bg-transparent placeholder-black font-semibold text-sm text-right">
                    </form>
                </div>
            </div>
        </header>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex text-right">
                    <div class="flex-1 flex flex-col justify-between p-3">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="#"
                                   class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">اهداء</a>

                                <a href="#"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">تعديل</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                منظم جسارة - 1445 النموذج الثاني                                
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                            المنتج عبارة عن منتج رقمي 
                            الرجاء كتابة الايميل الصحيح عند التسجيل للشراء
                            </p>

                            <p class="mt-4">
                                تتضح الألوان في الصورة المعروضة= بنفسجي،سماوي،وردي،أخضر.. بدرجات فاتحة 
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="hidden lg:block  me-2">
                                <a href="#"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                > للمزيـد</a>
                            </div>

                            <div class="flex items-center text-sm">
                                <div class="ml-3 p-3">
                                    <h5 class="font-bold ">:تم هذا العمل بالتعاون مع</h5>
                                    <h6>إبهار</h6>
                                </div>
                                <svg viewBox="0 0 1024 1024" class="icon h-7" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M537.225476 296.123203s96.447809-86.32994 130.715039-154.104697c28.603987-41.219668 49.564896-143.376764-37.708918-97.437725-34.750678 18.290437-53.30586 56.655462-103.147011-15.309176-10.302039-14.883282-37.847046-60.937427-69.156037 6.238777 0.471937 3.994199-29.651457 49.967769-80.309865 8.207099 0 0-77.121413-50.117408-70.364657 26.670196 5.444542 21.50191 3.222984 110.502323 117.109441 200.907036zM535.176579 727.853476s96.459319 86.32994 130.726549 154.104697c28.592476 41.219668 49.564896 143.376764-37.708917 97.437726-34.762189-18.290437-53.30586-56.655462-103.147012 15.309176-10.359593 14.883282-37.847046 61.006491-69.156037-6.238777 0.471937-3.982688-29.662967-49.967769-80.321376-8.2071 0 0-77.121413 50.117408-70.364656-26.670196 5.456052-21.4904 3.222984-110.502323 117.109441-200.907035z" fill="#F09AC1"></path><path d="M531.942084 291.956345s84.545788-75.68258 114.577095-135.077579c25.070214-36.131957 43.452736-125.673371-33.047101-85.409087-30.468713 16.034347-46.733274 49.656981-90.416223-13.421428-9.035867-13.041576-33.173718-53.420967-60.626639 5.467563 0.414384 3.453198-25.991067 43.798056-70.399188 7.194162 0 0-67.613609-43.924673-61.674109 23.378147 4.776923 18.842948 2.820111 96.850682 102.652054 176.113077zM528.120545 739.571326s84.545788 75.694091 114.577096 135.08909c25.070214 36.131957 43.452736 125.673371-33.047101 85.409087-30.468713-16.034347-46.733274-49.668492-90.416224 13.421428-9.035867 13.041576-33.173718 53.420967-60.626638-5.479074 0.414384-3.453198-25.991067-43.740503-70.399189-7.182651 0 0-67.613609 43.924673-61.674108-23.389658 4.776923-18.831437 2.820111-96.850682 102.652053-176.113077z" fill="#E772AC"></path><path d="M374.717998 132.245957a344.65214 344.65214 0 0 0 76.177538 129.563973c1.530918 1.634514 3.959667-0.817257 2.44026-2.44026a340.588878 340.588878 0 0 1-75.279707-128.044566c-0.69064-2.106451-4.01722-1.151066-3.338091 0.920853zM486.647642 87.803304a630.208559 630.208559 0 0 1-7.102076 166.90455c-0.391362 2.175514 2.935218 3.107878 3.32658 0.909342a633.155288 633.155288 0 0 0 7.228693-167.756339c-0.195681-2.198536-3.648879-2.210046-3.453197 0zM617.535341 114.968458c-9.208527 27.625581-21.593996 53.9965-35.084487 79.768864-6.607118 12.661724-13.467471 25.070214-20.316313 37.536258s-14.112067 24.978129-24.379575 35.11902c-1.588471 1.56545 0.851789 4.005709 2.44026 2.440259 9.530825-9.415719 16.506284-20.719186 23.021317-32.356461q10.84304-19.418481 21.225654-39.136239c14.054514-26.601132 26.969473-53.881393 36.431235-82.496891 0.70215-2.117961-2.635941-3.015793-3.32658-0.909342zM380.599944 928.449724a340.565856 340.565856 0 0 1 75.291218-128.033056c1.519407-1.634514-0.920853-4.074773-2.44026-2.45177a344.629119 344.629119 0 0 0-76.177538 129.575484c-0.69064 2.117961 2.647451 3.027303 3.32658 0.909342zM492.644695 971.971524a633.178309 633.178309 0 0 0-7.228694-167.756339c-0.379852-2.187025-3.706432-1.254662-3.32658 0.920853a629.633026 629.633026 0 0 1 7.102076 166.835486c-0.195681 2.221557 3.257516 2.198536 3.453198 0zM623.405777 943.897027c-9.208527-27.947879-21.801187-54.560522-35.429807-80.57461-6.906395-13.191215-14.077535-26.232791-21.271697-39.262856-6.733735-12.23583-13.962429-24.172383-23.965192-34.094571-1.57696-1.56545-4.028731 0.87481-2.440259 2.440259 9.807081 9.691975 16.794051 21.421336 23.42419 33.38091q10.359593 18.589714 20.27027 37.375109c13.927897 26.336387 26.716239 53.328881 36.085915 81.668123 0.69064 2.09494 4.028731 1.151066 3.32658-0.920853z" fill="#FCC3DF"></path><path d="M228.923996 519.890407a283.887373 274.287484 90 1 0 548.574968 0 283.887373 274.287484 90 1 0-548.574968 0Z" fill="#F6B1D0"></path><path d="M229.246294 521.593984a265.896214 256.90639 90 1 0 513.812779 0 265.896214 256.90639 90 1 0-513.812779 0Z" fill="#FCD2E8"></path><path d="M324.473973 652.907578c16.517795 22.158018 35.521892 42.255628 59.25687 56.736036a167.986552 167.986552 0 0 0 75.970347 23.677425c2.233068 0.149639 2.210046-3.303559 0-3.453198a167.169295 167.169295 0 0 1-74.220727-23.205488c-23.274552-13.81279-41.956351-33.967954-58.013719-55.504395-1.312215-1.761131-4.316497 0-2.981261 1.74962z" fill="#FFFFFF"></path></g></svg>
                                <!-- <img src="/images/lary-avatar.svg" alt="Lary avatar"> -->
                            </div>
                        </footer>
                    </div>
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>
                </div>
            </article>

            <div class="lg:grid lg:grid-cols-2">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-5.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">اهداء</a>

                                    <a href="#"
                                       class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">تعديل</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        This is a big title and it will look great on two or even three lines. Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                         للمزيـد
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-2.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">اهداء</a>

                                    <a href="#"
                                       class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">تعديل</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        This is a big title and it will look great on two or even three lines. Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                    للمزيـد
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>

            <div class="lg:grid lg:grid-cols-3">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">اهداء</a>
                                    <a href="#"
                                       class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">تعديل</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        This is a big title and it will look great on two or even three lines. Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >للمزيـد</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-4.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">اهداء</a>

                                    <a href="#"
                                       class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">تعديل</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        This is a big title and it will look great on two or even three lines. Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                        للمزيـد
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-5.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">اهداء</a>
                                    <a href="#"
                                       class="px-3 py-1 border border-pink-300 rounded-full text-pink-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">تعديل</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        This is a big title and it will look great on two or even three lines. Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                      للمزيـد  
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16  text-center">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">ابق على اطلاع على أحدث التصاميم</h5>
            <p class="text-sm mt-3">نعدك بتصاميم تاخذك لعالم آخر</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="بريدك الالكتروني"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            اشتراك
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
