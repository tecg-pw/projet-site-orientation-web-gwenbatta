<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="px-10 xl:px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="about">
        <div class="flex-1 ">
            <h2 class="text-2xl leading-8 mb-6 xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-16 font-sans"
                role="heading" aria-level="2"
                id="about">
                {{__('about.about_title')}}
            </h2>
            <p class="text-lg xl:leading-10 xl:text-xl">
                {{__('about.about_text')}}
            </p>
        </div>
        <div class="sr-only xl:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpeg" alt="">
                <img class="rounded-3xl" src="/img-redimensions/pexels-pixabay-270373.jpeg" alt="">
                <img class="rounded-3xl" src="/img-redimensions/ux-gc7de3d904_1920.jpeg" alt="">
            </figure>
        </div>
    </section>
    <section class="bg-yellow-600 mt-20 px-10 py-14 xl:py-20 xl:px-36" aria-labelledby="course">
        <h2 id="course" aria-level="2" role="heading"
            class="text-2xl mb-10 xl:text-4xl uppercase font-extrabold font-sans xl:mb-20">{{__('about.course_title')}}</h2>
        <div class="flex flex-col gap-y-12 xl:flex-row justify-between">
            <section
                class="border-b-2 border-b-orange-500/40 pb-10 xl:border-b-0 xl:border-r-2 xl:pr-12 xl:border-r-orange-500/40"
                aria-labelledby="first-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="first-year" aria-level="3"
                    role="heading">{{__('about.course_first')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="web">
                    <h4 class="font-semibold" id="web" aria-level="4" role="heading">{{__('about.course_web_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
{{--                            @foreach($courses_bac1 as $course)--}}
{{--                                <div class="flex justify-between">--}}
{{--                                <a class="hover:text-orange-500 underline" href="/{{str_replace('_','-',app()->getLocale())}}/cours/{{$course->slug}}">{{$course->name}}</a>--}}
{{--                                    <p class="ml-4">{{$course->hours}}H</p>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                        </div>
                    </div>
                </section>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="3D">
                    <h4 class="font-semibold" id="3D" aria-level="4" role="heading">{{__('about.course_3D_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('about.course_video')}}</p>
                            <p>{{__('about.course_photo')}}</p>
                            <p>{{__('about.course_creation_3d')}}</p>
                            <p>{{__('about.course_creation_animation_3d')}}</p>
                        </div>
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('75H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="graphic-design">
                    <h4 class="font-semibold" id="graphic-design" aria-level="4"
                        role="heading">{{__('about.course_design_graphique_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('about.course_creation_2d')}}</p>
                            <p>{{__('about.course_image_argumentation')}}</p>
                            <p>{{__('about.course_numeric_image')}}</p>
                        </div>
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
            </section>
            <section
                class="border-b-2 border-b-orange-500/40 pb-10 xl:border-b-0 xl:border-r-2 xl:pr-16 xl:border-r-orange-500/40"
                aria-labelledby="second-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="second-year" aria-level="3"
                    role="heading">{{__('about.course_second')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="second-web">
                    <h4 class="sr-only font-semibold" id="second-web" aria-level="3"
                        role="heading">{{__('about.course_web_title')}}</h4>
{{--                    <div class="flex justify-between">--}}
{{--                        <div class="flex flex-col xl:gap-2">--}}
{{--                            @foreach($courses_bac2 as $course)--}}
{{--                                <div class="flex justify-between">--}}
{{--                                    <a class="hover:text-orange-500 underline" href="/{{str_replace('_','-',app()->getLocale())}}/cours/{{$course->slug}}">{{$course->name}}</a>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-col ml-8 xl:gap-2">--}}
{{--                            @foreach($courses_bac2 as $course)--}}
{{--                                <div class="flex justify-between">--}}
{{--                                    <p>{{$course->hours}}H</p>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </section>
            </section>
            <section
                class="border-b-2 border-b-orange-500/40 pb-10 xl:border-b-0 "
                aria-labelledby="third-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="third-year" aria-level="3"
                    role="heading">{{__('about.course_third')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="second-web">
                    <h4 class="sr-only font-semibold" id="second-web" aria-level="3"
                        role="heading">{{__('about.course_web_title')}}</h4>
{{--                    <div class="flex justify-between">--}}
{{--                        <div class="flex flex-col xl:gap-2">--}}
{{--                            @foreach($courses_bac3 as $course)--}}
{{--                                <div class="flex justify-between">--}}
{{--                                    <a class="hover:text-orange-500 underline" href="/{{str_replace('_','-',app()->getLocale())}}/cours/{{$course->slug}}">{{$course->name}}</a>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-col ml-8 xl:gap-2">--}}
{{--                            @foreach($courses_bac3 as $course)--}}
{{--                                <div class="flex justify-between">--}}
{{--                                    <p>{{$course->hours}}H</p>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </section>
            </section>
        </div>
    </section>
    <section class="px-10 xl:px-36 mt-14 mb-36 gap-24 items-center" aria-labelledby="profs">
        <div class="flex-1 flex flex-col xl:flex-row mt-36 xl:justify-between">
            <h2 class="text-2xl mb-6 xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-20 font-sans" role="heading"
                aria-level="2"
                id="profs">
                {{__('about.teacher_title')}}
            </h2>
            <div
                class="hover:text-orange-500 flex xl:justify-end text-green-700 underline font-sans text-lg xl:text-2xl font-semibold">
                <a href="/{{str_replace('_','-',app()->getLocale())}}/bottin/alumni">{{__('about.teacher_button')}}</a>
            </div>
        </div>
        <div class="xl:grid xl:grid-cols-2 flex flex-col gap-y-60 xl:mt-60 xl:gap-y-40 xl:gap-x-60">
            @foreach($teachers as $teacher_ref)
                <x-teacher_list_about :teacher_ref="$teacher_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </section>
    <article class="bg-yellow-600 px-10 xl:px-36 pb-36 pt-20" aria-labelledby="jobs">
        <h2 id="jobs" aria-level="2" role="heading"
            class="text-2xl mb-10 xl:text-4xl uppercase font-extrabold font-sans xl:mb-20">{{__('about.job_title')}}</h2>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @foreach($jobs as $job_ref)
            <x-job_article :job_ref="$job_ref->translation->where('locale',app()->getLocale())->first()"/>
        @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
