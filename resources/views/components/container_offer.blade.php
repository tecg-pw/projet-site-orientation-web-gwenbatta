@props([
    /** @var \mixed */
    'offers'
])

<div {{ $attributes->class(['lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4']) }}>
    @foreach($offers as $offer_ref)
        <x-entreprise.offer_article :offer_ref="$offer_ref"/>
    @endforeach
    @if(count($offers)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
