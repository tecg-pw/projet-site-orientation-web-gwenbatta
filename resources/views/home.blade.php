<x-commons.navigation :page="__('nav.nav_link_home')"></x-commons.navigation>
<main id="content" >
    <section class="relative mt-14 px-10 2xl:px-48 xl:px-32 lg:px-16 lg:flex xl:mt-14 xl:mb-36 lg:gap-x-12 xl:gap-24 xl:items-center" aria-labelledby="intro">
        <div class="lg:flex-1">
            <h2 class="text-2xl leading-8 mb-6 uppercase font-bold text-yellow-800 font-sans md:text-3xl xl:text-4xl xl:mb-16  xl:leading-12" role="heading" aria-level="2"
                id="intro">
                {{__('home.intro_title')}}
            </h2>
            <p class="text-lg md:leading-8 xl:leading-10 xl:text-xl">
                {{__('home.intro_text')}}
            </p>
            <div class="mt-6 flex flex-col xl:justify-between xl:flex-row xl:items-center xl:mt-20 ">
                <a href="/{{app()->getLocale()}}/about"
                   class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('home.intro_button_about')}}</a>
                <a class="text-center rounded-lg px-4 py-2 hover:text-orange-500 font-semibold underline font-sans text-green-700 xl:self-center xl:flex xl:text-end xl:text-2xl  xl:px-4 xl:py-6 xl:self-end"
                   href="/{{app()->getLocale()}}/forum/index">{{__('home.intro_button_forum')}}
                </a>
            </div>
        </div>
        <div class="lg:flex-1">
            <figure class=" lg:grid lg:grid-rows-2 lg:grid-cols-2 lg:gap-6 xl:gap-8">
                <img class="sr-only lg:not-sr-only lg:rounded-3xl lg:row-span-2 lg:min-h-full" src="/img-redimensions/pexels-buro-millennial-1438072-878.jpg"
                     srcset="
                     /img-redimensions/pexels-buro-millennial-1438072-481.jpg 1024w,
                     /img-redimensions/pexels-buro-millennial-1438072-524.jpg 1250w,
                     /img-redimensions/pexels-buro-millennial-1438072-588.jpg 1520w,
                     /img-redimensions/pexels-buro-millennial-1438072-733.jpg 2040w,
                     /img-redimensions/pexels-buro-millennial-1438072-878.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                     alt="">
                <img class="sr-only lg:not-sr-only lg:rounded-3xl" src="/img-redimensions/pexels-buro-millennial-1438081-504.jpg"
                     srcset="
                     /img-redimensions/pexels-buro-millennial-1438081-274.jpg 1024w,
                     /img-redimensions/pexels-buro-millennial-1438081-302.jpg 1250w,
                     /img-redimensions/pexels-buro-millennial-1438081-330.jpg 1520w,
                     /img-redimensions/pexels-buro-millennial-1438081-417.jpg 2040w,
                     /img-redimensions/pexels-buro-millennial-1438081-504.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                     alt="">
                <img class="sr-only lg:not-sr-only lg:rounded-3xl" src="/img-redimensions/pexels-buro-millennial-1438084-504.jpg"
                     srcset="
                     /img-redimensions/pexels-buro-millennial-1438084-274.jpg 1024w,
                     /img-redimensions/pexels-buro-millennial-1438084-302.jpg 1250w,
                     /img-redimensions/pexels-buro-millennial-1438084-330.jpg 1520w,
                     /img-redimensions/pexels-buro-millennial-1438084-417.jpg 2040w,
                     /img-redimensions/pexels-buro-millennial-1438084-504.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                     alt="">
            </figure>
        </div>
    </section>
    <section class="px-10 2xl:px-48 bg-yellow-600 mt-16 xl:mt-40 xl:px-32 lg:px-16 xl:grid xl:grid-cols-5 xl:pb-28 xl:gap-20" aria-labelledby="why">
        <div class="border-b-2 pb-14 xl:pb-0 xl:border-b-0 xl:mt-20 xl:border-r-2 border-orange-500/40 xl:col-span-3 xl:pr-14">
            <h2 id="why" aria-level="2" role="heading"
                class="pt-14 leading-8 mb-6 text-2xl uppercase font-bold font-sans md:text-3xl xl:mb-12 xl:text-4xl ">{{__('home.why_title')}}</h2>
            <p class="text-lg md:leading-8 xl:text-xl xl:leading-10 xl:max-w-3xl">{{__('home.why_text')}}</p>
        </div>
        <div class=" xl:self-center xl:col-span-2 xl:mt-16">
            <div class="relative group flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500/40">
                <p class="group-hover:text-orange-500 text-xl xl:text-2xl font-light text-green-700 underline mb-4 xl:mb-6">{{__('home.qualities_title')}}</p>
                <p class="xl:leading-8 text-lg xl:text-xl">{{__('home.qualities_text')}}</p>
                <svg class="group-hover:mr-0 self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417"
                     viewBox="0 0 32 27.417">
                    <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/{{app()->getLocale()}}/about#course">
                    {{__('qualities_button')}}
                </a>
            </div>
            <div class="group relative flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500/40">
                <p class="group-hover:text-orange-500 text-xl xl:text-2xl font-light text-green-700 underline mb-4 xl:mb-6">{{__('home.emploi_title')}}</p>
                <p class="xl:leading-8 text-lg xl:text-xl">{{__('home.emploi_text')}}</p>
                <svg class="group-hover:mr-0 self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417"
                     viewBox="0 0 32 27.417">
                    <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/{{app()->getLocale()}}/about#jobs">
                    {{__('home.emploi_button')}}
                </a>
            </div>
            <div class="group relative flex flex-col pt-7 justify-self-center pb-12 ">
                <p class="group-hover:text-orange-500 text-xl xl:text-2xl font-light text-green-700 underline mb-4 xl:mb-6">{{__('home.teacher_title')}}</p>
                <p class="xl:leading-8 text-lg xl:text-xl">{{__('home.teacher_text')}}</p>
                <svg class="group-hover:mr-0  self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417"
                     viewBox="0 0 32 27.417">
                    <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/{{app()->getLocale()}}/about#profs">
                    {{__('home.teacher_button')}}
                </a>
            </div>
        </div>
    </section>
    <article class="px-10 2xl:px-48 mt-16 xl:mt-20 xl:px-32 lg:px-16 xl:mb-36" aria-labelledby="projects">
        <div class="flex flex-col mb-14 md:flex-row xl:mb-28">
            <h2 role="heading" aria-level="2" id="projects"
                class="text-2xl lg:max-w-full md:text-3xl md:leading-10 2xl:max-w-full md:max-w-md mb-6 xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-12 font-sans">
                {{__('home.projects_title')}}
            </h2>
            <a class="hover:text-orange-500 lg:text-end font-sans  text-green-700  font-semibold underline flex-1 md:text-xl xl:text-end xl:text-3xl"
               href="/{{app()->getLocale()}}/project/index">{{__('home.projects_button')}}</a>
        </div>
        <div class="flex-wrap flex gap-8 justify-center md:grid md:grid-cols-2 lg:flex lg:flex-nowrap">
            @foreach($projects as $project_ref)
                <x-project :person="$project_ref->person" :project_ref="$project_ref->translation->where('locale',app()->getLocale())->first()"></x-project>
            @endforeach
        </div>
    </article>
    <x-questions-forum :latests="$latests" :ratings="$ratings" :subjects="$subjects"></x-questions-forum>
    <section class="px-10 2xl:px-48 xl:px-32 lg:px-16 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="interrest">
        <div class="flex-1">
            <h2 class="pt-14 flex-1 leading-8 mb-6 text-2xl xl:text-4xl uppercase font-bold text-yellow-800 md:text-3xl xl:mb-16 font-sans" role="heading" aria-level="2"
                id="interrest">
                {{__('home.interrest_title')}}
            </h2>
            <p class="text-lg md:leading-8 xl:text-xl xl:leading-10">
                {{__('home.interrest_text')}}
            </p>
            <div class="mt-6 flex flex-col xl:justify-between xl:flex-row xl:items-center xl:mt-20 ">
                <a href="/{{app()->getLocale()}}/contact/student"
                   class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('home.interrest_button_contact')}}</a>
                <a class="text-center rounded-lg px-4 py-2 hover:text-orange-500 font-semibold underline font-sans text-green-700 md:text-xl xl:self-center xl:flex xl:text-end xl:text-2xl  xl:px-4 xl:py-6 xl:self-end"
                   href="https://www.hepl.be/fr/inscription">{{__('home.interrest_button_inscription')}}
                </a>
            </div>
        </div>
        <div class="sr-only lg:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="/img-redimensions/windows-VMPhyAoVqqk-unsplash-878.jpg"
                     srcset="
                     /img-redimensions/windows-VMPhyAoVqqk-unsplash-481.jpg 1024w,
                     /img-redimensions/windows-VMPhyAoVqqk-unsplash-534.jpg 1250w,
                     /img-redimensions/windows-VMPhyAoVqqk-unsplash-588.jpg 1520w,
                     /img-redimensions/windows-VMPhyAoVqqk-unsplash-733.jpg 2040w,
                     /img-redimensions/windows-VMPhyAoVqqk-unsplash-878.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                     alt="">
                <img class="rounded-3xl" src="/img-redimensions/pexels-olya-kobruseva-5428836-504.jpg"
                     srcset="
                     /img-redimensions/pexels-olya-kobruseva-5428836-274.jpg 1024w,
                     /img-redimensions/pexels-olya-kobruseva-5428836-302.jpg 1250w,
                     /img-redimensions/pexels-olya-kobruseva-5428836-330.jpg 1520w,
                     /img-redimensions/pexels-olya-kobruseva-5428836-417.jpg 2040w,
                     /img-redimensions/pexels-olya-kobruseva-5428836-504.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                     alt="">
                <img class="rounded-3xl" src="/img-redimensions/student-g0a8698c9e_1920-504.jpg"
                     srcset="
                     /img-redimensions/student-g0a8698c9e_1920-274.jpg 1024w,
                     /img-redimensions/student-g0a8698c9e_1920-302.jpg 1250w,
                     /img-redimensions/student-g0a8698c9e_1920-330.jpg 1520w,
                     /img-redimensions/student-g0a8698c9e_1920-417.jpg 2040w,
                     /img-redimensions/student-g0a8698c9e_1920-504.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w"
                     alt="">
            </figure>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
