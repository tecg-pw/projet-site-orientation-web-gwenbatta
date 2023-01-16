@props([
    'projects',

])
<div id="containerProject">
    <x-container_project :projects="$projects"/>
    <x-pagination_project :projects="$projects"/>
</div>

