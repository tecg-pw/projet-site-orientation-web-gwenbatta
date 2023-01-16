@props([
    /** @var \mixed */
    'people'
])

<div id="pagination" {{ $attributes->class(['col-span-2 items-center justify-center flex-1']) }}>
    {{$people->withQueryString()->links()}}
</div>
