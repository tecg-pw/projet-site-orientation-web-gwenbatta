<x-commons.navigation></x-commons.navigation>
<main>
    <section aria-labelledby="slug">
        <div class="flex px-36 justify-between mt-20">
            <h2 id="slug" aria-level="2" role="heading" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mb-11">{{__('Nom du cours')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans text-2xl font-semibold"
               href="/about#course">{{__('Retour à la grille de cours')}}</a>
        </div>
        <div class="px-36 flex gap-20 text-xl">
            <p class="uppercase">Année de BAC</p>
            <a class="underline text-green-700 uppercase hover:text-orange-500" href="/bottin/teacher/name">Nom du professeur</a>
        </div>
        <div class="px-36 grid grid-cols-10 items-center mb-36 gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading" class="font-sans text-2xl font-medium mb-5">{{__('Description')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-10 ">{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')}}</p>
                    </div>
                </section>
            </div>
            <div class="col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg"
                         alt="">
                    <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg"
                         alt="">
                </figure>
            </div>
        </div>

    </section>
    <article class="bg-yellow-600 px-36 pb-40 pt-20" aria-labelledby="projects">
        <div class="justify-between flex">
            <h2 id="projects" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Projet réalisé dans le cadre de ce cours')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans text-2xl font-semibold"
               href="/project/index">{{__('Voir tous les projets')}}</a>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-center">
            @for($i=1; $i<4;$i++)
                <x-project :i="$i"></x-project>
            @endfor
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
