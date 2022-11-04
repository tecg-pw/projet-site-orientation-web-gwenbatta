<x-commons.navigation></x-commons.navigation>
<main>
    <article class="bg-yellow-600 px-36 py-20 ">
        <h2 class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Quelques questions récurrentes')}}</h2>
        <div class="grid grid-cols-3 gap-x-24 gap-y-8">
            <article id="test" class="col-span-2 flex flex-col bg-white-100 py-10 px-8 rounded-3xl">
                <h3 class="text-2xl font-sans font-medium">{{__('Est-ce qu’avoir un Mac est indispensable ?')}}</h3>
                @if(!(request()->has('show-reponse-slug')))
                    <div class="justify-end flex">
                        <a href="?show-reponse-slug#test" class="">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span class="flex-1 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                  height="50" class="flex-1 justify-end flex">
                                  <path id="_2020bf85e241394953aca514c8b97948"
                                        data-name="2020bf85e241394953aca514c8b97948"
                                        d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H29.5V17a2.5,2.5,0,0,0-5,0v7.5H17a2.5,2.5,0,0,0,0,5h7.5V37a2.5,2.5,0,0,0,5,0V29.5H37a2.5,2.5,0,0,0,0-5Z"
                                        transform="translate(-2 -2)" fill="#da953a"/>
                                </svg>
                                </span></a>
                    </div>
                @endif
                @if(request()->has('show-reponse-slug'))
                    <p class="mt-8 leading-8 mr-36">{{__('Non, il n’est pas obligatoire d’avoir un Mac pour les cours de web. Cependant, nous vous conseillons, si vous devez acheter un nouvel ordinateur et que vous vous destinez au web, de prendre un Mac. En effet, la plupart des professeurs de web utilise Apple et sauront mieux vous aider si vous avez un problème car il maitrise mieux ces machines et c’est un outil mieux adapter pour le développment de sites.')}}</p>
                    <div class="flex justify-end">
                        <a href="/forum/index#test"
                           class="justify-self-end">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                      <path id="_2020bf85e241394953aca514c8b97948"
                                            data-name="2020bf85e241394953aca514c8b97948"
                                            d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H17a2.5,2.5,0,0,0,0,5H37a2.5,2.5,0,0,0,0-5Z"
                                            transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>

                                </span></a>
                    </div>
                @endif
            </article>
            <article id="test1" class="col-span-2 flex flex-col bg-white-100 py-10 px-8 rounded-3xl">
                <h3 class="text-2xl font-sans font-medium">{{__('Est-ce qu’avoir un Mac est indispensable ?')}}</h3>
                @if(!(request()->has('show-reponse')))
                    <div class="justify-end flex">
                        <a href="?show-reponse" class="">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span class="flex-1 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                  height="50" class="flex-1 justify-end flex">
                                  <path id="_2020bf85e241394953aca514c8b97948"
                                        data-name="2020bf85e241394953aca514c8b97948"
                                        d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H29.5V17a2.5,2.5,0,0,0-5,0v7.5H17a2.5,2.5,0,0,0,0,5h7.5V37a2.5,2.5,0,0,0,5,0V29.5H37a2.5,2.5,0,0,0,0-5Z"
                                        transform="translate(-2 -2)" fill="#da953a"/>
                                </svg>
                                </span></a>
                    </div>
                @endif
                @if(request()->has('show-reponse'))
                    <p class="mt-8 leading-8 mr-36">{{__('Non, il n’est pas obligatoire d’avoir un Mac pour les cours de web. Cependant, nous vous conseillons, si vous devez acheter un nouvel ordinateur et que vous vous destinez au web, de prendre un Mac. En effet, la plupart des professeurs de web utilise Apple et sauront mieux vous aider si vous avez un problème car il maitrise mieux ces machines et c’est un outil mieux adapter pour le développment de sites.')}}</p>
                    <div class="flex justify-end">
                        <a href="/forum/index"
                           class="justify-self-end">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                      <path id="_2020bf85e241394953aca514c8b97948"
                                            data-name="2020bf85e241394953aca514c8b97948"
                                            d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H17a2.5,2.5,0,0,0,0,5H37a2.5,2.5,0,0,0,0-5Z"
                                            transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>

                                </span></a>
                    </div>
                @endif
            </article>
            <article id="test2" class="col-span-2 flex flex-col bg-white-100 py-10 px-8 rounded-3xl">
                <h3 class="text-2xl font-sans font-medium">{{__('Est-ce qu’avoir un Mac est indispensable ?')}}</h3>
                @if(!(request()->has('show-reponse')))
                    <div class="justify-end flex">
                        <a href="?show-reponse" class="">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span class="flex-1 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                  height="50" class="flex-1 justify-end flex">
                                  <path id="_2020bf85e241394953aca514c8b97948"
                                        data-name="2020bf85e241394953aca514c8b97948"
                                        d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H29.5V17a2.5,2.5,0,0,0-5,0v7.5H17a2.5,2.5,0,0,0,0,5h7.5V37a2.5,2.5,0,0,0,5,0V29.5H37a2.5,2.5,0,0,0,0-5Z"
                                        transform="translate(-2 -2)" fill="#da953a"/>
                                </svg>
                                </span></a>
                    </div>
                @endif
                @if(request()->has('show-reponse'))
                    <p class="mt-8 leading-8 mr-36">{{__('Non, il n’est pas obligatoire d’avoir un Mac pour les cours de web. Cependant, nous vous conseillons, si vous devez acheter un nouvel ordinateur et que vous vous destinez au web, de prendre un Mac. En effet, la plupart des professeurs de web utilise Apple et sauront mieux vous aider si vous avez un problème car il maitrise mieux ces machines et c’est un outil mieux adapter pour le développment de sites.')}}</p>
                    <div class="flex justify-end">
                        <a href="/forum/index"
                           class="justify-self-end">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                      <path id="_2020bf85e241394953aca514c8b97948"
                                            data-name="2020bf85e241394953aca514c8b97948"
                                            d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H17a2.5,2.5,0,0,0,0,5H37a2.5,2.5,0,0,0,0-5Z"
                                            transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>

                                </span></a>
                    </div>
                @endif
            </article>
            <article id="test3" class="col-span-2 flex flex-col bg-white-100 py-10 px-8 rounded-3xl">
                <h3 class="text-2xl font-sans font-medium">{{__('Est-ce qu’avoir un Mac est indispensable ?')}}</h3>
                @if(!(request()->has('show-reponse')))
                    <div class="justify-end flex">
                        <a href="?show-reponse" class="">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span class="flex-1 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                  height="50" class="flex-1 justify-end flex">
                                  <path id="_2020bf85e241394953aca514c8b97948"
                                        data-name="2020bf85e241394953aca514c8b97948"
                                        d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H29.5V17a2.5,2.5,0,0,0-5,0v7.5H17a2.5,2.5,0,0,0,0,5h7.5V37a2.5,2.5,0,0,0,5,0V29.5H37a2.5,2.5,0,0,0,0-5Z"
                                        transform="translate(-2 -2)" fill="#da953a"/>
                                </svg>
                                </span></a>
                    </div>
                @endif
                @if(request()->has('show-reponse'))
                    <p class="mt-8 leading-8 mr-36">{{__('Non, il n’est pas obligatoire d’avoir un Mac pour les cours de web. Cependant, nous vous conseillons, si vous devez acheter un nouvel ordinateur et que vous vous destinez au web, de prendre un Mac. En effet, la plupart des professeurs de web utilise Apple et sauront mieux vous aider si vous avez un problème car il maitrise mieux ces machines et c’est un outil mieux adapter pour le développment de sites.')}}</p>
                    <div class="flex justify-end">
                        <a href="/forum/index"
                           class="justify-self-end">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                      <path id="_2020bf85e241394953aca514c8b97948"
                                            data-name="2020bf85e241394953aca514c8b97948"
                                            d="M27,2A25,25,0,1,0,52,27,25,25,0,0,0,27,2Zm0,45A20,20,0,1,1,47,27,20,20,0,0,1,27,47ZM37,24.5H17a2.5,2.5,0,0,0,0,5H37a2.5,2.5,0,0,0,0-5Z"
                                            transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>

                                </span></a>
                    </div>
                @endif
            </article>
        </div>
    </article>
    <section class="mt-20">
        <div class="px-36 flex justify-between mb-24 items-center">
            <h2 id="forum" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Le forum')}}</h2>
            @auth()
                <a href="/forum/question"
                   class="font-sans text-center text-white-100 bg-green-700 px-4 py-4 rounded-2xl text-2xl font-semibold mr-10">{{__('Ajouter un question')}}</a>
            @endauth
        </div>
        <x-sort_by_forum class="px-36 mb-14"/>
        <div class="flex gap-32 mb-12 px-36">
            <a class="text-xl underline text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2"
               href="/forum/index#forum">{{__('Derniers sujets')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/latest-answers#forum">{{__('Dernières réponses')}}</a>
            {{--            @auth()--}}
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/my-subject#forum">{{__('Mes sujets')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/my-talks#forum">{{__('Mes discussions')}}</a>
            {{--            @endauth--}}
        </div>
        <div class="grid grid-cols-5 gap-24 mb-36">
            <div class="col-span-3 flex flex-col gap-y-8 pr-14 px-36 ">
                @for($i=1;$i<8;$i++)
                    <article class="bg-yellow-100 flex p-6 rounded-xl">
                        <div class="order-2 flex-1 flex flex-col ml-4">
                            <h3 class="order-2 font-medium font-sans text-2xl mb-4">Question du forum</h3>
                            <div class="flex justify-between">
                                <p class="text-xl mb-2">Nom de l'auteur</p>
                                <p class="font-bold text-lg text-green-500">Général</p>
                                <p>03 novembre 2022</p>
                            </div>
                            <div class="order-3 flex justify-between">
                                <div class="flex gap-10">
                                    <p>Comment:5</p>
                                    <p>3/5</p>
                                </div>
                                <a class="underline text-green-700 font-sans font-semibold" href="/forum/show">Voir la
                                    conversation</a>
                            </div>
                        </div>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">


                    </article>
                @endfor
            </div>
            <div class="col-span-2  bg-yellow-600 flex flex-col gap-y-6 pl-14 pb-14">
                <article class="pr-14 border-b-orange-500 border-b-2 pb-10">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6 mt-20">{{__('Rechercher')}}</h3>
                    <x-search_bar></x-search_bar>
                </article>
                <article class=" pr-14 border-b-orange-500 border-b-2 pb-10">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6 mt-10">{{__('Derniers sujet')}}</h3>
                    <div class="flex flex-col gap-y-8">
                        @for($i=1;$i<3;$i++)
                            <article class="bg-white-100 flex p-6 rounded-xl">
                                <div class="order-2 flex-1 flex flex-col ml-4">
                                    <h3 class="order-2 font-medium font-sans text-2xl mb-4">Question du forum</h3>
                                    <div class="flex justify-between">
                                        <p class="text-xl mb-2">Nom de l'auteur</p>
                                        <p>03 novembre 2022</p>
                                    </div>
                                    <div class="order-3 flex justify-between">
                                        <div class="flex gap-10">
                                            <p>Comment:5</p>
                                            <p>3/5</p>
                                        </div>
                                        <a class="underline text-green-700 font-sans font-semibold" href="">Voir la
                                            conversation</a>
                                    </div>
                                </div>
                            </article>
                        @endfor
                    </div>
                </article>
                <article class=" pr-14 pb-10">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6 mt-10">{{__('Sujets populaires')}}</h3>
                    <div class="flex flex-col gap-y-8">
                        @for($i=1;$i<3;$i++)
                            <article class="bg-white-100 flex p-6 rounded-xl">
                                <div class="order-2 flex-1 flex flex-col ml-4">
                                    <h3 class="order-2 font-medium font-sans text-2xl mb-4">Question du forum</h3>
                                    <div class="flex justify-between">
                                        <p class="text-xl mb-2">Nom de l'auteur</p>
                                        <p>03 novembre 2022</p>
                                    </div>
                                    <div class="order-3 flex justify-between">
                                        <div class="flex gap-10">
                                            <p>Comment:5</p>
                                            <p>3/5</p>
                                        </div>
                                        <a class="underline text-green-700 font-sans font-semibold" href="">Voir la
                                            conversation</a>
                                    </div>
                                </div>
                            </article>
                        @endfor
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
