@props([
    'terme_ref'
])

<article {{ $attributes->class(['bg-yellow-100 py-6 px-8 rounded-3xl']) }} aria-labelledby="{{$terme_ref->slug}}">
    <h3 id="{{$terme_ref->slug}}" aria-level="3" role="heading" class="font-medium text-lg md:text-xl xl:text-2xl mb-3">{{$terme_ref->name}}</h3>
    <p class="xl:text-lg">{{$terme_ref->definition}}</p>
</article>
