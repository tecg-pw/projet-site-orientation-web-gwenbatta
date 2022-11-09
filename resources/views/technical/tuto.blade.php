<x-commons.navigation></x-commons.navigation>
<main class="px-36">
    <section class="mt-20 mb-64" aria-labelledby="tutos">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="tutos" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Liste des tutos')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <p class="mb-7 max-w-[55%] text-xl leading-10">{{__('Vous trouverez sur cette page une liste de tutoriels qui vous sont proposés afin de vous introduire certains langages que vous découvrirez au sein de notre orientation')}}</p>
        <x-sort_by class="mb-14"></x-sort_by>
        <article aria-labelledby="list-tutos">
            <h3 id="list-tutos" role="heading" aria-level="3" class="sr-only">{{__('Liste de tutos')}}</h3>
            <div class="grid grid-cols-2 gap-x-24 gap-y-8">
                @for($i=1; $i<11;$i++)
                    <x-tuto class="bg-yellow-100" :i="$i"/>
                @endfor
            </div>
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
