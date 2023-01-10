<x-commons.navigation :page="$job->name"></x-commons.navigation>
<main id="content">
    <div class="flex items-center px-10 2xl:px-48 xl:px-32 mt-20">
        <a href="/{{app()->getLocale()}}/about"
           class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.about')}}
        </a>
        <svg class="h-7 w-7 text-green-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>
            <polyline points="9 6 15 12 9 18"/>
        </svg>
        <a href="/{{app()->getLocale()}}/about/job/{{$job->slug}}"
           class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{$job->name}}
        </a>
    </div>
    <section aria-labelledby="dev-front">
        <div class="flex flex-col px-10 2xl:px-48 xl:px-32 md:flex-row justify-between mt-20">
            <h2 class="xl:text-4xl 2xl:text-5xl md:text-3xl flex-1 max-w-[50%] xl:leading-12 text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11"
                id="dev-front" aria-level="2" role="heading">{{$job->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl 2xl:text-3xl font-semibold"
               href="/{{app()->getLocale()}}/about#jobs">{{__('job.job_back')}}</a>
        </div>
        <div
            class="xl:mt-20 2xl:px-48 mt-10 px-10 xl:px-32 lg:grid lg:grid-cols-10 xl:items-center mb-36 lg:gap-x-10 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 class="font-sans text-lg xl:text-2xl 2xl:text-3xl md:text-xl font-medium mb-5" id="description"
                        aria-level="2"
                        role="heading">{{__('job.job_subtitle')}}</h3>
                    <div class="flex flex-col gap-6 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl 2xl:leading-12">
                       {!!$job->description!!}
                    </div>
                    <div class="mt-8">
                        <p class="flex gap-3 text-lg xl:text-xl 2xl:text-2xl"> {{__('project.project_available')}}
                            @foreach($locales as $locale)
                                <a href="/{{$locale->locale}}/about/job/{{$locale->slug}}"
                                   class="underline uppercase text-green-700">{{$locale->locale}}</a>
                            @endforeach
                        </p>
                    </div>
                </section>
            </div>
            <div class="lg:not-sr-only sr-only col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         srcset="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-323.jpeg 1024w,
             /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-392.jpeg 1250w,
             /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-460.jpeg 1520w,
             /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-710.jpeg 2040w,
             /img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpeg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash-844.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         srcset="/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-330.jpeg 1024w,
             /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-330.jpeg 1250w,
             /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-384.jpeg 1520w,
             /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-537.jpeg 2040w,
             /img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-690.jpeg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash-690.jpeg" alt="">

                    <img class="rounded-3xl order-2" srcset="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-135.jpeg 1024w,
             /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-158.jpeg 1250w,
             /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-180.jpeg 1520w,
             /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-273.jpeg 2040w,
             /img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-333.jpeg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash-333.jpeg"
                         alt="">
                    <img class="rounded-3xl order-3"
                         srcset="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-135.jpeg 1024w,
             /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-158.jpeg 1250w,
             /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-180.jpeg 1520w,
             /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-273.jpeg 2040w,
             /img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-333.jpeg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash-333.jpeg"
                         alt="">
                    <img class="col-span-3 rounded-3xl order-4 min-w-full" srcset="/img-redimensions/brooke-cagle-g1Kr4Ozfoac-unsplash-452.jpeg 1024w,
             /img-redimensions/brooke-cagle-g1Kr4Ozfoac-unsplash-512.jpeg 1250w,
             /img-redimensions/brooke-cagle-g1Kr4Ozfoac-unsplash-572.jpeg 1520w,
             /img-redimensions/brooke-cagle-g1Kr4Ozfoac-unsplash-736.jpg 2040w,
             /img-redimensions/brooke-cagle-g1Kr4Ozfoac-unsplash-900.jpg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         src="/img-redimensions/brooke-cagle-g1Kr4Ozfoac-unsplash-452.jpeg" alt="">
                </figure>
            </div>
        </div>
    </section>
    <article class="bg-yellow-600 2xl:px-48 xl:px-32 px-10 pb-36 pt-20" aria-labelledby="other">
        <div class="flex flex-col md:flex-row justify-between mb-8">
            <h2 class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20" id="other"
                aria-level="2"
                role="heading">{{__('job.job_other')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl 2xl:text-3xl font-semibold"
               href="/{{app()->getLocale()}}/about#jobs">{{__('job.job_other_see')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($jobs as $job_ref)
                <x-job_article class="bg-white-100" :job_ref="$job_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </article>
    <article class="xl:px-32 2xl:px-48 px-10 mt-36 mb-36" aria-labelledby="alumnis">
        <div class="flex flex-col md:flex-row justify-between mb-6">
            <h2 class="xl:text-4xl 2xl:text-5xl md:text-3xl md:max-w-md md:leading-10 text-2xl uppercase font-bold text-yellow-800 mb-6 lg:max-w-full xl:mb-16 font-sans"
                id="alumnis"
                aria-level="2"
                role="heading">{{__('about.job_alumni_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl 2xl:text-3xl font-semibold"
               href="/{{app()->getLocale()}}/bottin/alumni">{{__('about.job_alumni_link')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($alumnis as $alumni_ref)
                <x-people.alumni_job_article :job="$job"
                                      :alumni_ref="$alumni_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
            @if(count($alumnis)===0)
                <p>{{__('job.job_no_alumni')}}</p>
            @endif
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
