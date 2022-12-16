<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="px-10 lg:px-16 xl:px-30 2xl:px-48 mt-20 mb-64" aria-labelledby="projects">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="projects" role="heading" aria-level="2" class="mb-4 text-2xl md:text-3xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('project.project_title')}}</h2>
            <x-search_bar class="xl:min-w-[23%] xl:not-sr-only sr-only"></x-search_bar>
        </div>
        <div class="md:grid xl:grid-cols-3 md:grid-cols-2 flex sm:items-center flex-col gap-8 justify-center">
            @foreach($projects as $project_ref)
                <x-project :project_ref="$project_ref->translation->where('locale',app()->getLocale())->first()"></x-project>
            @endforeach
        </div>
        {{$projects->links()}}
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
