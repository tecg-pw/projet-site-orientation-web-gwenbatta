<x-commons.navigation></x-commons.navigation>
<main>
    <x-recurrent_questions></x-recurrent_questions>
    <section class="mt-20" aria-labelledby="forum">
        <div class="px-36 flex justify-between mb-24 items-center">
            <h2 id="forum" aria-level="2" role="heading"
                class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Le forum')}}</h2>
            @auth()
                <a href="/forum/question"
                   class="font-sans text-center text-white-100 bg-green-700 px-4 py-4 rounded-2xl text-2xl font-semibold mr-10">{{__('Ajouter un question')}}</a>
            @endauth
        </div>
        <x-sort_by_forum class="px-36 mb-14"></x-sort_by_forum>
        <div class="flex gap-32 mb-12 px-36">
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/index#forum">{{__('Derniers sujets')}}</a>
            <a class="text-xl underline text-green-700 rounded-lg  bg-orange-100  font-semibold font-sans px-5 py-2"
               href="/forum/latest-answers#forum">{{__('Dernières réponses')}}</a>
                        @auth()
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/my-subject#forum">{{__('Mes sujets')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/my-talks#forum">{{__('Mes discussions')}}</a>
                        @endauth
        </div>
        <div class="grid grid-cols-5 gap-24 mb-36">
            <div class="col-span-3 flex flex-col gap-y-8 pr-14 px-36 ">
                @for($i=1;$i<4;$i++)
                    <article class="flex flex-col bg-yellow-100 py-6 px-10 rounded-xl" aria-labelledby="comment">
                        <div class=" flex mb-5 rounded-xl order-3 bg-white-100 p-3 border-2 border-orange-500 gap-2">
                        <h3 id="comment" aria-level="3" role="heading" class="order-2 font-sans font-medium text-xl" >{{__('Question / sujet du forum ')}}</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 34.194 34.196">
                            <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                <path id="_106780bf1ed9964c2ffe0eda53fe07ea" data-name="106780bf1ed9964c2ffe0eda53fe07ea" d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z" transform="translate(873 1771)" fill="#da953a"/>
                                <path id="_846e0b1f246b76024f36d97f9864a9c8" data-name="846e0b1f246b76024f36d97f9864a9c8" d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z" transform="translate(875.711 1774.888)" fill="#da953a"/>
                            </g>
                        </svg>
                        </div>
                        <p class="leading-8 mt-6">
                            {{__('Hello ! Je suis content que tu aies poser la question car je suis dans le même cas que toi et j’avoue que les maths ne me dérange pas mais je ne veux pas en faire mon métier pour autant. Je suis curieux aussi de savoir la réponse du coup !')}}
                        </p>
                        <p class="text-green-500 font-medium text-lg mt-4 mb-2">{{__('Commentaire du sujet')}}</p>
                        <div class="flex -order-1 items-center ">
                            <div class="order-2 ml-4">
                                <p class="text-xl">Nom de l'auteur</p>
                                <p class="">24 septembre 2022</p>
                            </div>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2  rounded-full"
                             src="https://placehold.jp/98x98.png"
                             alt="Nom">
                        </div>
                        <div class="relative flex order-7 gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24.998 25">
                                <path id="_55875de67f0001d7695d7cadee652fba" data-name="55875de67f0001d7695d7cadee652fba" d="M26.125,12.1a3.75,3.75,0,0,0-2.875-1.35h-5.7l.7-1.787A5.162,5.162,0,0,0,13.387,2a1.25,1.25,0,0,0-1.137.737L8.687,10.75H5.75A3.75,3.75,0,0,0,2,14.5v8.75A3.75,3.75,0,0,0,5.75,27H21.662a3.75,3.75,0,0,0,3.687-3.075l1.587-8.75A3.75,3.75,0,0,0,26.125,12.1ZM8.25,24.5H5.75A1.25,1.25,0,0,1,4.5,23.25V14.5a1.25,1.25,0,0,1,1.25-1.25h2.5ZM24.5,14.725l-1.587,8.75a1.25,1.25,0,0,1-1.25,1.025H10.75V12.262l3.4-7.65a2.637,2.637,0,0,1,1.725,3.475l-.663,1.787A2.5,2.5,0,0,0,17.55,13.25h5.7a1.276,1.276,0,0,1,1.25,1.475Z" transform="translate(-2 -2)" fill="#da953a"/>
                            </svg>
                            <p class="pt-1">4</p>
                        </div>
                    </article>
                @endfor
            </div>
            <div class="col-span-2  bg-yellow-600 flex flex-col gap-y-6 pl-14 pb-14">
                <article class="pr-14 border-b-orange-500/40 border-b-2 pb-10" aria-labelledby="search">
                    <h3 id="search" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline mb-6 mt-20">{{__('Rechercher')}}</h3>
                    <x-search_bar></x-search_bar>
                </article>
                <article class=" pr-14 border-b-orange-500/40 border-b-2 pb-10" aria-labelledby="latest">
                    <h3 id="latest" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline mb-6 mt-10">{{__('Derniers sujet')}}</h3>
                    <div class="flex flex-col gap-y-8">
                        @for($i=1;$i<3;$i++)
                            <article class="bg-white-100 flex p-6 rounded-xl" aria-labelledby="{{'question-latest'.$i}}">
                                <div class="order-2 flex-1 flex flex-col ml-4">
                                    <h4 id="{{'question-latest'.$i}}" aria-level="4" role="heading" class="order-2 font-medium font-sans text-2xl mb-4">Question du forum</h4>
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
                <article class=" pr-14 pb-10" aria-labelledby="best-rating">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline mb-6 mt-10">{{__('Sujets populaires')}}</h3>
                    <div class="flex flex-col gap-y-8">
                        @for($i=1;$i<3;$i++)
                            <article class="bg-white-100 flex p-6 rounded-xl" aria-labelledby="{{'question-rating'.$i}}">
                                <div class="order-2 flex-1 flex flex-col ml-4">
                                    <h4 id="{{'question-rating'.$i}}" aria-level="4" role="heading" class="order-2 font-medium font-sans text-2xl mb-4">Question du forum</h4>
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
