@props([
    /** @var \mixed */
    'projects'
])
<div id="pagination">
    {{$projects->withQueryString()->links()}}
</div>