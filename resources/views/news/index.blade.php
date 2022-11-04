<x-commons.navigation></x-commons.navigation>
<main>
    <article class="px-36 mb-64" aria-labelledby="projects">
        <div class="flex justify-between mb-12 mt-36">
            <h2 class="text-4xl uppercase font-bold text-yellow-800  font-sans" role="heading" aria-level="2" id="projects">
                {{__('Liste des actualités')}}
            </h2>
            <x-search_bar/>
        </div>
        {{--        @foreach()--}}
        <div class="grid grid-cols-3 gap-8 justify-center">
            @for($i=1; $i<7;$i++)
                <article class="relative flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <div class="flex justify-between items-center">
                    <h3 class="font-sans text-xl mb-3" role="heading" aria-level="3"
                        id="slug">{{__('Porte ouverte')}}</h3>
                    <p class="text-lg mb-3">30 avr. 2022</p>
                    </div>
                    <p class="mb-7">
                        {{__('Les portes ouvertes de la HEPL vous permettra de visiter l’école de votre choix et de rencontrer les professeurs')}}
                    </p>
                    <a class="self-end linkcard" href="/news/single">{{__('Voir le projet')}}</a>
                </span>
                    <figure class="order-first">
                        <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                    </figure>
                </article>
            @endfor
        </div>
        {{--        @endforeach--}}
        <div>
            {{--            {{$projects->links()}}--}}
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
