<x-commons.navigation :page="$job->name"></x-commons.navigation>
<main id="content">
    <section aria-labelledby="dev-front">
        <div class="flex flex-col px-10 2xl:px-48 xl:px-32 md:flex-row justify-between mt-20">
            <h2 class="xl:text-4xl md:text-3xl flex-1 max-w-[50%] xl:leading-12 text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11"
                id="dev-front" aria-level="2" role="heading">{{$job->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/about#jobs">{{__('job.job_back')}}</a>
        </div>
        <div class="xl:mt-20 2xl:px-48 mt-10 px-10 xl:px-32 lg:grid lg:grid-cols-10 xl:items-center mb-36 lg:gap-x-10 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 class="font-sans text-lg xl:text-2xl md:text-xl font-medium mb-5" id="description" aria-level="2"
                        role="heading">{{__('job.job_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl ">{{$job->description}}</p>
                    </div>
                    <div class="mt-8">
                        <p class="flex gap-3 text-lg"> {{__('project.project_available')}}
                            @foreach($locales as $locale)
                                <a href="/{{$locale->locale}}/about/job/{{$locale->slug}}" class="underline uppercase text-green-700">{{$locale->locale}}</a>
                            @endforeach
                        </p>
                    </div>
                </section>
            </div>
            <div class="lg:not-sr-only sr-only col-span-5">
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
    <article class="bg-yellow-600 2xl:px-48 xl:px-32 px-10 pb-36 pt-20" aria-labelledby="other">
        <div class="flex flex-col md:flex-row justify-between mb-8">
            <h2 class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20" id="other" aria-level="2"
                role="heading">{{__('job.job_other')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/about#jobs">{{__('job.job_other_see')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($jobs as $job_ref)
                <article aria-labelledby="{{$job_ref->translation->where('locale',app()->getLocale())->first()->slug}}" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                    <h3 id="{{$job_ref->translation->where('locale',app()->getLocale())->first()->slug}}" aria-level="3" role="heading"
                        class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{$job_ref->translation->where('locale',app()->getLocale())->first()->name}}</h3>
                    <p class="xl:text-lg">{{$job_ref->translation->where('locale',app()->getLocale())->first()->excerpt}}</p>
                    <a class="linkcard"
                       href="/{{app()->getLocale()}}/about/job/{{$job_ref->translation->where('locale',app()->getLocale())->first()->slug}}">{{__('about.job_more'). $job_ref->translation->where('locale',app()->getLocale())->first()->slug}}</a>
                </article>
            @endforeach
        </div>
    </article>
    <article class="xl:px-32 2xl:px-48 px-10 mt-36 mb-36" aria-labelledby="alumnis">
        <div class="flex flex-col md:flex-row justify-between mb-6">
            <h2 class="xl:text-4xl md:text-3xl md:max-w-md md:leading-10 text-2xl uppercase font-bold text-yellow-800 mb-6 xl:mb-16 font-sans" id="alumnis"
                aria-level="2"
                role="heading">{{__('about.job_alumni_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/bottin/alumni">{{__('about.job_alumni_link')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($alumnis as $alumni_ref)
                <x-alumni_job_article :job="$job" :alumni_ref="$alumni_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
