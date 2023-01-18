@php
    $urlAction = "/".app()->getLocale()."/bottin/alumni"
@endphp

<x-commons.navigation :page="__('nav.nav_navigation.alumni')"></x-commons.navigation>
<main id="content">
    <section class="mt-20" aria-labelledby="alumni">
        <div class="px-10 flex flex-col xl:px-32 lg:px-16 2xl:px-48 xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="almuni" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl 2xl:text-5xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('people.alumni_title')}}</h2>
            <x-sort_search.search id="alumni" class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <p class="px-10 xl:pl-32 lg:px-16 2xl:pl-48 mb-7 xl:max-w-[47%] xl:text-xl 2xl:text-2xl 2xl:leading-12 xl:leading-10">{{__('people.alumni_text')}}</p>
        <x-sort_search.sort_by_people id="alumni_sort" :urlAction="$urlAction" :status="$status" :years_end="$years_end"/>
        <x-alumni_paginated :alumnis="$alumnis"/>
        <x-people.testimonials :testimonials="$testimonials"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
