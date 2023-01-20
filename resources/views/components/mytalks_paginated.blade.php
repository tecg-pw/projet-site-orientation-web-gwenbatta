@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'comments'
])

<div
    id="containerMyTalks" {{ $attributes }}>
    @if(count($comments)===0)
        <p class="xl:text-xl text-lg">{{__('forum.no_comment')}}</p>
    @else
        <x-container_mytalks :comments="$comments"/>
    @endif
    <x-pagination_mytalks :comments="$comments"/>
</div>
