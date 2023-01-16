@props([
    /** @var \mixed */
    'comments'
])

<div id="pagination" {{ $attributes }}>
    {{$comments->withQueryString()->links()}}
</div>
