<x-commons.navigation :page="$course->name"></x-commons.navigation>
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
        <a href="/{{app()->getLocale()}}/cours/{{$course->slug}}"
           class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{$course->name}}
        </a>
    </div>
    <section aria-labelledby="slug">
        <div class="flex md:flex-row flex-col 2xl:px-48 xl:px-32 lg:px-16 px-10 justify-between mt-20 mb-8">
            <h2 id="slug" aria-level="2" role="heading"
                class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-4 xl:mb-11">{{$course->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl 2xl:text-3xl font-semibold"
               href="/{{app()->getLocale()}}/about#course">{{__('course.course_back')}}</a>
        </div>
        <div
            class="xl:px-32 lg:px-16 2xl:px-48 mb-6 xl:mb-0 px-10 flex justify-between sm:justify-start sm:gap-x-10  xl:justify-start xl:gap-20 text-lg xl:text-xl">
            <p class="uppercase xl:text-xl 2xl:text-2xl">{{$course->bac}}
                e{{$course->bac===1?'r':''}} {{__('course.course_year')}}</p>
            <div class="flex flex-wrap sm:gap-x-10 xl:gap-x-24 xl:gap-y-3 max-w-[50%]">
                @foreach($teachers as $teacher)
                    <a class="underline text-green-700 uppercase hover:text-orange-500 xl:text-xl 2xl:text-2xl"
                       href="/{{app()->getLocale()}}/bottin/{{$teacher->translation->where('locale',app()->getLocale())->first()->status==="professeur" ? "teacher" : $teacher->translation->where('locale',app()->getLocale())->first()->status}}/{{$teacher->translation->where('locale',app()->getLocale())->first()->slug}}">{{$teacher->translation->where('locale',app()->getLocale())->first()->firstname}} {{$teacher->translation->where('locale',app()->getLocale())->first()->name}}</a>
                @endforeach
            </div>
        </div>
        <div
            class="xl:px-32 lg:px-16 2xl:px-48 xl:mt-6 px-10 lg:grid lg:grid-cols-10 items-end mb-36 gap-x-10 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 id="description" aria-level="3" role="heading"
                        class="font-sans text-lg md:text-xl xl:text-2xl 2xl:text-3xl font-medium mb-5">{{__('course.course_subtitle')}}</h3>
                    <div
                        class="flex flex-col gap-6text-lg leading-8 xl:text-xl 2xl:text-2xl 2xl:leading-12 xl:leading-10">
                        {!!$course->description!!}
                    </div>
                </section>
            </div>
            <div class="lg:not-sr-only sr-only col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2 min-h-full"
                         src="/img-redimensions/girl-on-computer-526.jpg"
                         srcset="/img-redimensions/windows-VMPhyAoVqqk-unsplash-1-1024.jpeg 1024w,
             /img-redimensions/windows-VMPhyAoVqqk-unsplash-1-1250.jpeg 1250w,
             /img-redimensions/windows-VMPhyAoVqqk-unsplash-1-1520.jpeg 1520w,
             /img-redimensions/windows-VMPhyAoVqqk-unsplash-1-2040.jpeg 2040w,
             /img-redimensions/windows-VMPhyAoVqqk-unsplash-1-2560.jpeg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         srcset="
                    /img-redimensions/ux-gc7de3d904_1920-1024.jpeg 1024w,
                     /img-redimensions/ux-gc7de3d904_1920-1250.jpeg 1250w,
                     /img-redimensions/ux-gc7de3d904_1920-1520.jpeg 1520w,
                     /img-redimensions/ux-gc7de3d904_1920-2040.jpeg 2040w,
                     /img-redimensions/ux-gc7de3d904_1920-2560.jpeg 2560w"
                         sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                         src="/img-redimensions/ux-gc7de3d904_1920-2560.jpeg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/coding-picture.jpg"
                         srcset="/img-redimensions/pexels-pixabay-270373-1716-274.jpg 1024w,
             /img-redimensions/pexels-pixabay-270373-1716-302.jpg 1250w,
             /img-redimensions/pexels-pixabay-270373-1716-330.jpg 1520w,
             /img-redimensions/pexels-pixabay-270373-1716-417.jpg 2040w,
             /img-redimensions/pexels-pixabay-270373-1716-504.jpg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         alt="">
                    <img class="rounded-3xl order-3"
                         srcset="/img-redimensions/student-g0a8698c9e_1920-274.jpg 1024w,
             /img-redimensions/student-g0a8698c9e_1920-1280-302.jpg 1250w,
             /img-redimensions/student-g0a8698c9e_1920-1280-330.jpg 1520w,
             /img-redimensions/student-g0a8698c9e_1920-1280-417.jpg 2040w,
             /img-redimensions/student-g0a8698c9e_1920-1280-504.jpg 2560w"
                         sizes="
                        (min-width : 1024px) 1024w,
                     (min-width : 1250px) 1250w,
                     (min-width : 1520px) 1520w,
                     (min-width : 2040px) 2040w,
                     2560w"
                         src="/img-redimensions/student-g0a8698c9e_1920-1280-504.jpg"
                         alt="">
                </figure>
            </div>
        </div>
    </section>
    <article class="bg-yellow-600 2xl:px-48 px-10 xl:px-32 lg:px-16 pb-40 pt-20" aria-labelledby="projects">
        <div class="justify-between flex flex-col md:flex-row mb-8 xl:flex-row">
            <h2 id="projects" role="heading" aria-level="2"
                class="xl:text-4xl 2xl:text-5xl text-2xl uppercase font-extrabold font-sans mb-4 md:text-3xl xl:mb-20">{{__('course.project_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl 2xl:text-3xl font-semibold"
               href="/{{app()->getLocale()}}/project/index">{{__('project.project_see_all')}}</a>
        </div>
        <div class="md:grid md:grid-cols-2 xl:grid-cols-3 xl:gap-8 flex flex-col gap-y-4 justify-center">
            @foreach($projects as $project_ref)
                <x-project :person="$project_ref->person"
                           :project_ref="$project_ref->translation->where('locale',app()->getLocale())->first()"></x-project>
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
