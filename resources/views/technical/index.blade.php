<x-commons.navigation></x-commons.navigation>
<main>
    <section class="px-36 flex mt-14 mb-36 gap-24 items-center">
        <div class="flex-1 ">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans" role="heading" aria-level="2"
                id="projects">
                {{__('Pratico-Pratique')}}
            </h2>
            <p class="leading-8">
                {{__('Sur cette page, vous trouverez tout ce qui peut vous être utile que ce soit au sein de l’option web, au travers de ce site ou encore pour préparer au mieux votre rentrée en web par des petits tutoriels qui vous sont proposer, une section glossaire où vous retrouverez des termes très important pour le web et votre vision du web et enfin une section avec quelques questions posées sur notre forum qui vous permettront de vous éclairer sur ce que propose l’orientation et sur les questions que vous vous posez sans doute vous-même. ')}}
            </p>
        </div>
        <div class="flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
    <article class="pt-20  mt-40 bg-yellow-600 px-36 pb-28" aria-labelledby="questions">
        <div class="mt-20 flex mb-24">
            <h2 class="text-4xl uppercase font-bold mb-12 font-sans" role="heading" aria-level="2"
                id="questions">{{__('Quelques questions posées sur notre forum')}}</h2>
            <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1"
               href="forum/index">{{__('Voir le forum')}}</a>
        </div>
        <div class="grid grid-cols-5 justify-between">
            <div class="col-span-3 flex flex-col gap-y-8 pr-14 border-r-2 border-r-orange-500">
                @for($i=1;$i<6;$i++)
                    <article class="bg-white-100 flex p-6 rounded-xl">
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
                                <a class="underline text-green-700 font-sans font-semibold" href="">Voir la conversation</a>
                            </div>
                        </div>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">


                    </article>
                @endfor
            </div>
            <div class="col-span-2 flex flex-col gap-y-6 pl-14">
                <article class="border-b-orange-500 border-b-2 pb-10">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Derniers sujet')}}</h3>
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
                                    <a class="underline text-green-700 font-sans font-semibold" href="">Voir la conversation</a>
                                </div>
                            </div>
                        </article>
                    @endfor
                    </div>
                </article>
                <article class="flex flex-col gap-y-8 ">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Sujets populaires')}}</h3>
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
                                    <a class="underline text-green-700 font-sans font-semibold" href="">Voir la conversation</a>
                                </div>
                            </div>
                        </article>
                    @endfor
                    </div>
                </article>
            </div>
        </div>
    </article>
    <article class="px-36 mt-36 mb-36">
        <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans">{{__('Quelques termes techniques')}}</h2>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<5;$i++)
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <h4 class="font-sans font-medium text-2xl mb-3">Accessibilité</h4>
                    <p class="text-lg">1. Caractère de quelque chose, d’un lieu qui est accessibles : L’accessibilité
                        d’un bus, d’un immeuble aux handicapés.<br>2. Droit, possibilité qu’a quelqu’un d’avoir accès à
                        quelque chose : L’accessibilité à un emploi.</p>
                </article>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
    <article class="bg-yellow-600 px-36 pt-20 pb-28">
        <h2 class="text-4xl uppercase font-bold mb-16 font-sans">{{__('Quelques tutos')}}</h2>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<5;$i++)
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 class="font-sans font-medium text-2xl mb-2">Froggy</h4>
                            <p class="mb-3">Date de publication</p>
                        </div>
                        @auth()
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20.996 30">
                                <path id="c839c07daa330db315a65863143c41b9"
                                      d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"
                                      transform="translate(-5 -2)" fill="#da953a"/>
                                <path id="c839c07daa330db315a65863143c41b9-2"
                                      data-name="c839c07daa330db315a65863143c41b9"
                                      d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"
                                      transform="translate(-5 -2)" fill="#da953a"/>
                            </svg>
                        @endauth
                    </div>
                    <p class="mb-10 text-lg">Exercice d’introduction à Flexbox, une technique CSS </p>
                    <div class="flex justify-between">
                        <p class="text-orange-500 font-sans text-lg font-medium">CSS</p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Faire l\'exercices')}}</a>
                    </div>
                </article>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
