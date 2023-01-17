@props([
    'terme_ref'
])

<article {{ $attributes->class(['slide-in bg-yellow-100 py-6 px-8 rounded-3xl']) }} aria-labelledby="{{$terme_ref->slug}}">
    <h4 id="{{$terme_ref->slug}}" aria-level="4" role="heading" class="term-title capitalize font-medium text-lg md:text-xl xl:text-2xl 2xl:text-3xl mb-3">{{$terme_ref->name}}</h4>
    <div class="definition xl:text-lg 2xl:text-xl 2xl:leading-8">{!!$terme_ref->definition!!}</div>
</article>
