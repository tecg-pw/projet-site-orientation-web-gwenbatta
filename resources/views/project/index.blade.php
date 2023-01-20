@php
    $urlAction = "/".app()->getLocale()."/project/index"

@endphp

<x-commons.navigation :page="__('nav.nav_navigation.project')"></x-commons.navigation>
<main id="content">
    <section class="px-10 lg:px-16 xl:px-32 2xl:px-48 mt-20 mb-64" aria-labelledby="projects">
        <div class="flex flex-col md:flex-row justify-between mb-7 xl:items-center">
            <h2 id="projects" role="heading" aria-level="2"
                class="mb-4 text-2xl md:text-3xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center 2xl:text-5xl">{{__('project.project_title')}}</h2>
            <x-sort_search.search id="project" class="min-w-[20%]"  :urlAction="$urlAction"/>
        </div>
        <x-project_paginated :projects="$projects"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
