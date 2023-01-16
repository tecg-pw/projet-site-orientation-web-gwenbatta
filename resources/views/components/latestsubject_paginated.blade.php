@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'subjects'
])
<div id="containerLatestSubject" {{$attributes}}>
        <x-container_latestsubject :subjects="$subjects"/>
        <x-pagination_latestsubject :subjects="$subjects"/>
</div>
