@php
    $urlAction = "/".app()->getLocale()."/bottin/alumni"
@endphp

<x-commons.navigation :page="__('nav.nav_navigation.alumni')"></x-commons.navigation>
<main id="content" class="">
    <section class="mt-20" aria-labelledby="alumni">
        <div class="px-10 flex flex-col xl:px-32 lg:px-16 2xl:px-48 xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="almuni" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('people.alumni_title')}}</h2>
            <x-search :urlAction="$urlAction"/>
        </div>
        <p class="px-10 xl:pl-32 lg:px-16 2xl:pl-48 mb-7 xl:max-w-[47%] xl:text-xl xl:leading-10">{{__('people.alumni_text')}}</p>
        <x-sort_by_people :status="$status" :years_end="$years_end"/>
        <article class="px-10 flex flex-col gap-y-4 xl:px-32 lg:px-16 2xl:px-48 lg:grid lg:grid-cols-2 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8"
                 aria-labelledby="list-bottin">
            <h3 id="list-bottin" role="heading" aria-level="3" class="sr-only">{{__('people.alumni_list_title')}}</h3>
            @foreach($alumnis as $person_ref)
                    <x-person_alumni_article :person_ref="$person_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </article>
        <x-testimonials :testimonials="$testimonials"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
