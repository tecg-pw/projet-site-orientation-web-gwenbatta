<?php
$project->person = $project->person->translation->where('locale', app()->getLocale())->first();
?>
<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="xl:px-36 px-10 mt-20 xl:mb-40" aria-labelledby="{{$project->slug}}">
        <div class="flex flex-col md:flex-row justify-between mb-8">
            <h2 id="{{$project->slug}}" aria-level="2" role="heading"
                class="xl:text-4xl md:text-3xl text-2xl text-yellow-800 uppercase font-extrabold font-sans mb-4 xl:mb-20">{{$project->title}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans md:text-xl xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/project/index">{{__('project.project_button')}}</a>
        </div>
        <div class="flex xl:flex-row flex-col mt-20  xl:mt-0">
            <article class="xl:relative xl:block sm:mb-8 xl:mb-0 sm:flex sm:gap-x-4 sm:items-center xl:mt-48" aria-labelledby="{{$project->person->slug}}">
                <img class="rounded-lg xl:absolute -z-10 xl:bottom-3/4 mb-2" src="{{$project->person->avatar}}" alt="avatar">
                <div class="relative xl:bg-yellow-100 rounded-xl py-4 px-4 xl:py-8 xl:left-10">
                    <h3 id="{{$project->person->slug}}" aria-level="3" role="heading"
                        class="underline text-green-700 hover:text-orange-500 font-medium text-xl xl:text-2xl"><a
                            href="/{{app()->getLocale()}}/bottin/alumni/{{$project->person->slug}}">{{$project->person->firstname}} {{$project->person->name}}</a>
                    </h3>
                    <p class="mb-2 mt-2 xl:text-xl">{{$project->person->begin->format('Y')}}
                        -{{$project->person->end->format('Y')}}</p>
                    <a class="underline text-green-700 text-lg xl:text-xl hover:text-orange-500"
                       href="{{$project->person->link_portfolio}}">{{$project->person->link_portfolio}}</a>
                    <div class="flex xl:flex-row flex-col justify-between xl:gap-32 xl:items-center mt-4 mb-2 ">
                        <div class="flex flex-1 gap-5">
                            <div class="relative group">
                                <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                     viewBox="0 0 38.97 38.005">
                                    <path id="_08774047e75405e5723edc2388e9bc78"
                                          data-name="08774047e75405e5723edc2388e9bc78"
                                          d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                                          transform="translate(-1.999 -2.247)" fill="#da953a"/>
                                </svg>
                                <a class="linkcard" href="{{$project->person->link_github}}"></a>
                            </div>
                            <div class="group relative">
                                <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                     viewBox="0 0 41.079 41.079">
                                    <path id="af2da8f3726c5aa836b9ea2eeab70e0c"
                                          d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                                          transform="translate(-2 -2)" fill="#da953a"/>
                                </svg>
                                <a class="linkcard" href="{{$project->person->instagram}}"></a>
                            </div>
                            <div class="group relative">
                                <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                     viewBox="0 0 37.777 38.005">
                                    <path id="e42de672acac05e6c1484ce6eac8627f"
                                          d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                                          transform="translate(-2.06 -2)" fill="#da953a"/>
                                </svg>
                                <a class="linkcard" href="{{$project->person->linkedin}}"></a>
                            </div>
                        </div>
                        <p class="justify-self-end text-green-500 uppercase text-lg mt-4 xl:mt-2">{{$project->person->status}}</p>
                    </div>
                </div>
            </article>
            <div class="xl:ml-28 xl:mt-0">
                <p class="text-lg xl:text-xl xl:max-w-[85%] flex flex-col gap-8 leading-8">
                    {{$project->description}}
                </p>
                <div class="mt-6">
                    <div class="flex flex-col xl:gap-2 text-lg">
                        <div class="flex xl:flex-row flex-col xl:gap-3 mb-3">
                            <p>{{__('project.project_make_course')}}</p>
                            @foreach($course as $classe)
                                <a class=" underline text-green-700 uppercase hover:text-orange-500"
                                   href="/{{app()->getLocale()}}/cours/{{$classe->translation->where('locale',app()->getLocale())->first()->slug}}">{{$classe->translation->where('locale',app()->getLocale())->first()->name}}</a>
                        </div>
                        <div class="flex xl:flex-row flex-col mb-3 xl:gap-3">
                            <p>{{__('project.project_make_with')}}</p>
                            @foreach($teachers as $teacher_ref)
                                <a class=" underline text-green-700 uppercase hover:text-orange-500"
                                   href="/{{app()->getLocale()}}/bottin/teacher/{{$teacher_ref->translation->where('locale',app()->getLocale())->first()->slug}}">{{$teacher_ref->translation->where('locale',app()->getLocale())->first()->firstname}} {{$teacher_ref->translation->where('locale',app()->getLocale())->first()->name}}</a>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            <p class="flex gap-3"> {{__('project.project_available')}}
                                @foreach($locales as $locale)
                                    <a href="/{{$locale}}/project/{{$project->slug}}" class="underline hover:text-orange-500 uppercase text-green-700">{{$locale}}</a>
                                @endforeach
                            </p>
                        </div>
                        @endforeach
                        </div>
                        <div class="flex flex-col xl:flex-row xl:gap-32 mt-4 xl:items-center">
                            <a href="{{$project->person->link_portfolio}}"
                               class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('project.project_portfolio')}}</a>
                            <a class="group hover:text-orange-500 flex font-sans text-green-700 md:text-xl xl:text-2xl font-semibold underline px-4 py-6 self-center xl:justify-self-end"
                               href="{{$project->link_github}}">
                <span class="mr-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 38.97 38.005">
                        <path class="group-hover:fill-orange-500" data-name="08774047e75405e5723edc2388e9bc78"
                              d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                              transform="translate(-1.999 -2.247)" fill="#4e6458"/>
                        </svg>
                    </span>
                                <span class="xl:mt-0 mt-1.5">{{__('project.project_github')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <section class="xl:not-sr-only sr-only xl:px-36 px-10 bg-yellow-600" aria-labelledby="photos">
        <h2 id="photos" aria-level="2" role="heading" class="sr-only">{{__('project.project_pictures')}}</h2>
        <figure class="grid grid-cols-4 grid-rows-2 gap-5  py-24">
            <img class="rounded-xl row-span-2" src="https://placehold.jp/395x584.png" alt="{{__('photo du projet')}}">
            <img class="rounded-xl col-span-2" src="https://placehold.jp/723x278.png" alt="{{__('photo du projet')}}">
            <img class="rounded-xl row-span-2" src="https://placehold.jp/395x584.png" alt="{{__('photo du projet')}}">
            <img class="rounded-xl " src="https://placehold.jp/330x278.png" alt="{{__('photo du projet')}}">
            <img class="rounded-xl " src="https://placehold.jp/330x278.png" alt="{{__('photo du projet')}}">
        </figure>
    </section>
    <article class="px-10 xl:px-36 pb-40 pt-20" aria-labelledby="projects">
        <div class="justify-between flex flex-col mb-8 xl:flex-row">
            <h2 id="projects" role="heading" aria-level="2"
                class="xl:text-4xl text-yellow-800 text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20">{{__('project.project_other')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/{{app()->getLocale()}}/project/index">{{__('project.project_see_all')}}</a>
        </div>
        <div class="md:grid xl:grid-cols-3 md:grid-cols-2 xl:gap-8 flex flex-col gap-y-4 justify-center">
            @foreach($projects as $project_ref)
                <x-project :project_ref="$project_ref"></x-project>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
