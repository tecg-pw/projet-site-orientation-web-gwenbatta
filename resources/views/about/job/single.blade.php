<x-commons.navigation></x-commons.navigation>
<main>
    <section aria-labelledby="dev-front">
        <div class="flex flex-col px-10 xl:px-36 xl:flex-row justify-between mt-20">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11"
                id="dev-front" aria-level="2" role="heading">{{$job->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/about#jobs">{{__('job.job_back')}}</a>
        </div>
        <div class="xl:mt-20 mt-10 px-10 xl:px-36 xl:grid xl:grid-cols-10 xl:items-center mb-36 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 class="font-sans text-xl xl:text-2xl font-medium mb-5" id="description" aria-level="2"
                        role="heading">{{__('job.job_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl ">{{$job->description}}</p>
                    </div>
                </section>
            </div>
            <div class="xl:not-sr-only sr-only col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg"
                         alt="">
                    <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg"
                         alt="">
                    <img class="col-span-3 rounded-3xl order-4" src="https://placehold.jp/721x239.png" alt="">
                </figure>
            </div>
        </div>

    </section>
    <article class="bg-yellow-600 xl:px-36 px-10 pb-36 pt-20" aria-labelledby="other">
        <div class="flex flex-col xl:flex-row justify-between mb-8">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20" id="other" aria-level="2"
                role="heading">{{__('job.job_other')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/about#jobs">{{__('job.job_other_see')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($jobs as $job)
                <article aria-labelledby="{{$job->slug}}" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                    <h3 id="{{$job->slug}}" aria-level="3" role="heading"
                        class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{$job->name}}</h3>
                    <p class="xl:text-lg">{{$job->excerpt}}</p>
                    <a class="linkcard"
                       href="/about/job/{{$job->slug}}">{{__('about.job_more'). $job->slug}}</a>
                </article>
            @endforeach
        </div>
    </article>
    <article class="xl:px-36 px-10 mt-36 mb-36" aria-labelledby="alumnis">
        <div class="flex flex-col xl:flex-row justify-between mb-6">
            <h2 class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 mb-6 xl:mb-16 font-sans" id="alumnis"
                aria-level="2"
                role="heading">{{__('about.job_alumni_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/bottin/alumni">{{__('about.job_alumni_link')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($alumnis as $alumni)
                <article
                    class="hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-8 rounded-3xl"
                    aria-labelledby="{{$alumni->slug}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <h4 id="{{$alumni->slug}}" role="heading" aria-level="4"
                                class="text-xl xl:text-2xl">{{$alumni->firstname}} {{$alumni->name}}</h4>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col xl:flex-row xl:gap-4">
                                    <p class="uppercase xl:text-lg">{{$alumni->status}}</p>
                                    <p class="uppercase xl:text-lg">{{$alumni->begin->format('Y')}}-{{$alumni->end->format('Y')}}</p>
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
                        <img class="order-1 rounded-full " width="98" src="{{$alumni->avatar}}" alt="avatar">
                    </div>
                    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                       href="/bottin/alumni/name">{{__('En savoir plus')}}</a>
                </article>
            @endforeach
            @if(count($alumnis) === 0)
                <p class="xl:text-xl text-lg">{{__('job.job_no_alumni')}}</p>
            @endif
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
