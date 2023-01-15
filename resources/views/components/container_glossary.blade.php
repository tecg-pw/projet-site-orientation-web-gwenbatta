@props([
    /** @var \mixed */
    'termes'
])

<div {{ $attributes->class(['lg:grid lg:grid-cols-2 flex flex-col gap-y-4 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8']) }}>
    @foreach($termes as $terme_ref)
        <x-technical.term-glossary :terme_ref="$terme_ref->translation->where('locale',app()->getLocale())->first()"/>
    @endforeach
    @if(count($termes)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
