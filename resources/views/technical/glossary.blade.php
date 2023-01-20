@php
    $urlAction = "/".app()->getLocale()."/technical/glossary"
@endphp
<x-commons.navigation :page="__('glossary.glossary_title')"></x-commons.navigation>
<main id="content">
    <div class="px-10 2xl:px-48 xl:px-32 lg:px-16 flex items-center mt-20">
        <a href="/{{app()->getLocale()}}/technical/index" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.technical')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/technical/glossary" class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('glossary.glossary_title')}}
        </a>
    </div>
    <section class="px-10 2xl:px-48 xl:px-32 lg:px-16 mt-20 mb-32 xl:mb-64" aria-labelledby="glossarySection">
        <div class="flex flex-col md:flex-row justify-between mb-7 xl:items-center">
            <h2 id="glossarySection" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl md:text-3xl 2xl:text-5xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('glossary.glossary_title')}}</h2>
            <x-sort_search.search id="glossary" class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <p class="mb-24 md:leading-8 xl:max-w-[55%] xl:text-xl 2xl:text-2xl xl:leading-10 2xl:leading-12">{{__('glossary.glossary_text')}}</p>
        <article aria-labelledby="list-glossary">
            <h3 id="list-glossary" role="heading" aria-level="3"
                class="sr-only">{{__('glossary.glossary_list_title')}}</h3>
            <x-glossary_paginated :termes="$termes"/>
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
