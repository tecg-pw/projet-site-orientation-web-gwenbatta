@props([
    'coordinates'
])

<div class="lg:not-sr-only sr-only flex flex-col lg:col-span-5">
    <div class="justify-self-end mt-24 mb-10">
        <figure class="grid grid-rows-1 grid-cols-3 gap-8 lg:pr-14 xl:pr-32">
            <img class="rounded-3xl min-w-full row-span-2 "
                 srcset="
                    /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-323.jpeg 1024w,
                     /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-392.jpeg 1250w,
                     /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-460.jpeg 1520w,
                     /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-572.jpeg 2040w,
                     /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpeg 2560w"
                 sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                 src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpg" alt="">
            <img class="rounded-3xl min-w-full col-span-2 order-1 min-h-full"
                 srcset="
                    /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-277.jpeg 1024w,
                     /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-330.jpeg 1250w,
                     /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-384.jpeg 1520w,
                     /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-537.jpeg 2040w,
                     /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-690.jpeg 2560w"
                 sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                 src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-690.jpeg" alt="">
            <img class="rounded-3xl min-w-full order-2"
                 srcset="
                    /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-135.jpeg 1024w,
                     /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-158.jpeg 1250w,
                     /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-180.jpeg 1520w,
                     /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-273.jpeg 2040w,
                     /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-333.jpeg 2560w"
                 sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                 src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-333.jpeg"
                 alt="">
            <img class="min-w-full rounded-3xl order-3"
                 srcset="
                    /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-135.jpeg 1024w,
                     /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-158.jpeg 1250w,
                     /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-180.jpeg 1520w,
                     /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-257.jpeg 2040w,
                     /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-333.jpeg 2560w"
                 sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                 src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-333.jpeg"
                 alt="">
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

