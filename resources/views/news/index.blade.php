<x-commons.navigation></x-commons.navigation>
<main>
    <article aria-labelledby="actus">
        <h2 role="heading" id="actus" aria-level="2">{{__('Liste des actualités')}}</h2>
        <x-search_bar/>
            {{--        @foreach()--}}
            <article aria-labelledby="slug">
                <h3 role="heading" id="slug" aria-level="3">{{__('Titre')}}</h3>
                <p>{{__('Excerpt')}}</p>
                <p>{{__('Date de l\'évènement')}}</p>
                <a href="/news/{news:slug}/single">{{__('Voir l\'évènement')}}</a>
            </article>
            {{--        @endforeach--}}
        <div>
{{--            {{$news->links()}}--}}
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
