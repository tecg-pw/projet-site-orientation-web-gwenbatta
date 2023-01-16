@props([
    /** @var \mixed */
    'offers'
])

<div id="pagination" {{ $attributes }}>
    {{$offers->withQueryString()->links()}}
</div>
