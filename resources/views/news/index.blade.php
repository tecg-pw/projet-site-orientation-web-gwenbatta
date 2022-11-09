<x-commons.navigation></x-commons.navigation>
<main>
    <article class="px-36 mb-64" aria-labelledby="projects">
        <div class="flex justify-between mb-12 mt-36">
            <h2 class="text-4xl uppercase font-bold text-yellow-800  font-sans" role="heading" aria-level="2" id="projects">
                {{__('Liste des actualités')}}
            </h2>
            <x-search_bar></x-search_bar>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-center">
            @for($i=1; $i<7;$i++)
                <article class="group flex-col flex bg-yellow-100 rounded-3xl relative"
                         aria-labelledby="{{'slug-event'}}">
                    <div class="flex-col flex px-4 mt-6">
                        <div class="flex justify-between">
                            <h3 class="text-3xl mb-3" role="heading" aria-level="3"
                                id="{{'slug'}}">{{__('Porte ouverte')}}</h3>
                            <p class="text-xl relative z-30">{{__('30 avr. 2022')}}</p>
                        </div>
                        <div class="flex justify-between mb-4">
                            <p class="max-w-[80%]">Les portes ouvertes de la HEPL vous permettra de visiter l’école de votre choix et de rencontrer les professeurs</p>
                            <svg class="group-hover:mr-0 mr-2 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                        <a class="self-end linkcard" href="/news/single">{{__('Voir le projet')}}</a>
                    </div>
                    <figure class="order-first">
                        <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                    </figure>
                </article>
            @endfor
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
