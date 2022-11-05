<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="mt-20" aria-labelledby="bottin">
        <div class="px-36 flex justify-between mb-7 items-center">
            <h2 id="bottin" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Bottin')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <p class="px-36 mb-7 max-w-[55%] text-lg leading-10">{{__('Vous trouverez sur cette page une liste tous les partenaires de l’orientation web que ce soit au sein des étudiants ou des professeurs.')}}</p>
        <x-sort_by class="px-36 mb-14"/>
        <article class="px-36 grid grid-cols-2 gap-x-24 gap-y-8" aria-labelledby="list-alumni">
            <h3 id="list-alumni" role="heading" aria-level="3" class="sr-only">{{__('Liste du bottin')}}</h3>
            @for($i=1; $i<11;$i++)
                <article class=" flex flex-col bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="name">
                    <div class="flex items-center">
                        <div class="order-2 ml-4">
                            <h4 id="name" role="heading" aria-level="4" class="font-sans text-2xl">Nom et Prénom</h4>
                            <p class="uppercase text-xl">Ancien</p>
                        </div>
                        <img class="order-1 rounded-full" src="https://via.placeholder.com/98" alt="avatar">
                    </div>
                    <a class="underline text-green-700 font-sans font-semibold self-end" href="/bottin/alumni/name">{{__('En savoir plus')}}</a>
                </article>
            @endfor
            {{--                {{$posts->links()}}--}}
        </article>
        <x-testimonials/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
