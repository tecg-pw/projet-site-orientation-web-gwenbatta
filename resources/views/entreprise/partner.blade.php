<x-commons.navigation></x-commons.navigation>
<main id="content" class="">
    <section class="xl:px-36 px-10 mt-20" aria-labelledby="company">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="company" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('agency.agency_title')}}</h2>
            <x-search_bar class="xl:min-w-[23%] xl:not-sr-only sr-only"></x-search_bar>
        </div>
        <x-sort_by_partner :cities="$cities" :agencies="$agencies"/>
        <div class="flex xl:gap-20 mb-12 justify-between xl:justify-start">
            <a class="xl:text-xl text-lg underline rounded-lg text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2"
               href="/{{str_replace('_','-',app()->getLocale())}}/entreprise/partner">{{__('agency.partner_link')}}</a>
            <a class="hover:text-orange-500 xl:text-xl text-lg underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/{{str_replace('_','-',app()->getLocale())}}/entreprise/internship">{{__('agency.offer_link')}}</a>
        </div>
    </section>
    <article class="xl:px-36 px-10  pt-20 pb-36 bg-yellow-600" aria-labelledby="list-partner">
        <h2 id="list-partner" role="heading" aria-level="2" class="sr-only">{{__('agency.partner_list')}}</h2>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($partners as $partner_ref)
                <x-partner_article
                    :partner_ref="$partner_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
        {{$partners->links()}}
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
