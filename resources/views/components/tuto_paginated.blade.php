@props([
    'tutos'
])
<div id="containerTuto">
    <x-container_tuto :tutos="$tutos"/>
    <x-pagination_tuto :tutos="$tutos"/>
</div>

