<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="px-10 2xl:px-48 xl:px-30 lg:px-16 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="about">
        <div class="flex-1 ">
            <h2 class="text-2xl leading-8 mb-6 md:text-3xl xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-16 font-sans"
                role="heading" aria-level="2"
                id="about">
                {{__('about.about_title')}}
            </h2>
            <p class="text-lg md:leading-8 xl:leading-10 xl:text-xl">
                {{__('about.about_text')}}
            </p>
        </div>
        <div class="sr-only lg:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpeg" alt="">
                <img class="rounded-3xl" src="/img-redimensions/pexels-pixabay-270373.jpeg" alt="">
                <img class="rounded-3xl" src="/img-redimensions/ux-gc7de3d904_1920.jpeg" alt="">
            </figure>
        </div>
    </section>
    <section class="bg-yellow-600 mt-20 px-10 py-14 xl:py-20 xl:px-30 lg:px-16 2xl:px-48" aria-labelledby="course">
        <h2 id="course" aria-level="2" role="heading"
            class="text-2xl md:text-3xl mb-10 xl:text-4xl uppercase font-extrabold font-sans xl:mb-20">{{__('about.course_title')}}</h2>
        <div class="flex flex-col lg:gap-y-2 xl:gap-y-12 lg:flex-row justify-between">
            <section class="border-b-2 border-b-orange-500/40 pb-10 lg:border-b-0 lg:border-r-2 lg:pr-16 lg:border-r-orange-500/40"
                aria-labelledby="first-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="first-year" aria-level="3"
                    role="heading">{{__('about.course_first')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="web">
                    <h4 class="font-semibold" id="web" aria-level="4" role="heading">{{__('about.course_web_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-1 flex-col xl:gap-2">
                            @foreach($courses as $course)
                                @if($course->translation->where('locale',app()->getLocale())->first()->bac === 1)
                                    <div class="flex justify-between">
                                        <a class="hover:text-orange-500 underline" href="/{{app()->getLocale()}}/cours/{{$course->translation->where('locale',app()->getLocale())->first()->slug}}">{{$course->translation->where('locale',app()->getLocale())->first()->name}}</a>
                                        <p class="ml-8">{{$course->translation->where('locale',app()->getLocale())->first()->hours}}H</p>
                                    </div>
                                @endif
                            @endforeach
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
            <section class="border-b-2 border-b-orange-500/40 pb-10 lg:border-b-0 lg:border-r-2 lg:pr-16 lg:pl-10 xl:pl-0 lg:border-r-orange-500/40"
                aria-labelledby="second-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="second-year" aria-level="3"
                    role="heading">{{__('about.course_second')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="second-web">
                    <h4 class="sr-only font-semibold" id="second-web" aria-level="3"
                        role="heading">{{__('about.course_web_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-1 flex-col xl:gap-2">
                            @foreach($courses as $course)
                                @if($course->translation->where('locale',app()->getLocale())->first()->bac === 2)
                                    <div class="flex  justify-between">
                                        <a class="hover:text-orange-500 underline" href="/{{app()->getLocale()}}/cours/{{$course->translation->where('locale',app()->getLocale())->first()->slug}}">{{$course->translation->where('locale',app()->getLocale())->first()->name}}</a>
                                        <p class="ml-8">{{$course->translation->where('locale',app()->getLocale())->first()->hours}}H</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </section>
            <section class="border-b-2 border-b-orange-500/40 pb-10 lg:pl-10 xl:pl-0 lg:border-b-0 "
                aria-labelledby="third-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="third-year" aria-level="3"
                    role="heading">{{__('about.course_third')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="second-web">
                    <h4 class="sr-only font-semibold" id="second-web" aria-level="3"
                        role="heading">{{__('about.course_web_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-1 flex-col xl:gap-2">
                            @foreach($courses as $course)
                                @if($course->translation->where('locale',app()->getLocale())->first()->bac === 3)
                                    <div class="flex justify-between">
                                        <a class="hover:text-orange-500 underline" href="/{{app()->getLocale()}}/cours/{{$course->translation->where('locale',app()->getLocale())->first()->slug}}">{{$course->translation->where('locale',app()->getLocale())->first()->name}}</a>
                                        <p class="ml-8">{{$course->translation->where('locale',app()->getLocale())->first()->hours}}H</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </section>
    <section class="px-10 2xl:px-48 xl:px-30 lg:px-16 lg:px-16 mt-14 mb-36 gap-24 items-center" aria-labelledby="profs">
        <div class="flex-1 flex flex-col md:flex-row mt-36 lg:justify-between">
            <h2 class="text-2xl md:text-3xl md:max-w-xl lg:max-w-full md:leading-10 mb-6 xl:text-4xl 2xl:max-w-full uppercase font-bold text-yellow-800 xl:mb-20 font-sans" role="heading"
                aria-level="2"
                id="profs">
                {{__('about.teacher_title')}}
            </h2>
            <div
                class="hover:text-orange-500 flex lg:justify-end text-green-700 underline font-sans text-lg md:text-xl xl:text-2xl font-semibold">
                <a href="/{{app()->getLocale()}}/bottin/alumni">{{__('about.teacher_button')}}</a>
            </div>
        </div>
        <div class="lg:grid lg:grid-cols-2 flex flex-col lg:gap-y-48 xl:gap-y-60 lg:mt-60 xl:gap-y-40 xl:gap-x-60">
            @foreach($teachers as $teacher_ref)
                <x-teacher_list_about :teacher_ref="$teacher_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </section>
    <article class="bg-yellow-600 2xl:px-48 px-10 xl:px-30 lg:px-16 pb-36 pt-20" aria-labelledby="jobs">
        <h2 id="jobs" aria-level="2" role="heading"
            class="text-2xl mb-10 xl:text-4xl uppercase font-extrabold font-sans md:text-3xl xl:mb-20">{{__('about.job_title')}}</h2>
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @foreach($jobs as $job_ref)
            <x-job_article :job_ref="$job_ref->translation->where('locale',app()->getLocale())->first()"/>
        @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
