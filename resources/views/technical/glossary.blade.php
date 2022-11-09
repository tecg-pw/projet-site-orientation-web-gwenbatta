<x-commons.navigation></x-commons.navigation>
<main class="px-36">
    <section class="mt-20 mb-64" aria-labelledby="glossary">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="glossary" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Glossaire')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <p class="mb-24 max-w-[55%] text-xl leading-10">{{__('Vous trouverez sur cette page une liste tous les termes techniques dont vous aurez besoin au sein de ce site ainsi qu’au sein des cours liés à l’orientation web')}}</p>
        <article aria-labelledby="list-glossary">
            <h3 id="list-glossary" role="heading" aria-level="3" class="sr-only">{{__('Liste du glossaire')}}</h3>
            <div  class="grid grid-cols-2 gap-x-24 gap-y-8">
                @for($i=1; $i<11;$i++)
                    <x-term-glossary :i="$i"/>
                @endfor
            </div>
            {{--                {{$posts->links()}}--}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
