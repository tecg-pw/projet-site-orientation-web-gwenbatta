@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'comments'
])

<div id="containerLatestAnswer" {{ $attributes}}>
    <x-container_latestanswer :comments="$comments"/>
    <x-pagination_latestanswer :comments="$comments"/>
</div>
