<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="px-36 mt-20" aria-labelledby="company">
        <div class="flex justify-between mb-24 items-center">
            <h2 id="company" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Les entreprises')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <x-sort_by_entreprise class="mb-14"></x-sort_by_entreprise>
        <div class="flex gap-20 mb-12">
            <a class="text-xl underline rounded-lg text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2"
               href="/entreprise/partner">{{__('Partenaires')}}</a>
            <a class="hover:text-orange-500 text-xl underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/entreprise/internship">{{__('Offres de stage')}}</a>
        </div>

    </section>
        <article class="px-36 pt-20 pb-36 bg-yellow-600" aria-labelledby="list-partner">
            <h2 id="list-partner" role="heading" aria-level="2" class="sr-only">{{__('Liste de nos partenaires')}}</h2>
            <div class="grid grid-cols-2 gap-x-24 gap-y-8">
                @for($i=1; $i<9;$i++)
                    <article class="group hover:bg-orange-100 relative flex flex-col bg-white-100 py-6 px-8 rounded-3xl"
                             aria-labelledby="{{'name'.$i}}">
                        <div class="flex flex-1 items-center">
                            <div class="flex-1 order-2 ml-4">
                                <h4 id="{{'name'.$i}}" role="heading" aria-level="4" class="text-2xl">Léonard Web Solutions</h4>
                                <div class="mt-1 flex justify-between">
                                    <div class="flex gap-2">
                                        <p class="text-lg">Rue de Bellaire 9,</p>
                                        <p class="uppercase text-lg">4802 Verviers</p>
                                    </div>
                                    <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg" width="25"
                                         viewBox="0 0 32 27.417">
                                        <path id="e6c07a72bd494f72e4a4d962e39f725c"
                                              d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                              transform="translate(-19 -8.001)" fill="#4e6458"/>
                                    </svg>
                                </div>
                            </div>
                            <img class="order-1 rounded-full" src="/img-redimensions/test.jpeg" alt="avatar">
                        </div>
                        <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                           href="/entreprise/partner/single">{{__('En savoir plus')}}</a>
                    </article>
                @endfor
            </div>
            {{--                {{$posts->links()}}--}}
        </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
