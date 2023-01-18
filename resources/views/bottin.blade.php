@php
    $urlAction = "/".app()->getLocale()."/bottin"
@endphp

<x-commons.navigation :page="__('nav.nav_navigation.people')"></x-commons.navigation>
<main id="content">
    <section class="mt-20" aria-labelledby="bottinSection">
        <div class="px-10 lg:px-16 2xl:px-48 flex flex-col xl:px-32 xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="bottinSection" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('people.bottin_title')}}</h2>
            <x-sort_search.search id="bottin" class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <p class="px-10 lg:px-16 2xl:px-48 xl:pl-32 mb-7 xl:max-w-[50%] xl:text-xl xl:leading-10">{{__('people.bottin_text')}}</p>
        <x-sort_search.sort_by_people id="bottin_sort" :urlAction="$urlAction" :status="$status" :years_end="$years_end"/>
        <x-bottin_paginated :people="$people"/>
        <x-people.testimonials :testimonials="$testimonials"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
