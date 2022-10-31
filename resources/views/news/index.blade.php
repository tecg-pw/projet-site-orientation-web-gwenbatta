
    <x-commons.navigation>
        <a href="/">{{__('Actualités')}}</a>
    </x-commons.navigation>
<main>
    <article>
        <h2>{{__('Liste des actualités')}}</h2>
        <div>
            <form action="/" method="GET">
                <label for="search">{{__('Rechercher un projet')}}</label>
                <input type="search" name="search" id="search"
                       placeholder="{{__('Rechercher un projet')}}"/>
                <label for="s">Send</label>
                <input type="submit" id="s" name="s" value="search"/>
            </form>
        </div>
            {{--        @foreach()--}}
            <article>
                <h3>{{__('Titre')}}</h3>
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
