@php
    $urlAction = "/".app()->getLocale()."/forum/my-talks"
@endphp

<x-commons.navigation :page="__('forum.my_talks')"></x-commons.navigation>
<main id="content">
    <x-recurrent_questions :recurrings="$recurrings"></x-recurrent_questions>
    <section class="mt-20" aria-labelledby="forum">
        <div class="px-10 xl:px-32 lg:px-16 2xl:px-48 flex justify-between mb-8 xl:mb-24 items-center">
            <h2 id="forum" aria-level="2" role="heading"
                class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('forum.index_title')}}</h2>
            @auth()
                <a href="/{{app()->getLocale()}}/forum/question"
                   class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold mt-4 xl:mt-0 xl:max-w-[27%]">{{__('forum.add_question')}}</a>
            @endauth
        </div>
        <x-sort_by_forum :urlAction="$urlAction" :status="$status" :tags="$tags" :created="$created"
                         class="2xl:px-48 px-10 xl:px-32 lg:px-16 mb-14"></x-sort_by_forum>
        <div class="flex items-start md:flex-row flex-col xl:gap-32 mb-12 px-10 2xl:px-48 xl:px-32 lg:px-16">
            <a class="xl:text-xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold  font-sans  px-5 py-2"
               href="/{{app()->getLocale()}}/forum/index#forum">{{__('forum.latest_subject')}}</a>
            <a class="xl:text-xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/forum/latest-answers#forum">{{__('forum.latest_answer')}}</a>
            <a class="xl:text-xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold  font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/forum/my-subject#forum">{{__('forum.my_subject')}}</a>
            <a class="xl:text-xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold rounded-lg bg-orange-100 font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/forum/my-talks#forum">{{__('forum.my_talks')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-5 xl:gap-24 mb-36">
            <div class="col-span-3 flex flex-col gap-y-8 xl:pr-14 2xl:px-48 xl:px-32 lg:px-16 lg:pr-7 px-10 ">
                @auth()
                    @if(count($comments)===0)
                        <p>Vous n'avez aucun sujet</p>
                    @else
                        @foreach($comments as $comment)
                            <article class="flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-10 rounded-xl"
                                     aria-labelledby="{{$comment->slug}}">
                                <div
                                    class="hover:bg-orange-100 relative flex mb-5 rounded-xl order-3 bg-white-100 p-3 border-2 border-orange-500 gap-2">
                                    <h3 id="{{$comment->subject->slug}}" aria-level="3" role="heading"
                                        class="order-2 font-medium xl:text-xl">
                                        {{$comment->subject->subject}}
                                    </h3>
                                    @if($comment->subject->resolved)
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
                                    <a class="cursor-pointer linkcard"
                                       href="/{{app()->getLocale()}}/forum/{{$comment->subject->slug}}">{{__('forum.see_subject') . $comment->subject->name}}</a>
                                </div>
                                <p class="xl:leading-8 xl:mt-6 mt-4">
                                    {{$comment->content}}
                                </p>
                                <p class="text-green-500 font-medium xl:text-lg mt-4 mb-0.5 xl:mb-2">{{__('forum.latest_comment')}}</p>
                                <div class="flex -order-1 items-center ">
                                    <div class="order-2 ml-2 mt-1 xl:ml-4 xl:mt-0">
                                        <p class="text-base xl:text-base uppercase">{{$comment->user->firstname}} {{$comment->user->name}}</p>
                                        <p class="xl:text-base">{{$comment->created_at-> format('d M. Y')}}</p>
                                    </div>
                                    <img
                                        class="xl:sr-only order-1 row-span-3 order-1 justify-self-center row-span-2  rounded-full"
                                        src="https://placehold.jp/75x75.png"
                                        alt="Nom">

                                    <img
                                        class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2  rounded-full"
                                        src="https://placehold.jp/98x98.png"
                                        alt="Nom">
                                </div>
                                <div class="relative flex order-7 gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24.998 25">
                                        <path id="_55875de67f0001d7695d7cadee652fba"
                                              data-name="55875de67f0001d7695d7cadee652fba"
                                              d="M26.125,12.1a3.75,3.75,0,0,0-2.875-1.35h-5.7l.7-1.787A5.162,5.162,0,0,0,13.387,2a1.25,1.25,0,0,0-1.137.737L8.687,10.75H5.75A3.75,3.75,0,0,0,2,14.5v8.75A3.75,3.75,0,0,0,5.75,27H21.662a3.75,3.75,0,0,0,3.687-3.075l1.587-8.75A3.75,3.75,0,0,0,26.125,12.1ZM8.25,24.5H5.75A1.25,1.25,0,0,1,4.5,23.25V14.5a1.25,1.25,0,0,1,1.25-1.25h2.5ZM24.5,14.725l-1.587,8.75a1.25,1.25,0,0,1-1.25,1.025H10.75V12.262l3.4-7.65a2.637,2.637,0,0,1,1.725,3.475l-.663,1.787A2.5,2.5,0,0,0,17.55,13.25h5.7a1.276,1.276,0,0,1,1.25,1.475Z"
                                              transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>
                                    <p class="pt-1">{{$comment->like}}</p>
                                </div>
                            </article>
                        @endforeach
                    @endif
                    {{$comments->withQueryString()->links()}}
                @endauth
            </div>
            <x-aside_forum :urlAction="$urlAction" :latests="$latests" :ratings="$ratings"></x-aside_forum>        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
