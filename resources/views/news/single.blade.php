<x-commons.navigation></x-commons.navigation>
<main>
    <div class="px-36 flex flex-1 justify-end">
        <a class="text-green-700 underline font-sans text-2xl font-semibold"
           href="/news/index">{{__('Retour aux actualités')}}</a>
    </div>
    <section class="mt-20 px-36 grid grid-cols-10 items-center mb-36 gap-x-20" aria-labelledby="slug">
        <div class="mb-7 col-span-5 max-w-full">
            <div class="flex ">
                <h2 role="heading" id="slug" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mb-11">{{__('Porte ouverte HEPL')}}</h2>
            </div>
            <div class="flex gap-x-10 text-lg mb-8">
                <p >Année de BAC</p>
                <p class="uppercase">Liège</p>
            </div>
            <section aria-labelledby="description">
                <h3 role="heading" id="description" aria-level="3" class="font-sans text-xl font-medium mb-5">{{__('Description')}}</h3>
                <p class="text-lg leading-10 mb-10 flex flex-col gap-10">
                    <span>
                    {{__('La journée Porte Ouverte au Parc des Marêts aura lieu ce samedi 30 avril 2022. Lors de cette journée, vous pourrez rencontrer les professeurs de l’option, des anciens étudiants qui seront présents pour parler de leur expériences mais également tout l’équipe pédagogique. Vous pourrez parler avec eux et posez toutes vos questions. ')}}
                    </span>
                    <span>
                        {{__('Nous espérons vous y voir nombreux !')}}
                    </span></p>
                <a class="underline text-green-700 font-sans font-semibold " href="">{{__('En savoir plus')}}</a>
            </section>
        </div>
        <div class="col-span-5">
            <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                <img class="rounded-3xl row-span-5"
                     src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
                <img class="rounded-3xl col-span-2 order-1" src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
                <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg" alt="">
                <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg" alt="">
            </figure>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
