<div {{ $attributes->class(['xl:not-sr-only sr-only col-span-2 bg-yellow-600 flex flex-col gap-y-6 pl-14 pb-14']) }}>
    <article class="pl-14 border-b-orange-500/40 border-b-2 pb-10" aria-labelledby="search">
        <h3 id="search" aria-level="3" role="heading"
            class="text-3xl font-sans font-light text-green-700 underline mb-6 mt-20">{{__('Rechercher')}}</h3>
        <x-search_bar></x-search_bar>
    </article>
    <article class="px-14 border-b-orange-500/40 border-b-2 pb-10" aria-labelledby="latest">
        <h3 id="latest" aria-level="3" role="heading"
            class="text-3xl font-light text-green-700 underline mb-6">{{__('Derniers sujet')}}</h3>
        <div class="flex flex-col gap-y-8">
            @for($i=1;$i<3;$i++)
                <article class="hover:bg-orange-100 group bg-white-100 relative flex p-6 rounded-xl"
                         aria-labelledby="{{'question'.$i}}">
                    <div class="order-2 flex-1 flex flex-col ml-4 justify-center gap-4">
                        <div class="flex-col flex">
                            <h4 class="order-2 font-medium font-sans text-2xl" id="{{'question'.$i}}"
                                role="heading"
                                aria-level="4">Question du forum</h4>
                            <div class="flex relative justify-between">
                                <p class="text-xl self-end">Nom de l'auteur</p>
                                <p class="text-xl self-end">03 nov. 2022</p>
                            </div>
                        </div>
                        <div class="order-3 flex justify-between">
                            <div class="flex gap-4">
                                <p class=" font-medium bg-orange-500/40 mr-4 px-6 pb-1 pt-1.5 rounded-lg text-lg text-green-700">
                                    Général</p>
                            </div>
                            <a class="linkcard underline text-green-700 font-sans font-semibold"
                               href="/forum/show">Voir
                                la
                                conversation</a>
                            <svg class="mr-4 self-end group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                    </div>
                </article>
            @endfor
        </div>
    </article>
    <article class="px-14 pb-10 mt-8" aria-labelledby="best-rating">
        <h3 id="best-rating" aria-level="3" role="heading"
            class="text-3xl font-light text-green-700 underline mb-6">{{__('Sujet Populaire')}}</h3>
        <div class="flex flex-col gap-y-8">
            @for($i=1;$i<3;$i++)
                <article class="hover:bg-orange-100 group bg-white-100 relative flex p-6 rounded-xl"
                         aria-labelledby="{{'question'.$i}}">
                    <div class="order-2 flex-1 flex flex-col ml-4 justify-center gap-4">
                        <div class="flex-col flex">
                            <h4 class="order-2 font-medium font-sans text-2xl" id="{{'question'.$i}}"
                                role="heading"
                                aria-level="4">Question du forum</h4>
                            <div class="flex relative justify-between">
                                <p class="text-xl self-end">Nom de l'auteur</p>
                                <p class="text-xl self-end">03 nov. 2022</p>
                            </div>

                        </div>
                        <div class="order-3 flex justify-between">
                            <div class="flex gap-4">
                                <p class=" font-medium bg-orange-500/40 mr-4 px-6 pb-1 pt-1.5 rounded-lg text-lg text-green-700">
                                    Général</p>
                            </div>
                            <a class="linkcard underline text-green-700 font-sans font-semibold"
                               href="/forum/show">Voir
                                la
                                conversation</a>
                            <svg class="mr-4 self-end group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                    </div>
                </article>
            @endfor
        </div>
    </article>
</div>
