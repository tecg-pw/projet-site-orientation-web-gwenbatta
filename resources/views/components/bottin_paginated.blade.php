@props([
    'people'
])

<article id="containerBottin" aria-labelledby="list-bottin">
    <h3 id="list-bottin" role="heading" aria-level="3" class="sr-only">{{__('people.bottin_list_title')}}</h3>
    <x-container_bottin :people="$people"/>
    <x-pagination_bottin :people="$people"/>
</article>
