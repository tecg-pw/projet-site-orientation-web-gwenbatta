@php
    $urlAction = "/".app()->getLocale()."/technical/glossary"
@endphp
<x-commons.navigation :page="__('glossary.glossary_title')"></x-commons.navigation>
<main id="content" class="px-10 2xl:px-48 xl:px-32 lg:px-16">
    <div class="flex items-center mt-20">
        <a href="/{{app()->getLocale()}}/technical/index" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.technical')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/technical/glossary" class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('glossary.glossary_title')}}
        </a>
    </div>
    <section class="mt-20 mb-32 xl:mb-64" aria-labelledby="glossary">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="glossary" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl md:text-3xl 2xl:text-5xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('glossary.glossary_title')}}</h2>
            <x-sort_search.search class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <p class="mb-24 md:leading-8 xl:max-w-[55%] xl:text-xl 2xl:text-2xl xl:leading-10 2xl:leading-12">{{__('glossary.glossary_text')}}</p>
        <article aria-labelledby="list-glossary">
            <h3 id="list-glossary" role="heading" aria-level="3"
                class="sr-only">{{__('glossary.glossary_list_title')}}</h3>
            <div class="lg:grid lg:grid-cols-2 flex flex-col gap-y-4 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8">
                @foreach($termes as $terme_ref)
                    <x-technical.term-glossary :terme_ref="$terme_ref->translation->where('locale',app()->getLocale())->first()"/>
                @endforeach
                    @if(count($termes)===0)
                        <p>{{__('search.no_result')}}</p>
                    @endif
            </div>
            {{$termes->withQueryString()->links()}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
