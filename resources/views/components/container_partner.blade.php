@props([
    /** @var \mixed */
    'partners'
])

<div {{ $attributes->class(['lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4']) }}>
    @foreach($partners as $partner_ref)
        <x-entreprise.partner_article :partner_ref="$partner_ref->translation->where('locale',app()->getLocale())->first()"/>
    @endforeach
    @if(count($partners)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>
