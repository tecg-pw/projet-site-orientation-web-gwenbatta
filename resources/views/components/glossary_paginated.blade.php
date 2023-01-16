@props([
    'termes'
])

<div id="containerGlossary">
    <x-container_glossary :termes="$termes"/>
    <x-pagination_glossary :termes="$termes"/>
</div>


