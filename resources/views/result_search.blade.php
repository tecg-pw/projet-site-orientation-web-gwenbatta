<x-commons.navigation :page="__('search.title_global')"></x-commons.navigation>
<main id="content" class="px-10 2xl:px-48 xl:px-32 lg:px-16">
    <section class="mt-20 mb-32 xl:mb-64" aria-labelledby="search">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="search" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl md:text-3xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('search.title_search')}}</h2>
        </div>
        <x-container_globale :results="$results"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
