<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="px-36 mt-20" aria-labelledby="company">
        <div class="flex justify-between mb-24 items-center">
            <h2 id="company" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Les entreprises')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <x-sort_by_entreprise class="mb-14"></x-sort_by_entreprise>
        <div class="flex gap-20 mb-12">
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/entreprise/partner">{{__('Partenaires')}}</a>
            <a class="text-xl underline text-green-700 font-semibold bg-orange-100 font-sans px-5 py-2"
               href="/entreprise/internship">{{__('Offres de stage')}}</a>
        </div>
    </section>
    <article class="px-36 pt-20 pb-36 bg-yellow-600" aria-labelledby="list-internship">
        <h2 id="list-internship" role="heading" aria-level="2" class="sr-only">{{__('Liste des offres de stages')}}</h2>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<11;$i++)
                <article class="bg-white-100 py-6 px-8 rounded-3xl" aria-labelledby="{{'slug'.$i}}">
                    <div class="flex justify-between">
                        <h3 id="{{'slug'.$i}}" role="heading" aria-level="3" class="font-sans font-medium text-2xl mb-3">UI / UX Designer Freelance</h3>
                        <p>Date de l'offre</p>
                    </div>
                    <p class="text-lg mb-3">Votre travail consiste à assimiler les besoins des différentes cibles et les
                        objectifs du client pour les traduire visuellement. Empathie et capacité d’analyse sont des
                        pré-requis indispensables pour cette mission.</p>
                    <div class="flex justify-between">
                        <a class="order-3 underline text-green-700 font-sans font-semibold self-end"
                           href="/entreprise/partner/single">Epic Agency</a>
                        <a class="order-3 underline text-green-700 font-sans font-semibold self-end"
                           href="/entreprise/internship/single">{{__('En savoir plus')}}</a>
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
