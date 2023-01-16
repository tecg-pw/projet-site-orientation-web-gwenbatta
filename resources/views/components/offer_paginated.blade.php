@props([
    'offers'
])
<div id="containerOffer">
    <x-container_offer :offers="$offers"/>
    <x-pagination_offer :offers="$offers"/>
</div>

