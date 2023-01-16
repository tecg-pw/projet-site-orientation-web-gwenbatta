@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'comments'
])

<div
    id="containerMyTalks" {{ $attributes }}>
    @if(count($comments)===0)
        <p>Vous n'avez aucun sujet</p>
    @else
        <x-container_mytalks :comments="$comments"/>
    @endif
    <x-pagination_mytalks :comments="$comments"/>
</div>
