@php
    $urlAction = "/".app()->getLocale()."/bottin"
@endphp

<x-commons.navigation :page="__('nav.nav_navigation.people')"></x-commons.navigation>
<main id="content" class="">
    <section class="mt-20" aria-labelledby="bottin">
        <div class="px-10 lg:px-16 2xl:px-48 flex flex-col xl:px-32 xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="bottin" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('people.bottin_title')}}</h2>
            <x-search :urlAction="$urlAction"/>
        </div>
        <p class="px-10 lg:px-16 2xl:px-48 xl:pl-32 mb-7 xl:max-w-[50%] xl:text-xl xl:leading-10">{{__('people.bottin_text')}}</p>
        <x-sort_by_people :urlAction="$urlAction" :status="$status" :years_end="$years_end"/>
        <article class="px-10 lg:px-16 2xl:px-48 flex flex-col gap-y-4 xl:px-32 lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8" aria-labelledby="list-bottin">
            <h3 id="list-bottin" role="heading" aria-level="3" class="sr-only">{{__('people.bottin_list_title')}}</h3>
            @foreach($people as $person_ref)
                <x-person_article :person_ref="$person_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
            @if(count($people)===0)
                <p>{{__('search.no_result')}}</p>
            @endif
            <div class="col-span-2 items-center justify-center flex-1">
                {{$people->withQueryString()->links()}}
            </div>
        </article>
        <x-testimonials :testimonials="$testimonials"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
