@props([
    'coordinates'
])

<div class="xl:not-sr-only sr-only flex flex-col mt-16">
    <div>
        <figure class="grid grid-rows-1 grid-cols-3 gap-8 pr-36">
            <img class="rounded-3xl row-span-5 order-2" src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
            <img class="rounded-3xl col-span-2 order-1" src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
            <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg" alt="">
            <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg" alt="">
        </figure>
    </div>
    <section class="bg-yellow-600 mb-36 px-36" aria-labelledby="coordinate">
        <h3 class="font-sans text-xl mt-16 mb-12" role="heading" aria-level="3"
            id="coordinate">{{__('contact_page.aside_title')}}</h3>
        <div class="flex gap-24 mb-24">
            @foreach($coordinates as $coordinate_ref)
                <x-contact_coordinate :coordinate_ref="$coordinate_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </section>
</div>

