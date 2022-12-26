<x-commons.navigation :page="$book->name"></x-commons.navigation>
<main id="content">
    <section aria-labelledby="slug">
        <div class="flex md:flex-row flex-col xl:px-36 2xl:px-48 px-10 justify-between  mt-20 mb-8">
            <h2 id="slug" aria-level="2" role="heading"
                class="xl:text-4xl md:text-3xl text-2xl md:max-w-sm xl:max-w-full md:leading-10 uppercase font-extrabold text-yellow-800 font-sans mb-4 xl:mb-11">{{$book->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl xl:text-end font-semibold"
               href="/{{app()->getLocale()}}/technical/docandtool/doc#books">{{__('technicals.book_single_back')}}</a>
        </div>
        <div class="xl:px-36 2xl:px-48 px-10 flex text-center gap-10 xl:gap-20 text-xl">
            @foreach($course as $classe)
                <a class=" underline text-green-700 uppercase hover:text-orange-500"
                   href="/{{app()->getLocale()}}/cours/{{$classe->translation->where('locale',app()->getLocale())->first()->slug}}">{{$classe->translation->where('locale',app()->getLocale())->first()->name}}</a>
                @foreach($teachers as $teacher)
                    <a class=" underline text-green-700 uppercase hover:text-orange-500"
                       href="/{{app()->getLocale()}}/bottin/teacher/{{$teacher->translation->where('locale',app()->getLocale())->first()->slug}}">{{$teacher->translation->where('locale',app()->getLocale())->first()->firstname}} {{$teacher->translation->where('locale',app()->getLocale())->first()->name}}</a>
                @endforeach
            @endforeach

        </div>
        <div class="xl:mt-20 mt-10 xl:px-36 2xl:px-48 px-10 lg:grid lg:grid-cols-10 items-center mb-36 lg:gap-x-10 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading"
                        class="font-sans text-lg md:text-xl xl:text-2xl font-medium mb-5">{{__('technicals.book_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl">{{$book->description}}</p>
                    </div>
                    <div class="mt-8">
                        <p class="flex gap-3 text-lg"> {{__('project.project_available')}}
                            @foreach($locales as $locale)
                                <a href="/{{$locale->locale}}/technical/books/{{$locale->slug}}" class="underline hover:text-orange-500 uppercase text-green-700">{{$locale->locale}}</a>
                            @endforeach
                        </p>
                    </div>
                </section>
            </div>
            <div class="lg:not-sr-only sr-only col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6">
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
