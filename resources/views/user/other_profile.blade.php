<x-commons.navigation :page="$user->firstname .' '.$user->name"></x-commons.navigation>
<main id="content">
    <section class="flex flex-col relative mb-14 md:mb-32" aria-labelledby="name">
        <div class="relative flex-1">
            <div class="flex flex-1 flex-col sm:flex-row items-center justify-self-end sm:mt-24 md:mt-36 lg:mt-52 xl:mt-64 2xl:mt-96 3xl:mt-[30rem] px-10 lg:px-16 xl:px-32 2xl:px-48 px-10 lg:px-16 xl:px-32 2xl:px-48 mt-10">
                <div class="order-2 flex-1 flex-col flex ml-8 ">
                    <div class="flex-1">
                        <h2 role="heading" id="name" aria-level="2"
                            class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl text-yellow-800 font-extrabold font-sans mt-4 md:mb-3 md:mt-0">{{$user->firstname}} {{$user->name}}</h2>
                        <p class="uppercase text-lg xl:text-2xl 2xl:text-3xl">{{$user->status->translation->where('locale',app()->getLocale())->first()->name}}</p>
                    </div>
                </div>
                <picture>
                    @if($user->srcset && $user->srcset['full'])
                        @foreach($user->srcset['full'] as $size => $path)
                            <source media="(max-width: {{$size}}px)"
                                    srcset="/{{$path}}">
                        @endforeach
                    @endif
                    <img
                        src="{{$user->avatars && $user->avatars['full'] ? '/' . $user->avatars['full'] : '/'.$user->avatar}}"
                        alt="{{$user->title}}" class="rounded-full">
                </picture>
            </div>
            <picture class="absolute -z-10 top-0 bottom-0 left-0 right-0">
                @if($user->srcset_back && $user->srcset_back['full'])
                    @foreach($user->srcset_back['full'] as $size => $path)
                        <source media="(max-width: {{$size}}px)"
                                srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                    src="{{$user->back_images && $user->back_images['full'] ? '/' . $user->back_images['full'] : '/'.$user->back_image}}"
                    alt="{{$user->title}}" class="min-w-full">
            </picture>
        </div>
    </section>
    <article class="bg-yellow-600 px-10 lg:px-16 xl:px-32 2xl:px-48 pb-36 pt-20" aria-labelledby="tutos">
        <div class="flex flex-col md:flex-row justify-between">
            <h2 role="heading" id="tutos" aria-level="2"
                class="xl:text-4xl 2xl:text-5xl text-2xl md:text-3xl uppercase font-extrabold font-sans mb-4 md:mb-20">{{__('user.user_favorite_auth')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 text-lg md:text-xl xl:text-3xl font-semibold underline md:px-4"
               href="/{{app()->getLocale()}}/technical/tuto">{{__('user.tuto_back')}}</a>
        </div>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @foreach($tutos as $tuto_ref)
                <x-technical.tuto class="bg-yellow-100" :tuto="$tuto_ref" :tuto_ref="$tuto_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
            @if(count($tutos) === 0)
                <p class="xl:text-xl 2xl:text-2xl text-lg col-span-2 mt-3">{{__('user.user_no_favorite')}}</p>
            @endif
        </div>
    </article>
    <section class="px-10 lg:px-16 xl:px-32 2xl:px-48 mt-20 md:mt-32 mb-36" aria-labelledby="questions">
        <h2 role="heading" id="questions" aria-level="2"
            class="text-2xl md:text-3xl md:self-center xl:text-4xl 2xl:text-5xl uppercase font-extrabold text-yellow-800 font-sans md:mb-20 mb-4">{{__('user.user_question_title_auth')}}</h2>
        <div class="col-span-3 flex flex-col xl:pr-14 ">
            @foreach($subjects as $subject)
                <article
                    class="slide-in mb-7 group hover:bg-orange-100  bg-yellow-100 p-2 sm:p-4 relative flex xl:p-6 rounded-xl"
                    aria-labelledby="{{$subject->slug}}">
                    <div class="order-2 flex-1 flex flex-col xl:ml-4 justify-center gap-y-2 xl:gap-4">
                        <div class="flex flex-col  xl:gap-4">
                            <div class="flex gap-2">
                                <h3 class="search-title first-letter:uppercase order-2 font-medium text-lg xl:text-xl 2xl:text-2xl"
                                    id="{{$subject->slug}}"
                                    role="heading"
                                    aria-level="3">{{$subject->subject}}</h3>
                                @if($subject->resolved)
                                    <svg class="xl:not-sr-only sr-only" xmlns="http://www.w3.org/2000/svg"
                                         width="25"
                                         viewBox="0 0 34.194 34.196">
                                        <g data-name="Groupe 214" transform="translate(-875 -1773)">
                                            <path
                                                data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                transform="translate(873 1771)" fill="#da953a"/>
                                            <path
                                                data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                transform="translate(875.711 1774.888)" fill="#da953a"/>
                                        </g>
                                    </svg>
                                    <svg class="xl:sr-only" xmlns="http://www.w3.org/2000/svg" width="20"
                                         viewBox="0 0 34.194 34.196">
                                        <g data-name="Groupe 214" transform="translate(-875 -1773)">
                                            <path
                                                data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                transform="translate(873 1771)" fill="#da953a"/>
                                            <path
                                                data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                transform="translate(875.711 1774.888)" fill="#da953a"/>
                                        </g>
                                    </svg>
                                @endif
                            </div>
                            <div class="flex -order-2 relative justify-between xl:justify-between">
                                <p class="md:text-base sm:text-sm text-base uppercase self-end 2xl:text-lg">{{$subject->user->firstname}} {{$subject->user->name}}</p>
                                <p class="md:text-base sm:text-sm self-end 2xl:text-lg">{{$subject->created_at->translatedFormat('d M Y')}}</p>
                            </div>
                        </div>
                        <div class="order-3 flex flex-row justify-between">
                            <div class="flex gap-4 items-center">
                                <p class="md:text-base text-sm uppercase font-medium bg-orange-500/40 mr-4 px-3 xl:px-6 pb-1 pt-1.5 rounded-lg text-green-700 2xl:text-lg">
                                    {{ucwords($subject->tag->translation->where('locale', app()->getLocale())->first()->name)}}</p>
                                <p class="md:text-lg sm:text-base 2xl:text-lg">{{__('forum.number_comment').$subject->comments_count}}</p>
                            </div>
                            <a class="linkcard underline text-green-700 font-sans font-semibold"
                               href="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}">{{__('forum.see_subject') . $subject->subject}}</a>
                            <svg class="mr-4 sr-only sm:not-sr-only sm:self-end group-hover:mr-0"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                            <svg class="mr-4 sm:sr-only group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                                 width="20"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                    </div>
                    <picture class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full">
                        @if($subject->user->srcset && $subject->user->srcset['thumbnail'])
                            @foreach($subject->user->srcset['thumbnail'] as $size => $path)
                                <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
                            @endforeach
                        @endif
                        <img
                            src="{{$subject->user->avatars && $subject->user->avatars['thumbnail'] ? '/' . $subject->user->avatars['thumbnail'] : '/'.$subject->user->avatar}}"
                            alt="{{$subject->user->title}}" class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full">
                    </picture>
                </article>
            @endforeach
        </div>
        @if(count($subjects)===0)
            <p class="xl:text-xl 2xl:text-2xl text-lg">{{__('user.user_no_question')}}</p>
        @endif
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
