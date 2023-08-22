@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl space-x-4">
    <div class="flex-grow text-right">
        <header class="mb-4">
            <h3 class="font-bold text-right">{{$comment->user->username}}</h3>
            <p> نشرت منذ
                <time>        
                    {{$comment->created_at}}    
                </time>
            </p>

        </header>
        <p class="flex text-right">
            {{$comment->body}}    
            <!-- منتج رائع وجميل ساعدي في تنظيم مهامي اليومية ومتابعة اهدافي الشهرية وتحقيق اهدافي للسنة اعجبتني الالوان وتناسقها  -->
             <!-- واختيار العبارات المحفزة كانت تلهمني كثيرا وخيار الاهداء خيار مميز شكرًا متجر واو  -->
        </p>
    </div>
    <div class="flex-shrink-0"><img src="/images/u (2).png" width="50px" alt=""></div>
</article>