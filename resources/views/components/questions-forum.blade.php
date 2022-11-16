<article {{ $attributes->class(['px-10 pt-20 mt-24 xl:mt-40 bg-yellow-600 xl:px-36 pb-28']) }} aria-labelledby="questions">
    <div class="flex flex-col xl:mt-20 xl:flex-row xl:mb-24 mb-12">
        <h2 class="text-2xl mb-6 xl:text-4xl xl:max-w-[50%] uppercase font-bold xl:mb-12 font-sans xl:leading-12" role="heading" aria-level="2"
            id="questions">{{__('Quelques questions posées sur notre forum')}}</h2>
        <a class="hover:text-orange-500 font-sans  text-green-700  font-semibold underline flex-1 xl:text-end xl:text-3xl"
           href="forum/index">{{__('Voir le forum')}}</a>
    </div>
    <div class="xl:grid xl:grid-cols-5 xl:justify-between">
        <div class="xl:col-span-3 flex flex-col gap-y-8 xl:pr-14 border-r-2 border-r-orange-500/40">
            @for($i=1;$i<6;$i++)
                <article class="group hover:bg-orange-100 bg-white-100 relative flex xl:p-6 rounded-xl"
                         aria-labelledby="{{'question'.$i}}">
                    <div class="order-2 flex-1 flex flex-col ml-4 justify-center gap-4">
                        <div class="flex flex-col">
                            <h3 class="order-2 font-medium font-sans xl:text-2xl" id="{{'question'.$i}}"
                                role="heading"
                                aria-level="3">Question du forum</h3>
                            <div class="flex relative xl:justify-between">
                                <p class="xl:text-xl self-end">Nom de l'auteur</p>
                                <p class="xl:text-xl self-end">03 nov. 2022</p>
                        </div>
                        </div>
                        <div class="order-3 flex flex-col xl:flex-row justify-between">
                            <div class="flex gap-4 items-center">
                                <p class=" font-medium bg-orange-500/40 mr-4 px-6 pb-1 pt-1.5 rounded-lg xl:text-lg text-green-700">
                                    Général</p>
                                <p class="xl:text-xl">Comment:5</p>
                            </div>
                            <a class="linkcard underline text-green-700 font-sans font-semibold" href="/forum/show">Voir
                                la
                                conversation</a>
                            <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                    </div>
                    <img class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                         src="https://placehold.jp/115x115.png"
                         alt="Nom">
                </article>
            @endfor
        </div>
        <div class="col-span-2 flex flex-col gap-y-6 xl:pl-14">
            <article class="border-b-orange-500/40 border-b-2 pb-10" aria-labelledby="latest">
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
            <article class="pb-10 mt-8" aria-labelledby="best-rating">
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
    </div>
</article>
