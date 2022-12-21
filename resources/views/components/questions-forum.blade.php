@props([
    'subjects',
    'latests',
    'ratings'
])

<article {{ $attributes->class(['px-7 pt-20 mt-24 xl:mt-40 bg-yellow-600 xl:px-30 lg:px-16 2xl:px-48 pb-28']) }} aria-labelledby="questions">
    <div class="flex flex-col xl:mt-20 md:flex-row xl:mb-24 mb-12">
        <h2 class="text-2xl md:text-3xl md:max-w-xl md:leading-10 mb-6 xl:text-4xl xl:max-w-[50%] 2xl:max-w-full uppercase font-bold xl:mb-12 font-sans xl:leading-12" role="heading" aria-level="2"
            id="questions">{{__('home.forum_title')}}</h2>
        <a class="hover:text-orange-500 font-sans  text-green-700  font-semibold underline flex-1 md:text-xl lg:text-end xl:text-3xl"
           href="/{{app()->getLocale()}}/forum/index">{{__('home.forum_link')}}</a>
    </div>
    <div class="lg:grid lg:grid-cols-5 lg:justify-between">
        <div class="lg:col-span-3 mb-10 sm:mb-16 flex flex-col gap-y-4 lg:gap-y-8 lg:pr-14 lg:border-r-2 border-r-orange-500/40">
            @foreach($subjects as $subject)
                <article class="group hover:bg-orange-100 bg-white-100 p-2 sm:p-4 relative flex xl:p-6 rounded-xl"
                         aria-labelledby="{{$subject->slug}}">
                    <div class="order-2 flex-1 flex flex-col xl:ml-4 justify-center gap-y-2 xl:gap-4">
                        <div class="flex flex-col  xl:gap-4">
                            <div class="flex gap-2">
                                <h3 class="order-2 font-medium text-lg xl:text-xl"
                                    id="{{$subject->slug}}"
                                    role="heading"
                                    aria-level="3">{{$subject->subject}}</h3>
                                @if($subject->resolved)
                                    <svg class="xl:not-sr-only sr-only" xmlns="http://www.w3.org/2000/svg" width="25"
                                         viewBox="0 0 34.194 34.196">
                                        <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                            <path id="_106780bf1ed9964c2ffe0eda53fe07ea"
                                                  data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                  d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                  transform="translate(873 1771)" fill="#da953a"/>
                                            <path id="_846e0b1f246b76024f36d97f9864a9c8"
                                                  data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                  d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                  transform="translate(875.711 1774.888)" fill="#da953a"/>
                                        </g>
                                    </svg>
                                    <svg class="xl:sr-only" xmlns="http://www.w3.org/2000/svg" width="20"
                                         viewBox="0 0 34.194 34.196">
                                        <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                            <path id="_106780bf1ed9964c2ffe0eda53fe07ea"
                                                  data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                  d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                  transform="translate(873 1771)" fill="#da953a"/>
                                            <path id="_846e0b1f246b76024f36d97f9864a9c8"
                                                  data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                  d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                  transform="translate(875.711 1774.888)" fill="#da953a"/>
                                        </g>
                                    </svg>
                                @endif
                            </div>
                            <div class="flex -order-2 relative justify-between xl:justify-between">
                                <p class="md:text-base sm:text-sm text-base uppercase self-end ">{{$subject->user->firstname}} {{$subject->user->name}}</p>
                                <p class="md:text-base sm:text-sm self-end">{{$subject->created_at->translatedFormat('d M Y')}}</p>
                            </div>
                        </div>
                        <div class="order-3 flex flex-row justify-between">
                            <div class="flex gap-4 items-center">
                                <p class="md:text-base text-sm uppercase font-medium bg-orange-500/40 mr-4 px-3 xl:px-6 pb-1 pt-1.5 rounded-lg text-green-700">
                                    {{ucwords($subject->tag->translation->where('locale', app()->getLocale())->first()->name)}}</p>
                                <p class="md:text-lg sm:text-base">{{__('forum.number_comment').$subject->comments_count}}</p>
                            </div>
                            <a class="linkcard underline text-green-700 font-sans font-semibold" href="/{{app()->getLocale()}}/forum/{{$subject->slug}}">{{__('forum.see_subject') . $subject->subject}}</a>
                            <svg class="mr-4 sr-only sm:not-sr-only sm:self-end group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
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
                    <img class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                         src="https://placehold.jp/115x115.png"
                         alt="Nom">
                </article>
            @endforeach
        </div>
        <div class="col-span-2 flex flex-col sm:gap-y-6 lg:pl-14">
            <article class="lg:border-t-0 border-b-orange-500/40 border-t-2 border-t-orange-500/40 border-b-2 pb-10 pt-10 lg:pt-0" aria-labelledby="latest">
                <h3 id="latest" aria-level="3" role="heading"
                    class="text-xl md:text-2xl xl:text-3xl font-light text-green-700 underline mb-6">{{__('forum.latest_subject')}}</h3>
                <div class="flex flex-col gap-y-4 sm:gap-y-8">
                    @foreach($latests as $latest)
                        <article class="hover:bg-orange-100 group bg-white-100 relative flex p-2 sm:p-4 xl:p-6 rounded-xl"
                                 aria-labelledby="{{$latest->slug}}">
                            <div class="order-2 flex-1 flex flex-col xl:ml-4 justify-center gap-y-2 xl:gap-4">
                                <div class="flex-col flex xl:gap-4">
                                    <div class="flex gap-2">
                                    <h4 class="order-2 font-medium sm:text-lg xl:text-xl" id="{{$latest->slug}}"
                                        role="heading"
                                        aria-level="4">{{$latest->subject}}</h4>
                                    @if($latest->resolved)
                                        <svg class="xl:not-sr-only sr-only" xmlns="http://www.w3.org/2000/svg" width="25"
                                             viewBox="0 0 34.194 34.196">
                                            <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                                <path id="_106780bf1ed9964c2ffe0eda53fe07ea"
                                                      data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                      d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                      transform="translate(873 1771)" fill="#da953a"/>
                                                <path id="_846e0b1f246b76024f36d97f9864a9c8"
                                                      data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                      d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                      transform="translate(875.711 1774.888)" fill="#da953a"/>
                                            </g>
                                        </svg>
                                        <svg class="xl:sr-only" xmlns="http://www.w3.org/2000/svg" width="20"
                                             viewBox="0 0 34.194 34.196">
                                            <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                                <path id="_106780bf1ed9964c2ffe0eda53fe07ea"
                                                      data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                      d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                      transform="translate(873 1771)" fill="#da953a"/>
                                                <path id="_846e0b1f246b76024f36d97f9864a9c8"
                                                      data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                      d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                      transform="translate(875.711 1774.888)" fill="#da953a"/>
                                            </g>
                                        </svg>
                                    @endif
                                    </div>
                                    <div class="flex -order-2 relative justify-between">
                                        <p class="sm:text-sm md:text-base uppercase self-end">{{$latest->user->firstname}} {{$latest->user->name}} </p>
                                        <p class="sm:text-sm md:text-base self-end">{{$latest->created_at->translatedFormat('d M Y')}}</p>
                                    </div>
                                </div>
                                <div class="order-3 flex justify-between">
                                    <div class="flex gap-4">
                                        <p class=" font-medium bg-orange-500/40 mr-4 px-3 xl:px-6 pb-1 pt-1.5 rounded-lg text-sm md:text-base uppercase text-green-700">
                                            {{ucwords($latest->tag->translation->where('locale', app()->getLocale())->first()->name)}}</p>
                                    </div>
                                    <a class="linkcard underline text-green-700 font-sans font-semibold"
                                       href="/{{app()->getLocale()}}/forum/{{$latest->slug}}">{{__('forum.see_subject')}}</a>
                                    <svg class="mr-4 sr-only sm:not-sr-only sm:self-end group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
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
                        </article>
                    @endforeach
                </div>
            </article>
            <article class="pb-10 mt-8" aria-labelledby="best-rating">
                <h3 id="best-rating" aria-level="3" role="heading"
                    class="text-xl md:text-2xl xl:text-3xl font-light text-green-700 underline mb-6">{{__('forum_aside.rating')}}</h3>
                <div class="flex flex-col gap-y-8">
                    @foreach($ratings as $rating)
                        <article class="hover:bg-orange-100 group bg-white-100 relative flex p-2 sm:p-4 xl:p-6 rounded-xl"
                                 aria-labelledby="{{$rating->slug}}">
                            <div class="order-2 flex-1 flex flex-col xl:ml-4 justify-center gap-y-2 xl:gap-4">
                                <div class="flex-col flex xl:gap-4">
                                    <div class="flex gap-2">
                                        <h4 class="order-2 font-medium sm:text-lg xl:text-xl" id="{{$rating->slug}}"
                                            role="heading"
                                            aria-level="4">{{$rating->subject}}</h4>
                                        @if($rating->resolved)
                                            <svg class="xl:not-sr-only sr-only" xmlns="http://www.w3.org/2000/svg" width="25"
                                                 viewBox="0 0 34.194 34.196">
                                                <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                                    <path id="_106780bf1ed9964c2ffe0eda53fe07ea"
                                                          data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                          d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                          transform="translate(873 1771)" fill="#da953a"/>
                                                    <path id="_846e0b1f246b76024f36d97f9864a9c8"
                                                          data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                          d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                          transform="translate(875.711 1774.888)" fill="#da953a"/>
                                                </g>
                                            </svg>
                                            <svg class="xl:sr-only" xmlns="http://www.w3.org/2000/svg" width="20"
                                                 viewBox="0 0 34.194 34.196">
                                                <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                                                    <path id="_106780bf1ed9964c2ffe0eda53fe07ea"
                                                          data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                                          d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                                          transform="translate(873 1771)" fill="#da953a"/>
                                                    <path id="_846e0b1f246b76024f36d97f9864a9c8"
                                                          data-name="846e0b1f246b76024f36d97f9864a9c8"
                                                          d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                                          transform="translate(875.711 1774.888)" fill="#da953a"/>
                                                </g>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="flex -order-2 relative justify-between">
                                        <p class="sm:text-sm md:text-base uppercase self-end">{{$rating->user->firstname}} {{$rating->user->name}} </p>
                                        <p class="sm:text-sm md:text-base self-end">{{$rating->created_at->translatedFormat('d M Y')}}</p>
                                    </div>
                                </div>
                                <div class="order-3 flex justify-between">
                                    <div class="flex gap-4">
                                        <p class=" font-medium bg-orange-500/40 mr-4 px-3 xl:px-6 pb-1 pt-1.5 rounded-lg text-sm md:text-base uppercase text-green-700">
                                            {{ucwords($rating->tag->translation->where('locale', app()->getLocale())->first()->name)}}</p>
                                    </div>
                                    <a class="linkcard underline text-green-700 font-sans font-semibold"
                                       href="/{{app()->getLocale()}}/forum/{{$rating->slug}}">{{__('forum.see_subject')}}</a>
                                    <svg class="mr-4 sr-only sm:not-sr-only sm:self-end group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
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
                        </article>
                    @endforeach
                </div>
            </article>
        </div>
    </div>
</article>
