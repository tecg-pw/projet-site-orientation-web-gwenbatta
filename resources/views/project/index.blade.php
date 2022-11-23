<x-commons.navigation></x-commons.navigation>
<main>
    <article class="px-10 xl:px-36 mt-20 mb-64" aria-labelledby="projects">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="projects" role="heading" aria-level="2" class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('project.project_title')}}</h2>
            <x-search_bar class="xl:min-w-[23%] xl:not-sr-only sr-only"></x-search_bar>
        </div>
        <div class="xl:grid xl:grid-cols-3 flex flex-col gap-8 justify-center">
            @foreach($projects as $project)
                <x-project :project="$project"></x-project>
            @endforeach
        </div>
        {{$projects->links()}}
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
