@props([
    'partners'
])
<div id="containerPartner">
    <x-container_partner :partners="$partners"/>
    <x-pagination_partner :partners="$partners"/>
</div>
