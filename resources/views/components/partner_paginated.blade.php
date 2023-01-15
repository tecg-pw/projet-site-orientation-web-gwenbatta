@props([
    'partners'
])
<div id="containerPartner">
    <x-container_partner :partners="$partners"/>
    {{$partners->withQueryString()->links()}}
</div>
