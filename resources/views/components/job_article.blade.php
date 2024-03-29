@props([
    /** @var \Illuminate\Database\Eloquent\Model */
    'job_ref'
])
<article aria-labelledby="{{$job_ref->slug}}" {{ $attributes->class(['slide-in hover:bg-orange-100 py-6 px-8 rounded-3xl relative']) }}>
    <h3 id="{{$job_ref->slug}}" aria-level="3" role="heading"
        class="font-medium text-xl xl:text-2xl 2xl:text-3xl mb-3 font-medium">{{$job_ref->name}}</h3>
    <div class="wysiwyg xl:text-lg 2xl:text-xl">{!! $job_ref->excerpt !!}</div>
    <a class="linkcard"
       href="/{{app()->getLocale()}}/about/job/{{$job_ref->slug}}">{{__('about.job_more'). $job_ref->slug}}</a>
</article>
