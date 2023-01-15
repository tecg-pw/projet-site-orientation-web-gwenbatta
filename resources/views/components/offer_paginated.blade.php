@props([
    'offers'
])
<div id="containerOffer">
    <x-container_offer :offers="$offers"/>
    {{$offers->withQueryString()->links()}}
</div>

