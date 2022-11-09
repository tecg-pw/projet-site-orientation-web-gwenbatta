<x-commons.navigation></x-commons.navigation>
<main>
    <section class="px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="technical">
        <div class="flex-1 ">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans" role="heading" aria-level="2"
                id="technical">
                {{__('Pratico-Pratique')}}
            </h2>
            <p class="leading-10 text-xl">
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
    <x-questions-forum></x-questions-forum>
    <article class="px-36 mt-36 mb-36" aria-labelledby="glossary">
        <div class="flex justify-between">
        <h2 id="glossary" aria-level="2" role="heading" class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans">{{__('Quelques termes techniques')}}</h2>
        <a class="hover:text-orange-500  font-sans text-green-700 text-3xl font-semibold underline px-4" href="/technical/glossary">{{__('Voir plus de termes')}}</a>
        </div>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<5;$i++)
                <x-term-glossary :i="$i"/>
            @endfor
        </div>
    </article>
    <article class="bg-yellow-600 px-36 pt-20 pb-28" aria-labelledby="tutos">
        <div class="flex justify-between">
        <h2 id="tutos" aria-level="2" role="heading" class="text-4xl uppercase font-bold mb-16 font-sans">{{__('Quelques tutos')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 text-3xl font-semibold underline px-4" href="/technical/tuto">{{__('Voir plus de tutos')}}</a>
        </div>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<5;$i++)
                <x-tuto class="bg-white-100" :i="$i"/>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
    <article class="px-36 mt-36 mb-36">
        <div class="flex justify-between">
            <h2 id="tutos" aria-level="2" role="heading"  class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans">{{__('Documentations')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 text-3xl font-semibold underline px-4" href="/technical/docandtool/doc">{{__('Voir plus de documentations')}}</a>
        </div>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            <article aria-labelledby="php" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="php" aria-level="4" role="heading" class="font-medium text-2xl mb-2">{{__('Documentation de PHP')}}</h4>
                    </div>
                </div>
                <p class="mb-10 text-lg">{{__('Lien vers la documentation de PHP')}}</p>
                <div class="flex justify-between">
                    <p class="text-lg font-medium">
                        {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Développement côté serveur')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                              transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
            <article aria-labelledby="laravel" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="laravel" aria-level="4" role="heading" class="font-medium text-2xl mb-2">{{__('Documentation de Laravel')}}</h4>
                    </div>
                </div>
                <p class="mb-10 text-lg">{{__('Lien vers la documentation de Laravel traduite en français')}}</p>
                <div class="flex justify-between">
                    <p class="text-lg font-medium">
                        {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                              transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
            <article aria-labelledby="appart" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="appart" aria-level="4" role="heading" class="font-medium text-2xl mb-2">{{__('Liste des livres A Book Appart')}}</h4>
                    </div>
                </div>
                <p class="mb-10 text-lg">{{__('Lien vers le site de «A book Appart».')}}</p>
                <div class="flex justify-between">
                    <p class="text-lg font-medium">
                        {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                              transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
            <article aria-labelledby="wordpress" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="wordpress" aria-level="4" role="heading" class="font-medium text-2xl mb-2">{{__('Documentation de Wordpress')}}</h4>
                    </div>
                </div>
                <p class="mb-10 text-lg">{{__('Lien vers la documentation de Wordpress')}}</p>
                <div class="flex justify-between">
                    <p class="text-lg font-medium">
                        {{__('Cours de')}} <a class="relative underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                              transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
