@props([
    /** @var \mixed */
    'termes'
])
<div id="pagination">
    {{$termes->withQueryString()->links()}}
</div>
