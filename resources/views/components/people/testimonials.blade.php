@props([
    'testimonials'
])
<article {{ $attributes->class(['bg-yellow-600 xl:px-32 lg:px-16 2xl:px-48 px-10 py-20 mt-20 xl:mt-80']) }}>
    <h3 class="xl:text-4xl text-2xl leading-8 xl:leading-10 uppercase font-extrabold font-sans xl:mb-20 mb-12">{{__('testimonials.testimonials_title')}}</h3>
    <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @foreach($testimonials as $testimonial_ref)
            <x-people.testimonial_article :author="$testimonial_ref->person->translation->where('locale',app()->getLocale())->first()" :testimonial_ref="$testimonial_ref->translation->where('locale',app()->getLocale())->first()"/>
        @endforeach
    </div>
</article>
