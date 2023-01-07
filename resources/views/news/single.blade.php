<x-commons.navigation :page="$new->name"></x-commons.navigation>
<main id="content">
    <div class="flex items-center px-10 2xl:px-48 xl:px-32 mt-20">
        <a href="/{{app()->getLocale()}}/news/index" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.actualities')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/news/{{$new->slug}}" class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{$new->name}}
        </a>
    </div>
    <section class="mb-20" aria-labelledby="{{$new->slug}}">
        <div class="flex md:flex-row flex-col px-10 xl:px-32 lg:px-16 2xl:px-48 justify-between mt-20">
            <h2 id="{{$new->slug}}" aria-level="2" role="heading"
                class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-3 xl:mb-11">{{$new->name}}</h2>
            <a class="hover:text-orange-500 mb-5 text-green-700 underline font-sans md:text-xl xl:text-2xl 2xl:text-3xl font-semibold"
               href="/{{app()->getLocale()}}/news/index">{{__('actu.actu_single_back')}}</a>
        </div>
        <div class="xl:px-32 lg:px-16 2xl:px-48 px-10 flex gap-20 md:text-lg xl:text-xl 2xl:text-2xl mb-5">
            @if($new->date !== null)
                <p>{{ucwords($new->date->translatedFormat('d F Y '))}}</p>
            @endif
            <p>{{$new->lieu}}</p>
        </div>
        <div class="xl:px-32 lg:px-16 2xl:px-48 px-10 lg:grid lg:grid-cols-10 items-center mb-30 lg:px-16 lg:gap-x-10 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading"
                        class="font-sans text-lg xl:text-xl 2xl:text-2xl font-medium mb-5">{{__('actu.actu_single_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <div class="xl:text-xl 2xl:text-2xl xl:leading-10 2xl:leading-12 leading-8 flex text-lg flex-col gap-10">
                            {!!$new->description!!}
                        </div>
                        <div class="mb-10">
                            <p class="flex text-lg gap-3 xl:text-xl 2xl:text-2xl"> {{__('project.project_available')}}
                                @foreach($locales as $locale)
                                    <a href="/{{$locale->locale}}/news/{{$locale->slug}}" class="underline uppercase text-green-700">{{$locale->locale}}</a>
                                @endforeach
                            </p>
                        </div>
                        <a class="hover:text-orange-500 underline md:text-xl xl:text-2xl 2xl:text-3xl mb-20 text-green-700 font-sans font-semibold "
                           href="{{$new->link}}">{{__('actu.actu_single_more')}}</a>
                    </div>
                </section>
            </div>
            <div class="sr-only lg:not-sr-only lg:self-start xl:mt-8 col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         src="/img-redimensions/girl-on-computer-526.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         src="/img-redimensions/ux-468.jpg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/coding-picture.jpg"
                         alt="">
                    <img class="rounded-3xl order-3" src="/img-redimensions/coding-person-picture.jpg"
                         alt="">
                    <img class="col-span-3 rounded-3xl order-4" src="/img-redimensions/class-group.jpg" alt="">
                </figure>
            </div>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
