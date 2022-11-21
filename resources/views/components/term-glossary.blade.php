@props([
    'terme'
])

<article {{ $attributes->class(['bg-yellow-100 py-6 px-8 rounded-3xl']) }} aria-labelledby="{{$terme->slug}}">
    <h3 id="{{$terme->slug}}" aria-level="3" role="heading" class="font-medium text-lg xl:text-2xl mb-3">{{$terme->name}}</h3>
    <p class="xl:text-lg">{{$terme->definition}}</p>
</article>
