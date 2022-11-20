<x-commons.navigation></x-commons.navigation>
<main>
    <section class="xl:px-36 px-10 flex mt-14 xl:mb-36 gap-24 items-center" aria-labelledby="technical">
        <div class="flex-1">
            <h2 class="xl:text-4xl text-2xl leading-8 mb-6 uppercase font-bold text-yellow-800 xl:mb-16 font-sans"
                role="heading" aria-level="2"
                id="technical">
                {{__('technicals.technical_title')}}
            </h2>
            <p class="text-lg xl:leading-10 xl:text-xl">
                {{__('technicals.technical_text')}}
            </p>
        </div>
        <div class="sr-only xl:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
    <x-questions-forum></x-questions-forum>
    <article class="px-10 mt-14 mb-20 xl:px-36 xl:mt-36 xl:mb-36" aria-labelledby="glossary">
        <div class="flex flex-col mb-8 xl:flex-row justify-between">
            <h2 id="glossary" aria-level="2" role="heading"
                class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 mb-4 xl:mb-16 font-sans">{{__('technicals.glossary_title')}}</h2>
            <a class="hover:text-orange-500 font-sans text-green-700 xl:text-3xl font-semibold underline xl:px-4"
               href="/technical/glossary">{{__('technicals.glossary_button')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 flex flex-col gap-y-4 xl:gap-x-24 xl:gap-y-8">
            @for($i=1; $i<5;$i++)
                <x-term-glossary :i="$i"/>
            @endfor
        </div>
    </article>
    <article class="bg-yellow-600 px-10 xl:px-36 pt-20 pb-28" aria-labelledby="tutos">
        <div class="flex flex-col mb-8 xl:flex-row justify-between">
            <h2 id="tutos" aria-level="2" role="heading"
                class="text-2xl xl:text-4xl uppercase font-bold mb-4 xl:mb-16 font-sans">{{__('technicals.tuto_title')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 xl:text-3xl font-semibold underline xl:px-4"
               href="/technical/tuto">{{__('technicals.tuto_button')}}</a>
        </div>
        <div class="flex gap-y-4 flex-col xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8">
            @for($i=1; $i<5;$i++)
                <x-tuto class="bg-yellow-100" :i="$i"/>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
    <article class="xl:px-36 px-10 mt-36 mb-36">
        <div class="flex flex-col mb-8 xl:flex-row justify-between">
            <h2 id="tutos" aria-level="2" role="heading"
                class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 mb-4 xl:mb-16 font-sans">{{__('technicals.doc_title')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 xl:text-3xl font-semibold underline xl:px-4"
               href="/technical/docandtool/doc">{{__('technicals.doc_button')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4 ">
            <article aria-labelledby="php" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="php" aria-level="4" role="heading"
                            class="font-medium text-lg xl:text-2xl mb-2">{{__('Documentation de PHP')}}</h4>
                    </div>
                </div>
                <p class="mb-4 xl:mb-10 xl:text-lg">{{__('Lien vers la documentation de PHP')}}</p>
                <div class="flex justify-between">
                    <p class="xl:text-lg font-medium">
                        {{__('Cours de')}} <a class="underline text-green-700"
                                              href="/cours/show">{{__('Développement côté serveur')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path
                            d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                            transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
            <article aria-labelledby="laravel" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="laravel" aria-level="4" role="heading"
                            class="font-medium text-lg xl:text-2xl mb-2">{{__('Documentation de Laravel')}}</h4>
                    </div>
                </div>
                <p class="mb-4 xl:mb-10 xl:text-lg">{{__('Lien vers la documentation de Laravel traduite en français')}}</p>
                <div class="flex justify-between">
                    <p class="xl:text-lg font-medium">
                        {{__('Cours de')}} <a class="underline text-green-700"
                                              href="/cours/show">{{__('Projet Web')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path
                            d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                            transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
            <article aria-labelledby="appart" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="appart" aria-level="4" role="heading"
                            class="font-medium text-lg xl:text-2xl mb-2">{{__('Liste des livres A Book Appart')}}</h4>
                    </div>
                </div>
                <p class="mb-4 xl:mb-10 xl:text-lg">{{__('Lien vers le site de «A book Appart».')}}</p>
                <div class="flex justify-between">
                    <p class="xl:text-lg font-medium">
                        {{__('Cours de')}} <a class="underline text-green-700"
                                              href="/cours/show">{{__('Design Web B2')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path
                            d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                            transform="translate(-19 -8.001)" fill="#4e6458"/>
                    </svg>
                </div>
            </article>
            <article aria-labelledby="wordpress" class="group relative bg-yellow-100 py-6 px-8 rounded-3xl">
                <div class="flex justify-between">
                    <div>
                        <h4 id="wordpress" aria-level="4" role="heading"
                            class="font-medium text-lg xl:text-2xl mb-2">{{__('Documentation de Wordpress')}}</h4>
                    </div>
                </div>
                <p class="mb-4 xl:mb-10 xl:text-lg">{{__('Lien vers la documentation de Wordpress')}}</p>
                <div class="flex justify-between">
                    <p class="xl:text-lg font-medium">
                        {{__('Cours de')}} <a class="relative underline text-green-700"
                                              href="/cours/show">{{__('Design Web B2')}}</a>
                    </p>
                    <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                       href="">{{__('Voir la doc')}}</a>
                    <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 32 27.417">
                        <path
                            d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
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
