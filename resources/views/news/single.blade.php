<x-commons.navigation></x-commons.navigation>
<main>
    <section aria-labelledby="slug">
        <div class="flex px-36 justify-between mt-20">
            <h2 id="slug" aria-level="2" role="heading"
                class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mb-11">{{__('Porte Ouverte de la HEPL')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans text-2xl font-semibold"
               href="/about#jobs">{{__('actu.actu_single_back')}}</a>
        </div>
        <div class="px-36 flex gap-20 text-xl">
            <p>Année</p>
            <p>Lieu</p>
        </div>
        <div class="px-36 grid grid-cols-10 items-center mb-36 gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading"
                        class="font-sans text-xl font-medium mb-5">{{__('actu.actu_single_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-10 mb-10 flex flex-col gap-10">
                    <span>
                    {{__('La journée Porte Ouverte au Parc des Marêts aura lieu ce samedi 30 avril 2022. Lors de cette journée, vous pourrez rencontrer les professeurs de l’option, des anciens étudiants qui seront présents pour parler de leur expériences mais également tout l’équipe pédagogique. Vous pourrez parler avec eux et posez toutes vos questions. ')}}
                    </span>
                            <span>
                        {{__('Nous espérons vous y voir nombreux !')}}
                    </span>
                        </p>
                        <a class="hover:text-orange-500 underline text-xl text-green-700 font-sans font-semibold "
                           href="">{{__('actu.actu_single_more')}}</a>
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
                    <img class="col-span-3 rounded-3xl order-4" src="https://placehold.jp/721x239.png" alt="">
                </figure>
            </div>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
