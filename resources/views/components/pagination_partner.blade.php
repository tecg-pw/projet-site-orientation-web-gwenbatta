@props([
    /** @var \mixed */
    'partners'
])

<div id="pagination" {{ $attributes }}>
    {{$partners->withQueryString()->links()}}
</div>
