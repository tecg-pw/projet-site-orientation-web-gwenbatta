@props([
    /** @var \mixed */
    'alumnis'
])

<div id="pagination" {{ $attributes }}>
    {{$alumnis->withQueryString()->links()}}
</div>
