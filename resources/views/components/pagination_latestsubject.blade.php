@props([
    /** @var \mixed */
    'subjects'
])

<div id="pagination" {{ $attributes }}>
    {{$subjects->withQueryString()->links()}}
</div>
