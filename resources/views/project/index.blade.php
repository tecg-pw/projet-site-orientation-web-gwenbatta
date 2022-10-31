<x-commons.navigation></x-commons.navigation>
<main>
    <article class="px-36" aria-labelledby="projects">
        <div class="flex justify-between">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-12 font-sans" role="heading" aria-level="2" id="projects">
                {{__('Projets de nos étudiants')}}
            </h2>
            <div>
                <form action="/" method="GET">
                    <label for="search">{{__('Rechercher un projet')}}</label>
                    <input type="search" name="search" id="search"
                           placeholder="{{__('Rechercher un projet')}}"/>
                    <label for="s">Send</label>
                    <input type="submit" id="s" name="s" value="search"/>
                </form>
            </div>
        </div>
        {{--        @foreach()--}}
        <div class="flex flex-wrap gap-8 justify-center">
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
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
