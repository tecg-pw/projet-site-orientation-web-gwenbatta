@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'comments'
])

<div
    id="containerMyTalks" {{ $attributes->class(['lg:col-span-3 flex flex-col gap-y-8 xl:pr-14 lg:pr-7 2xl:pl-48 xl:px-32 lg:px-16 px-10']) }}>
    @if(count($comments)===0)
        <p>Vous n'avez aucun sujet</p>
    @else
        <x-container_mytalks :comments="$comments"/>
    @endif
    <x-pagination_mytalks :comments="$comments"/>
</div>
