@props([
    /** @var \mixed */
    'news'
])
<div {{ $attributes->class(['slide-in md:grid md:grid-cols-2 xl:grid-cols-3 xl:gap-8 flex flex-col items-center gap-6 xl:justify-center']) }}>
    @foreach($news as $new_ref)
        <x-new :new_ref="$new_ref->translation->where('locale',app()->getLocale())->first()"/>
    @endforeach
    @if(count($news)===0)
        <p>{{__('search.no_result')}}</p>
    @endif
</div>

