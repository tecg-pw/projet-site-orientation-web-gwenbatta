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
            <a class="text-xl underline text-green-700 font-semibold font-sans  px-5 py-2"
               href="/forum/index#forum">{{__('Derniers sujets')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/latest-answers#forum">{{__('Dernières réponses')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/my-subject#forum">{{__('Mes sujets')}}</a>
            <a class="text-xl rounded-lg bg-orange-100 underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/my-talks#forum">{{__('Mes discussions')}}</a>
        </div>
        <div class="grid grid-cols-5 gap-24 mb-36">
            <div class="col-span-3 flex flex-col gap-y-8 pr-14 px-36 ">
                <p>{{__('Vous n\'avez aucune discussions')}}</p>
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
