@props([
    /** @var \mixed */
    'news'
])

@foreach($news as $new_ref)
    <x-new :new_ref="$new_ref->translation->where('locale',app()->getLocale())->first()"/>
@endforeach
@if(count($news)===0)
    <p>{{__('search.no_result')}}</p>
@endif
