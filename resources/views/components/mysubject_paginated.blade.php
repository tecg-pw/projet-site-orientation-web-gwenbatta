@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'subjects'
])

<div id="containerMySubject" {{ $attributes}}>
    @if(count($subjects)===0)
        <p>{{__('forum.no_subject')}}</p>
    @else
        <x-container_mysubject :subjects="$subjects"/>
    <x-pagination_mysubject :subjects="$subjects"/>
    @endif

</div>
