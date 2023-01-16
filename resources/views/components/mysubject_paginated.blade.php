@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'subjects'
])

<div id="containerMySubject" {{ $attributes->class(['lg:col-span-3 flex flex-col gap-y-8 xl:pr-14 lg:pr-7 2xl:pl-48 xl:px-32 lg:px-16 px-10']) }}>
    @if(count($subjects)===0)
        <p>{{__('forum.no_subject')}}</p>
    @else
        <x-container_mysubject :subjects="$subjects"/>
    <x-pagination_mysubject :subjects="$subjects"/>
    @endif

</div>
