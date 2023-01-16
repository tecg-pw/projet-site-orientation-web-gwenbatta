@props([
    /** @var \mixed */
    'tutos'
])

<div id="pagination" {{ $attributes }}>
    {{$tutos->withQueryString()->links()}}
</div>
