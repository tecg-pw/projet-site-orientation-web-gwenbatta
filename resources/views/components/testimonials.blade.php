@props([
    'testimonials'
])

<article {{ $attributes->class(['bg-yellow-600 xl:px-36 px-10 py-20 mt-20 xl:mt-80']) }}>
    <h3 class="xl:text-4xl text-2xl leading-8 xl:leading-10 uppercase font-extrabold font-sans xl:mb-20 mb-12">{{__('testimonials.testimonials_title')}}</h3>
    <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @foreach($testimonials as $testimonial)
            <article class="flex flex-col bg-white-100 py-6 px-8 rounded-3xl">
                <div class="flex items-center">
                    <div class="order-2 ml-2 xl:ml-6">
                        <h4 class="mt-2 text-lg xl:text-2xl">{{$testimonial->person->firstname}} {{$testimonial->person->name}}</h4>
                        <p class="xl:text-lg">{{$testimonial->created_at->format('d M Y')}}</p>
                    </div>
                    <img class="order-1 rounded-full" width="78" src="{{$testimonial->person->avatar}} " alt="avatar">
                </div>
                <p class="mt-3 xl:mt-5">{{$testimonial->description}}</p>
            </article>
        @endforeach
    </div>
</article>
