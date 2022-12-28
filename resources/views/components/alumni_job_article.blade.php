@props([
    /** @var \mixed */
    'alumni_ref',
    'job'
])



@if(($alumni_ref->status) === 'ancien' || ($alumni_ref->status) === 'alumni')
    @if($alumni_ref->job_slug === $job->slug)
        <article
            {{ $attributes->class(['hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-8 rounded-3xl']) }}
            aria-labelledby="{{$alumni_ref->slug}}">
            <div class="flex flex-1 items-center">
                <div class="flex-1 order-2 ml-4">
                    <h3 id="{{$alumni_ref->slug}}" role="heading" aria-level="3"
                        class="text-xl xl:text-2xl">{{$alumni_ref->firstname}} {{$alumni_ref->name}}</h3>
                    <div class="mt-1 flex justify-between">
                        <div class="flex flex-col xl:flex-row xl:gap-4">
                            <p class="uppercase xl:text-lg">{{$alumni_ref->status}}</p>
                            <p class="uppercase xl:text-lg">{{$alumni_ref->begin->format('Y')}}
                                -{{$alumni_ref->end->format('Y')}}</p>
                        </div>
                        <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                             width="25"
                             viewBox="0 0 32 27.417">
                            <path id="e6c07a72bd494f72e4a4d962e39f725c"
                                  d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                  transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </div>
                <img class="order-1 rounded-full " width="98" src="{{$alumni_ref->avatar}}" alt="avatar">
            </div>
            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
               href="/{{app()->getLocale()}}/bottin/alumni/name">{{__('En savoir plus')}}</a>
        </article>
    @else
        <p class="xl:text-xl text-lg">{{__('job.job_no_alumni')}}</p>
    @endif
@endif
