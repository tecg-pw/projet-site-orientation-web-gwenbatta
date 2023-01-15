@props([
    /** @var \mixed */
    'people'
])

<div {{ $attributes->class(['px-10 lg:px-16 2xl:px-48 flex flex-col gap-y-4 xl:px-32 lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8']) }}>
    @foreach($people as $person_ref)
        <x-people.person_article :person_ref="$person_ref->translation->where('locale',app()->getLocale())->first()"/>
    @endforeach
    @if(count($people)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
