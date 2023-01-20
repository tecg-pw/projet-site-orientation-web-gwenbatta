@props([
    'news'
])

<div id="containerNew" >
    <x-container_new :news="$news"/>
    <x-pagination_new :news="$news"/>
</div>
