@props([
    'alumnis'
])

<article id="containerAlumni" aria-labelledby="list-bottin">
    <h3 id="list-bottin" role="heading" aria-level="3" class="sr-only">{{__('people.alumni_list_title')}}</h3>
    <x-container_alumni :alumnis="$alumnis"/>
    <div>
        {{$alumnis->withQueryString()->links()}}
    </div>
</article>
