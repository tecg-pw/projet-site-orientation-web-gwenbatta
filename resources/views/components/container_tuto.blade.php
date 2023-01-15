@props([
    /** @var \mixed */
    'tutos'
])

<div {{ $attributes->class(['flex gap-y-4 flex-col lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8']) }}>
    @foreach($tutos as $tuto_ref)
        <x-technical.tuto class="bg-yellow-100" :tuto="$tuto_ref"
                          :tuto_ref="$tuto_ref->translation->where('locale',app()->getLocale())->first()"/>
    @endforeach
    @if(count($tutos)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
