@php
    $urlAction = "/".app()->getLocale()."/technical/tuto"
@endphp

<x-commons.navigation :page="__('nav.nav_navigation.tuto')"></x-commons.navigation>
<main id="content" class="xl:px-32 lg:px-16 2xl:px-48 px-10">
    <div class="flex items-center mt-20">
        <a href="/{{app()->getLocale()}}/technical/index" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl">
            {{__('nav.nav_navigation.technical')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/technical/tuto" class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl">
            {{__('tuto.tuto_title')}}
        </a>
    </div>
    <section class="mt-20 mb-32 xl:mb-64" aria-labelledby="tutos">
        <div class="flex flex-col md:flex-row justify-between mb-7 xl:items-center">
            <h2 id="tutos" role="heading" aria-level="2" class="mb-4 text-2xl xl:text-4xl md:max-w-xl md:text-3xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('tuto.tuto_title')}}</h2>
            <x-sort_search.search class="min-w-[20%]" :urlAction="$urlAction"/>
        </div>
        <p class="mb-7 md:leading-8 xl:max-w-[55%] xl:text-xl xl:leading-10">{{__('tuto.tuto_text')}}</p>
        <x-sort_search.sort_by_tutos :urlAction="'/'"  :languages="$languages" :date="$date" class="mb-14"></x-sort_search.sort_by_tutos>
        <article aria-labelledby="list-tutos">
            <h3 id="list-tutos" role="heading" aria-level="3" class="sr-only">{{__('tuto.tuto_list_title')}}</h3>
            <div class="flex gap-y-4 flex-col lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8">
                @foreach($tutos as $tuto_ref)
                    <x-technical.tuto class="bg-yellow-100" :tuto="$tuto_ref" :tuto_ref="$tuto_ref->translation->where('locale',app()->getLocale())->first()"/>
                @endforeach
                    @if(count($tutos)===0)
                        <p>{{__('search.no_result')}}</p>
                    @endif
            </div>
            {{$tutos->withQueryString()->links()}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
