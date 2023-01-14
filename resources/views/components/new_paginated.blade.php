@props([
    'news'
])

<div id="containerNew" {{ $attributes->class([' md:grid md:grid-cols-2 xl:grid-cols-3 xl:gap-8 flex flex-col items-center gap-6 xl:justify-center']) }}>
    <x-container_new :news="$news"/>
    <div class="col-span-2 items-center justify-center flex-1">
        {{$news->withQueryString()->links()}}
    </div>
</div>
