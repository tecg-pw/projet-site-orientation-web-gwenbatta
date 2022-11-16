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
            <a class="text-xl underline text-green-700 font-semibold rounded-lg font-sans bg-orange-100 px-5 py-2"
               href="/forum/index#forum">{{__('Derniers sujets')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
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
                @for($i=1;$i<8;$i++)
                    <article class="group hover:bg-orange-100 bg-yellow-100 relative flex p-6 rounded-xl"
                             aria-labelledby="{{'question'.$i}}">
                        <div class="order-2 flex-1 flex flex-col ml-4 justify-center gap-4">
                            <div class="flex flex-col">
                                <h3 class="order-2 font-medium font-sans text-2xl" id="{{'question'.$i}}"
                                    role="heading"
                                    aria-level="3">Question du forum</h3>
                                <div class="flex relative justify-between">
                                    <p class="text-xl self-end">Nom de l'auteur</p>
                                    <p class="text-xl self-end">03 nov. 2022</p>
                                </div>
                            </div>
                            <div class="order-3 flex justify-between">
                                <div class="flex gap-4 items-center">
                                    <p class=" font-medium bg-orange-500/40 mr-4 px-6 pb-1 pt-1.5 rounded-lg text-lg text-green-700">
                                        Général</p>
                                    <p class="text-xl">Comment:5</p>
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
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/115x115.png"
                             alt="Nom">
                    </article>
                @endfor
            </div>
            <x-aside_forum></x-aside_forum>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
