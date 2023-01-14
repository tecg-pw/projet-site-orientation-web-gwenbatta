@props([
    'projects'
])

<div  {{ $attributes->class(['md:grid xl:grid-cols-3 md:grid-cols-2 flex sm:items-center flex-col gap-8 justify-center']) }}>
    @foreach($projects as $project_ref)
        <x-project :person="$project_ref->person->translation->where('locale', app()->getLocale())->first()"
                   :project_ref="$project_ref->translation->where('locale',app()->getLocale())->first()"></x-project>
    @endforeach
    @if(count($projects)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
