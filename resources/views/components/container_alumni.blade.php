@props([
    /** @var \mixed */
    'alumnis'
])

<div
        {{ $attributes->class(['px-10 flex flex-col gap-y-4 xl:px-32 lg:px-16 2xl:px-48 lg:grid lg:grid-cols-2 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8']) }}>
    @foreach($alumnis as $person_ref)
        <x-people.person_alumni_article
                :person_ref="$person_ref->translation->where('locale',app()->getLocale())->first()"/>
    @endforeach
    @if(count($alumnis)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
