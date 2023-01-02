@props([
    'testimonial_ref',
    'author'
])

<article {{ $attributes->class(['flex flex-col bg-white-100 py-6 px-8 rounded-3xl']) }}>
    <div class="flex items-center">
        <div class="order-2 ml-2 xl:ml-6">
            <h4 class="mt-2 text-lg xl:text-2xl">{{$author->firstname}} {{$author->name}}</h4>
            <p class="xl:text-lg">{{ucwords($testimonial_ref->created_at->translatedFormat('d F Y'))}}</p>
        </div>
        <img class="order-1 rounded-full" width="78" src="{{str_contains($author->avatar,'http')? $author->avatar: '/'.$author->avatar}} " alt="avatar">
    </div>
    <p class="mt-3 xl:mt-5">{!!$testimonial_ref->description!!}</p>
</article>
