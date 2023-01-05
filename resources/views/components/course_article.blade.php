@props([
    /** @var \mixed */
    'classe_ref'
])

<article
        {{ $attributes->class(['hover:bg-orange-100 bg-white-100 py-6 px-8 rounded-3xl relative']) }} aria-labelledby="{{$classe_ref->slug}}">
    <h3 id="{{$classe_ref->slug}}" role="heading" aria-level="3"
        class="font-sans font-medium text-xl xl:text-2xl mb-3 underline font-medium">{{$classe_ref->name}}</h3>
    <div class="xl:text-lg">{!!$classe_ref->description!!}</div>
    <a class="linkcard"
       href="/{{app()->getLocale()}}/cours/{{$classe_ref->slug}}">{{__('Voir le cours'. $classe_ref->name)}}</a>
</article>
