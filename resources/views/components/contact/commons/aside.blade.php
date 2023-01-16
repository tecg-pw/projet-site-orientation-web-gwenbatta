@props([
    'coordinates'
])

<div class="lg:not-sr-only sr-only flex flex-col lg:col-span-5">
    <div class="justify-self-end mt-24 mb-10">
        <figure class="grid grid-rows-1 grid-cols-3 gap-8 lg:pr-14 xl:pr-32">
            <picture class="rounded-3xl min-w-full row-span-2 ">
                <source media="(max-width: 1024px)" srcset="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-323.jpeg">
                <source media="(max-width: 1250px)" srcset="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-392.jpeg">
                <source media="(max-width: 1520px)" srcset="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-460.jpeg">
                <source media="(max-width: 2040px)" srcset="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-572.jpeg">
                <source media="(max-width: 2560px)" srcset="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpeg">
                <img src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpeg"
                     alt="" class="rounded-3xl min-w-full row-span-2 ">
            </picture>
            <picture class="rounded-3xl min-w-full col-span-2 order-1 min-h-full">
                <source media="(max-width: 1024px)" srcset="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-277.jpeg">
                <source media="(max-width: 1250px)" srcset="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-330.jpeg">
                <source media="(max-width: 1520px)" srcset="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-384.jpeg">
                <source media="(max-width: 2040px)" srcset="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-537.jpeg">
                <source media="(max-width: 2560px)" srcset="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-690.jpeg">
                <img src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-690.jpeg"
                     alt="" class="rounded-3xl min-w-full col-span-2 order-1 min-h-full">
            </picture>
            <picture class="rounded-3xl min-w-full order-2">
                <source media="(max-width: 1024px)" srcset="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-135.jpeg">
                <source media="(max-width: 1250px)" srcset="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-158.jpeg">
                <source media="(max-width: 1520px)" srcset="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-180.jpeg">
                <source media="(max-width: 2040px)" srcset="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-273.jpeg">
                <source media="(max-width: 2560px)" srcset="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-333.jpeg">
                <img src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpeg"
                     alt="" class="rounded-3xl min-w-full order-2">
            </picture>
            <picture class="min-w-full rounded-3xl order-3">
                <source media="(max-width: 1024px)" srcset="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-135.jpeg">
                <source media="(max-width: 1250px)" srcset="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-158.jpeg">
                <source media="(max-width: 1520px)" srcset="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-180.jpeg">
                <source media="(max-width: 2040px)" srcset="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-257.jpeg">
                <source media="(max-width: 2560px)" srcset="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-333.jpeg">
                <img src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-333.jpeg"
                     alt="" class="min-w-full rounded-3xl order-3">
            </picture>
        </figure>
    </div>
    <section class="bg-yellow-600 lg:pl-24 mb-20" aria-labelledby="coordinate">
        <h3 class="font-sans text-xl mt-16 mb-12" role="heading" aria-level="3"
            id="coordinate">{{__('contact_page.aside_title')}}</h3>
        <div class="flex gap-24 mb-24">
            @foreach($coordinates as $coordinate_ref)
                <x-contact.contact_coordinate :coordinate_ref="$coordinate_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </section>
</div>

