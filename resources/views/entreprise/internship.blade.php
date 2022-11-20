<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="xl:px-36 px-10 mt-20" aria-labelledby="company">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="company" role="heading" aria-level="2" class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('agency.agency_title')}}</h2>
            <x-search_bar class=""></x-search_bar>
        </div>
        <x-sort_by_entreprise class="mb-14"></x-sort_by_entreprise>
        <div class="flex xl:gap-20 mb-12 justify-between xl:justify-start">
            <a class="hover:text-orange-500 xl:text-xl text-lg underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/entreprise/partner">{{__('agency.partner_link')}}</a>
            <a class=" xl:text-xl text-lg underline text-green-700 bg-orange-100 rounded-lg font-semibold font-sans px-5 py-2"
               href="/entreprise/internship">{{__('agency.offer_link')}}</a>
        </div>
    </section>
    <article class="px-10 xl:px-36 pt-20 pb-36 bg-yellow-600" aria-labelledby="list-internship">
        <h2 id="list-internship" role="heading" aria-level="2" class="sr-only">{{__('agency.offer_list')}}</h2>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @for($i=1; $i<11;$i++)
                <article class="group hover:bg-orange-100 relative flex flex-col bg-white-100 py-4 px-4 xl:py-6 xl:px-8 rounded-3xl"
                         aria-labelledby="{{'name'.$i}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <div class="xl:flex-row flex-col flex justify-between">
                                <h3 id="{{'name'.$i}}" role="heading" aria-level="4" class="text-lg xl:text-2xl">UI / UX
                                    Designer Freelance</h3>
                                <p class="xl:text-lg">30 avr. 2022</p>
                            </div>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col gap-2 max-w-[80%]">
                                    <p class="text">Votre travail consiste à assimiler les besoins des différentes
                                        cibles et les
                                        objectifs du client pour les traduire visuellement. Empathie et capacité
                                        d’analyse sont des
                                        prérequis indispensables pour cette mission.</p>
                                    <p class="font-medium xl:text-lg">Epic Agency</p>
                                </div>
                                <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                                     width="25"
                                     viewBox="0 0 32 27.417">
                                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                       href="/entreprise/internship/single">{{__('En savoir plus')}}</a>
                </article>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
