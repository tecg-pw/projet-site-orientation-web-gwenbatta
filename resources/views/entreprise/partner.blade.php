<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="px-36 mt-20" aria-labelledby="company">
        <div class="flex justify-between mb-24 items-center">
            <h2 id="company" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Les entreprises')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <x-sort_by_entreprise class="mb-14"/>
        <div class="flex gap-20 mb-12">
            <a class="text-xl underline text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2"
               href="/entreprise/partner">{{__('Partenaires')}}</a>
            <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/entreprise/internship">{{__('Offres de stage')}}</a>
        </div>

    </section>
        <article class="px-36 pt-20 pb-36 bg-yellow-600" aria-labelledby="list-partner">
            <h2 id="list-partner" role="heading" aria-level="2" class="sr-only">{{__('Liste de nos partenaires')}}</h2>
            <div class="grid grid-cols-2 gap-x-24 gap-y-8">
                @for($i=1; $i<9;$i++)
                    <article class="flex flex-col bg-white-100  py-6 px-8 rounded-3xl" aria-labelledby="slug">
                        <div class="flex items-center">
                            <div class="order-2 flex flex-col gap-1 ml-4">
                                <h3 id="slug" role="heading" aria-level="3" class="font-sans text-2xl">Léonard Web Solutions</h3>
                                <p>Rue de Bellaire 9</p>
                                <p class="uppercase text-xl">4802 verviers</p>
                            </div>
                            <img class="order-1 rounded-full" src="https://via.placeholder.com/98" alt="avatar">
                        </div>
                        <a class="order-3 underline text-green-700 font-sans font-semibold self-end" href="/entreprise/partner/single">{{__('En savoir plus')}}</a>
                    </article>
                @endfor
            </div>
            {{--                {{$posts->links()}}--}}
        </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
