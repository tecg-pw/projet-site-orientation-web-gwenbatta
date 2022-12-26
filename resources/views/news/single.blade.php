<x-commons.navigation :page="$new->name"></x-commons.navigation>
<main id="content">
    <section class="mb-20" aria-labelledby="{{$new->slug}}">
        <div class="flex md:flex-row flex-col px-10 xl:px-32 lg:px-16 2xl:px-48 justify-between mt-20">
            <h2 id="{{$new->slug}}" aria-level="2" role="heading"
                class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-3 xl:mb-11">{{$new->name}}</h2>
            <a class="hover:text-orange-500 mb-5 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/news/index">{{__('actu.actu_single_back')}}</a>
        </div>
        <div class="xl:px-32 lg:px-16 2xl:px-48 px-10 flex gap-20 md:text-lg xl:text-xl mb-5">
            @if($new->date !== null)
                <p>{{ucwords($new->date->translatedFormat('d F Y '))}}</p>
            @endif
            <p>{{$new->lieu}}</p>
        </div>
        <div class="xl:px-32 lg:px-16 2xl:px-48 px-10 lg:grid lg:grid-cols-10 items-center mb-30 lg:px-16 lg:gap-x-10 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading"
                        class="font-sans text-lg xl:text-xl font-medium mb-5">{{__('actu.actu_single_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="xl:text-lg xl:leading-10 leading-8 flex flex-col gap-10">
                            {{$new->description}}
                        </p>
                        <div class="mb-10">
                            <p class="flex gap-3 xl:text-lg"> {{__('project.project_available')}}
                                @foreach($locales as $locale)
                                    <a href="/{{$locale->locale}}/news/{{$locale->slug}}" class="underline uppercase text-green-700">{{$locale->locale}}</a>
                                @endforeach
                            </p>
                        </div>
                        <a class="hover:text-orange-500 underline md:text-xl xl:text-2xl mb-20 text-green-700 font-sans font-semibold "
                           href="{{$new->link}}">{{__('actu.actu_single_more')}}</a>
                    </div>
                </section>
            </div>
            <div class="sr-only lg:not-sr-only lg:self-start xl:self-center col-span-5">
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
