@props([
    /** @var \Illuminate\Database\Eloquent\Model */
    'job_ref'
])

<article aria-labelledby="{{$job_ref->slug}}" {{ $attributes->class(['bg-white-100 py-6 px-8 rounded-3xl relative']) }}>
    <h3 id="{{$job_ref->slug}}" aria-level="3" role="heading"
        class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{$job_ref->name}}</h3>
    <p class="xl:text-lg">{{$job_ref->excerpt}}</p>
    <a class="linkcard"
       href="/{{app()->getLocale()}}/about/job/{{$job_ref->slug}}">{{__('about.job_more'). $job_ref->slug}}</a>
</article>
