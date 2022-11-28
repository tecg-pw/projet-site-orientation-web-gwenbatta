<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section aria-labelledby="slug">
        <div class="flex xl:flex-row flex-col xl:px-36 px-10 justify-between mt-20 mb-8">
            <h2 id="slug" aria-level="2" role="heading"
                class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-4 xl:mb-11">{{$book->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl xl:text-end font-semibold"
               href="/technical/docandtool/doc#books">{{__('technicals.book_single_back')}}</a>
        </div>
        <div class="xl:px-36 px-10 flex text-center gap-10 xl:gap-20 text-xl">
            @foreach($book->courses as $classe)
                <a class=" underline text-green-700 uppercase hover:text-orange-500"
                   href="/cours/{{$classe->slug}}">{{$classe->name}}</a>
                @foreach($teachers as $teacher)
                    <a class=" underline text-green-700 uppercase hover:text-orange-500"
                       href="/bottin/teacher/{{$teacher->slug}}">{{$teacher->firstname}} {{$teacher->name}}</a>
                @endforeach
            @endforeach

        </div>
        <div class="xl:mt-20 mt-10 xl:px-36 px-10 xl:grid xl:grid-cols-10 items-center mb-36 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading"
                        class="font-sans text-xl xl:text-2xl font-medium mb-5">{{__('technicals.book_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl">{{$book->description}}</p>
                    </div>
                </section>
            </div>
            <div class="xl:not-sr-only sr-only col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg"
                         alt="">
                    <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg"
                         alt="">
                    <img class="col-span-3 rounded-3xl order-4" src="https://placehold.jp/721x239.png" alt="">
                </figure>
            </div>
        </div>

    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
