<x-commons.navigation></x-commons.navigation>
<main class="px-36">
    <section class="mt-20 mb-64">
        <div class="flex justify-between mb-7 items-center">
            <h2 class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Glossaire')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <p class="mb-24 max-w-[40%] text-lg leading-10">{{__('Vous trouverez sur cette page une liste tous les termes techniques dont vous aurez besoin au sein de ce site ainsi qu’au sein des cours liés à l’orientation web')}}</p>
        <article>
            <h3 class="sr-only">{{__('Liste du glossaire')}}</h3>
            <div  class="grid grid-cols-2 gap-x-24 gap-y-8">
                @for($i=1; $i<11;$i++)
                    <article class="bg-yellow-100 py-6 px-8 rounded-3xl">
                            <h4 class="font-sans font-medium text-2xl mb-3">Accessibilité</h4>
                            <p class="text-lg">1. Caractère de quelque chose, d’un lieu qui est accessibles : L’accessibilité d’un bus, d’un immeuble aux handicapés.<br>2. Droit, possibilité qu’a quelqu’un d’avoir accès à quelque chose : L’accessibilité à un emploi.</p>
                    </article>
                @endfor
            </div>
            {{--                {{$posts->links()}}--}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
