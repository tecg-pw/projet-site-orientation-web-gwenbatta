<x-commons.navigation></x-commons.navigation>
<main id="content">
    <article class="xl:px-36 px-10 mb-64" aria-labelledby="projects">
        <div class="flex flex-col xl:flex-row justify-between mb-10 mt-14 xl:items-center xl:mt-36 xl:mb-32">
            <h2 id="projects" role="heading" aria-level="2" class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('actu.actu_title')}}</h2>
            <x-search_bar class=""></x-search_bar>
        </div>
        <div class="xl:grid xl:grid-cols-3 xl:gap-8 flex flex-col gap-6 xl:justify-center">
            @foreach($news as $new)
                <article class="group hover:bg-orange-100 flex-col flex bg-yellow-100 rounded-3xl relative"
                         aria-labelledby="{{$new->slug}}">
                    <div class="flex-col flex px-4 mt-6">
                        <div class="flex justify-between mb-3">
                            <h3 class="text-xl xl:text-3xl " role="heading" aria-level="3"
                                id="{{$new->slug}}">{{$new->name}}</h3>
                            <p class="xl:text-xl relative z-30">{{$new->date}}</p>
                        </div>
                        <div class="flex justify-between mb-4">
                            <p class="max-w-[80%]">{{__($new->excerpt)}}</p>
                            <svg class="group-hover:mr-0 mr-2 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                        <a class="self-end linkcard" href="/news/{{$new->slug}}">{{__('actu.actu_link')}}</a>
                    </div>
                    <figure class="order-first">
                        <img class="rounded-t-3xl" src="{{$new->main_picture}}" alt="">
                    </figure>
                </article>
            @endforeach
                {{$news->links()}}
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
