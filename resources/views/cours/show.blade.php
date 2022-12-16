
<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section aria-labelledby="slug">
        <div class="flex md:flex-row flex-col xl:px-36 px-10 justify-between mt-20 mb-8">
            <h2 id="slug" aria-level="2" role="heading" class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-4 xl:mb-11">{{$course->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/about#course">{{__('course.course_back')}}</a>
        </div>
        <div class="xl:px-36 mb-6 xl:mb-0 px-10 flex justify-between sm:justify-start sm:gap-x-10  xl:justify-start xl:gap-20 text-lg xl:text-xl">
            <p class="uppercase">{{$course->bac}}e{{$course->bac===1?'r':''}} {{__('course.course_year')}}</p>
            <div class="flex flex-wrap sm:gap-x-10 xl:gap-x-24 xl:gap-y-3 max-w-[50%]">
            @foreach($teachers as $teacher)
            <a class="underline text-green-700 uppercase hover:text-orange-500" href="/{{app()->getLocale()}}/bottin/teacher/{{$teacher->translation->where('locale',app()->getLocale())->first()->slug}}">{{$teacher->translation->where('locale',app()->getLocale())->first()->firstname}} {{$teacher->translation->where('locale',app()->getLocale())->first()->name}}</a>
            @endforeach
            </div>
        </div>
        <div class="xl:px-36 xl:mt-6 px-10 xl:grid xl:grid-cols-10 items-end mb-36 gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading" class="font-sans text-lg md:text-xl xl:text-2xl font-medium mb-5">{{__('course.course_subtitle')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-8 xl:text-xl xl:leading-10 ">{{$course->description}}</p>
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
                </figure>
            </div>
        </div>
    </section>
    <article class="bg-yellow-600 px-10 xl:px-36 pb-40 pt-20" aria-labelledby="projects">
        <div class="justify-between flex flex-col mb-8 xl:flex-row">
            <h2 id="projects" role="heading" aria-level="2"
                class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-4 md:text-3xl xl:mb-20">{{__('course.project_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/project/index">{{__('project.project_see_all')}}</a>
        </div>
        <div class="md:grid md:grid-cols-2 xl:grid-cols-3 xl:gap-8 flex flex-col gap-y-4 justify-center">
            @foreach($projects as $project_ref)
                <x-project :project_ref="$project_ref->translation->where('locale',app()->getLocale())->first()"></x-project>
            @endforeach
            @if(count($projects) === 0)
                <p class="xl:text-xl text-lg">{{__('people.bottin_no_project')}}</p>
            @endif
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
