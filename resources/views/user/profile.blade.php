<x-commons.navigation :page="$user->firstname .' '.$user->name"></x-commons.navigation>
<main id="content">
    <section class="flex flex-col relative mb-32" aria-labelledby="name">
        <div class="relative">
            <div
                class="flex items-center justify-self-end sm:mt-24 md:mt-36 lg:mt-52 xl:mt-80 2xl:mt-96 px-10 lg:px-16 xl:px-32 2xl:px-48">
                <div class="order-2 flex-1 ml-8 mt-32">
                    <div>
                        <h2 role="heading" id="name" aria-level="2"
                            class="xl:text-4xl md:text-3xl text-2xl text-yellow-800 font-extrabold font-sans mb-3">{{$user->firstname}} {{$user->name}}</h2>
                        <p class="uppercase text-2xl">{{$user->status->translation->where('locale',app()->getLocale())->first()->name}}</p>
                    </div>
                        <div class="text-end">
                            <a href="/{{app()->getLocale()}}/user/profile/modify/form"
                               class="border-2 border-green-700 hover:text-green-700 hover:bg-white-100 font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-lg md:text-xl xl:text-2xl font-semibold mb-32">{{__('user.user_modify')}}</a>
                        </div>
                </div>
                <img class="rounded-full md:w-1/4 xl:w-1/4" src="{{str_contains($user->avatar,'http')? $user->avatar : '/'.$user->avatar}}" alt="">
            </div>
            <img class="absolute -z-10 top-0 bottom-0 left-0 right-0"
                 src="{{str_contains($user->back_image,'http')? $user->back_image : '/'.$user->back_image}}" alt="">
        </div>
    </section>
    <article class="bg-yellow-600 px-10 lg:px-16 xl:px-32 2xl:px-48 pb-36 pt-20" aria-labelledby="tutos">
        <div class="flex justify-between">
            <h2 role="heading" id="tutos" aria-level="2"
                class="xl:text-4xl text-2xl md:text-3xl uppercase font-extrabold font-sans mb-20">{{__('user.user_favorite_auth')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 text-lg md:text-xl xl:text-3xl font-semibold underline px-4"
               href="/{{app()->getLocale()}}/technical/tuto">{{__('user.tuto_back')}}</a>
        </div>
        <div class="mt-12 grid grid-cols-2 gap-x-24 gap-y-8">
            @foreach($tutos as $tuto_ref)
                <article class="group hover:bg-orange-100 bg-white-100 relative flex flex-col py-6 px-8 rounded-3xl"
                         aria-labelledby="{{$tuto_ref->slug}}">
                    <div class="flex justify-between">
                        <div class="flex-1 flex justify-between">
                            <h3 id="{{$tuto_ref->translation->where('locale',app()->getLocale())->first()->slug}}"
                                aria-level="3" role="heading"
                                class="hover-within:text-orange-500 text-lg font-medium xl:text-2xl mb-1.5">
                                {{$tuto_ref->translation->where('locale',app()->getLocale())->first()->name}}
                            </h3>
                        </div>
                            <form
                                action="/{{app()->getLocale()}}/technical/tuto/favorite/{{$tuto_ref->translation->where('locale',app()->getLocale())->first()->tuto_id}}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="flex">
                                    <span class="sr-only">{{__('Enlever des favoris')}}</span>
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24"
                                         width="30px"
                                         fill="#da953a"><path d="M0 0h24v24H0z" fill="none"/><path
                                            d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                                    </svg>
                                    </span>
                                </button>
                            </form>
                    </div>
                    <div class="mb-2.5 xl:mb-6 xl:text-lg">{!!$tuto_ref->translation->where('locale',app()->getLocale())->first()->excerpt!!}</div>
                    <div class="flex justify-between flex-1 justify-end">
                        <div class="flex gap-5 flex-1 self-end items-center">
                            <p class="text-orange-500 font-sans xl:text-lg font-medium">{{ucwords($tuto_ref->translation->where('locale',app()->getLocale())->first()->languages)}}</p>
                            <p>{{ucwords($tuto_ref->translation->where('locale',app()->getLocale())->first()->created_at->translatedFormat('d F Y'))}}</p>
                        </div>
                        <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                           href="{{$tuto_ref->translation->where('locale',app()->getLocale())->first()->link}}">{{__('tuto_ref.tuto_ref_do')}}</a>
                        <svg class="mr-4 group-hover:mr-0 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
            @endforeach
            @if(count($tutos) === 0)
                <p>{{__('user.user_no_favorite')}}</p>
            @endif
        </div>
    </article>
    <section class="px-10 lg:px-16 xl:px-32 2xl:px-48 mt-36 mb-36" aria-labelledby="questions">
        <h2 role="heading" id="questions" aria-level="2"
            class="text-4xl text-yellow-800 uppercase font-extrabold font-sans mb-20">{{__('user.user_question_title_auth')}}</h2>
        <div class="col-span-3 flex flex-col gap-y-8 xl:pr-14 ">
            @foreach($subjects as $subject)
                <article
                    class="group hover:bg-orange-100 bg-yellow-100 relative flex p-6 lg:px-3 xl:px-6 max-w-[65%] rounded-xl"
                    aria-labelledby="{{$subject->slug}}">
                    <div class="order-2 flex-1 flex flex-col lg:ml-4 justify-center gap-2.5 xl:gap-4">
                        <div class="flex flex-col gap-4">
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
                            <div class="flex relative -order-2 justify-between">
                                <p class="text-base uppercase self-end">{{$subject->user->firstname}} {{$subject->user->name}}</p>
                                <p class="text-base self-end">{{$subject->created_at->format('d M. Y')}}</p>
                            </div>
                        </div>
                        <div class="order-3 flex justify-between">
                            <div class="flex gap-4 items-center">
                                <p class="text-base uppercase font-medium bg-orange-500/40 mr-4 px-6 pb-1 pt-1.5 rounded-lg text-lg text-green-700">
                                    {{ucwords($subject->tag->translation->where('locale',app()->getLocale())->first()->name)}}</p>
                                <p class="sr-only xl:not-sr-only text-lg"> {{__('forum.number_comment') . $subject->comments_count}}</p>
                            </div>
                            <a class="linkcard underline text-green-700 font-sans font-semibold"
                               href="/{{app()->getLocale()}}/forum/{{$subject->slug}}">{{__('forum.see_subject')}}</a>
                            <svg class="group-hover:mr-0 mr-4 xl:self-end " xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#4e6458"/>
                            </svg>
                        </div>
                    </div>
                    <img
                        class="sr-only lg:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                        src="{{str_contains($user->avatar_thumb,'http')? $user->avatar_thumb : '/'.$user->avatar_thumb}}"
                        alt="{{$user->slug}}">
                </article>
            @endforeach
        </div>
        @if(count($subjects)===0)
            <p>{{__('user.user_no_question')}}</p>
        @endif
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
