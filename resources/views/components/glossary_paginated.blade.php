@props([
    'termes'
])

<div id="containerGlossary">
    <x-container_glossary :termes="$termes"/>
    {{$termes->withQueryString()->links()}}
</div>

