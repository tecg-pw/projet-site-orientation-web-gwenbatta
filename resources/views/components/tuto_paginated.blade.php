@props([
    'tutos'
])
<div id="containerTuto">
    <x-container_tuto :tutos="$tutos"/>
    {{$tutos->withQueryString()->links()}}
</div>

