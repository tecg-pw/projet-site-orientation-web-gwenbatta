<x-commons.navigation></x-commons.navigation>
<main id="content">
    <article class="xl:px-36 2xl:px-48 px-10 mb-64" aria-labelledby="projects">
        <div class="flex flex-col md:flex-row justify-between mb-10 mt-14 xl:items-center xl:mt-36 xl:mb-32">
            <h2 id="projects" role="heading" aria-level="2" class="mb-4 md:text-3xl text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('actu.actu_title')}}</h2>
            <x-search_bar class="md:min-w-[40%]"></x-search_bar>
        </div>
        <div class="md:grid md:grid-cols-2 xl:grid-cols-3 xl:gap-8 flex flex-col items-center gap-6 xl:justify-center">
            @foreach($news as $new_ref)
                <x-new :new_ref="$new_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
                {{$news->links()}}
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
