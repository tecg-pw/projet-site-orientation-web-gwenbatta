@props([
    'projects',

])
<div id="containerProject">
    <x-container_project :projects="$projects"/>
    {{$projects->withQueryString()->links()}}
</div>

