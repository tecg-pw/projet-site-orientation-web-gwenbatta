@php
    $urlAction = "/".app()->getLocale()."/entreprise/internship"
@endphp

<x-commons.navigation :page="__('agency.offer_link')"></x-commons.navigation>
<main id="content">
    <section class="2xl:px-48 xl:px-32 px-10 mt-20" aria-labelledby="company">
        <div class="flex flex-col md:flex-row justify-between mb-7 xl:items-center">
            <h2 id="company" role="heading" aria-level="2" class="mb-4 text-2xl md:text-3xl xl:text-4xl  2xl:text-5xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('agency.agency_title')}}</h2>
            <x-sort_search.search id="offer" class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <x-sort_search.sort_by_offer  :urlAction="$urlAction" :jobs="$jobs" :agencies="$agencies"/>
        <div class="flex md:flex-row flex-col xl:gap-20 md:justify-start md:gap-x-10 mb-12 justify-between xl:justify-start">
            <a class="hover:text-orange-500 xl:text-xl  2xl:text-2xl text-lg underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/entreprise/partner">{{__('agency.partner_link')}}</a>
            <a class=" xl:text-xl text-lg underline  2xl:text-2xl text-green-700 bg-orange-100 rounded-lg font-semibold font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/entreprise/internship">{{__('agency.offer_link')}}</a>
        </div>
    </section>
    <article class="2xl:px-48 px-10 xl:px-32 pt-20 pb-36 bg-yellow-600" aria-labelledby="list-internship">
        <h2 id="list-internship" role="heading" aria-level="2" class="sr-only">{{__('agency.offer_list')}}</h2>
        <x-offer_paginated :offers="$offers"/>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
