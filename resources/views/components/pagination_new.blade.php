@props([
    /** @var \mixed */
    'news'
])

<div id="pagination" {{ $attributes->class(['col-span-2 items-center justify-center flex-1']) }}>
    {{$news->withQueryString()->links()}}
</div>
