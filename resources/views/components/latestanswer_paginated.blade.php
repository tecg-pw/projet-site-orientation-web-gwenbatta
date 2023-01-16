@props([
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator */
    'comments'
])

<div id="containerLatestAnswer" {{ $attributes->class(['lg:col-span-3 flex flex-col gap-y-8 xl:pr-14 lg:pr-7 2xl:pl-48 xl:px-32 lg:px-16 px-10']) }}>
    <x-container_latestanswer :comments="$comments"/>
    {{$comments->withQueryString()->links()}}
</div>
