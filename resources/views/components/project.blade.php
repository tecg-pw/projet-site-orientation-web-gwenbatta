<article {{ $attributes->class(['flex-col flex bg-yellow-100 rounded-3xl relative']) }} aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" role="heading" aria-level="3" id="slug">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end linkcard" href="/project/single">{{__('Voir le projet')}}</a>
                </span>
    <figure class="order-first">
        <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
    </figure>
</article>
