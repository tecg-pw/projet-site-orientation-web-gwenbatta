<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="mt-20" aria-labelledby="bottin">
        <div class="px-36 flex justify-between mb-7 items-center">
            <h2 id="bottin" role="heading" aria-level="2"
                class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Alumni')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <p class="px-36 mb-7 max-w-[55%] text-xl leading-10">{{__('Vous trouverez sur cette page une liste de tous nos anciens étudiants dont nous sommes très fier')}}</p>
        <x-sort_by class="px-36 mb-14"></x-sort_by>
        <article class="px-36 grid grid-cols-2 gap-x-24 gap-y-8" aria-labelledby="list-alumni">
            <h3 id="list-alumni" role="heading" aria-level="3" class="sr-only">{{__('Liste du bottin')}}</h3>
            @for($i=1; $i<11;$i++)
                <article class="hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-6 px-8 rounded-3xl"
                         aria-labelledby="{{'name'.$i}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <h4 id="{{'name'.$i}}" role="heading" aria-level="4" class="text-2xl">Gwenaëlle Batta</h4>
                            <div class="mt-1 flex justify-between">
                                <div class="flex gap-4">
                                    <p class="uppercase text-lg">Ancien</p>
                                    <p class="uppercase text-lg">2020-2023</p>
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
                       href="/bottin/alumni/name">{{__('En savoir plus')}}</a>
                </article>
            @endfor
            {{--                {{$posts->links()}}--}}
        </article>
        <x-testimonials></x-testimonials>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
