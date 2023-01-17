@php
    $urlAction = "/".app()->getLocale()."/entreprise/partner"
@endphp

<x-commons.navigation :page="__('agency.partner_link')"></x-commons.navigation>
<main id="content">
    <section class="xl:px-32 lg:px-16 2xl:px-48 px-10 mt-20" aria-labelledby="company">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="company" role="heading" aria-level="2"
                class="mb-4 text-2xl 2xl:text-5xl md:text-3xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('agency.agency_title')}}</h2>
            <x-sort_search.search id="partner" class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <x-sort_search.sort_by_partner :urlAction="$urlAction" :cities="$cities" :agencies="$agencies"/>
        <div class="flex xl:gap-20 md:justify-start md:gap-x-10 mb-12 justify-between xl:justify-start">
            <a class="xl:text-xl 2xl:text-2xl text-lg underline rounded-lg text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2"
               href="/{{app()->getLocale()}}/entreprise/partner">{{__('agency.partner_link')}}</a>
            <a class="hover:text-orange-500 2xl:text-2xl xl:text-xl text-lg underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/entreprise/internship">{{__('agency.offer_link')}}</a>
        </div>
    </section>
    <article class="xl:px-32 lg:px-16 2xl:px-48 px-10  pt-20 pb-36 bg-yellow-600" aria-labelledby="list-partner">
        <h2 id="list-partner" role="heading" aria-level="2" class="sr-only">{{__('agency.partner_list')}}</h2>
        <x-partner_paginated :partners="$partners"/>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
