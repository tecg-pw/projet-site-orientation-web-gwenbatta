<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="mt-20" aria-labelledby="sujet">
        <div class="xl:px-36 2xl:px-48 px-10 flex flex-col md:flex-row gap-5 mb-7 justify-between xl:items-center">
            <div class="flex gap-5 md:max-w-lg 2xl:max-w-full xl:mb-5 xl:items-center">
                <h2 role="heading" id="sujet" aria-level="2"
                    class="xl:text-4xl 2xl:max-w-full  md:text-2xl text-xl uppercase font-extrabold text-yellow-800 font-sans xl:leading-12 xl:max-w-xl">{{$subject->subject}}</h2>
                @if($subject->resolved)
                    <svg class="xl:not-sr-only sr-only -order-1" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 34.194 34.196">
                        <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                            <path id="_106780bf1ed9964c2ffe0eda53fe07ea" data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                  d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                  transform="translate(873 1771)" fill="#da953a"/>
                            <path id="_846e0b1f246b76024f36d97f9864a9c8" data-name="846e0b1f246b76024f36d97f9864a9c8"
                                  d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                  transform="translate(875.711 1774.888)" fill="#da953a"/>
                        </g>
                    </svg>
                    <svg class="xl:sr-only -order-1" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 34.194 34.196">
                        <g id="Groupe_214" data-name="Groupe 214" transform="translate(-875 -1773)">
                            <path id="_106780bf1ed9964c2ffe0eda53fe07ea" data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                  d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                  transform="translate(873 1771)" fill="#da953a"/>
                            <path id="_846e0b1f246b76024f36d97f9864a9c8" data-name="846e0b1f246b76024f36d97f9864a9c8"
                                  d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                  transform="translate(875.711 1774.888)" fill="#da953a"/>
                        </g>
                    </svg>
                @endif
            </div>
            <a class="hover:text-orange-500 xl:self-center flex font-sans xl:text-end text-green-700 md:text-xl xl:text-2xl font-semibold underline xl:px-4 xl:py-6 2xl:py-2 xl:self-end 2xl:self-start"
               href="/{{app()->getLocale()}}/forum/index">{{__('forum.single_back')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-5 mb-36">
            <div class="xl:col-span-3 xl:pl-36 2xl:pl-48 xl:pr-14 px-10">
                <div class="mb-24">
                    <div class="flex items-center gap-y-4 flex-wrap xl:gap-8">
                        <img class="xl:not-sr-only sr-only -order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">
                        <img class="xl:sr-only -order-1 mr-4 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/84x84.png"
                             alt="Nom">
                        <div class="flex mr-4 sm:mr-0 flex-1 flex-col">
                            <p class="xl:text-xl text-lg mb-2">{{$subject->user->firstname}} {{$subject->user->name}}</p>
                            <p>{{$subject->created_at->format('d M. Y')}}</p>
                        </div>
                        <p class="uppercase font-medium bg-orange-500/40 mr-4 px-4 xl:px-6 pb-1 pt-1.5 rounded-lg md:text-lg text-green-700">
                            {{ucwords($subject->tag->translation->where('locale',app()->getLocale())->first()->name)}}</p>
                    </div>
                    <p class="leading-8 md:leading-9 xl:leading-10 md:text-lg xl:mt-7 mt-6">
                        {{$subject->description}}
                    </p>
                </div>
                <article class="flex flex-col gap-y-8 " aria-labelledby="add-comment">
                    <div class="flex md:flex-row flex-col justify-between xl:items-center">
                        <h3 id="add-comment" aria-level="3" role="heading"
                            class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold mb-3 text-yellow-800 font-sans ">{{__('forum.comment')}}</h3>
                        @auth()
                            <a class="hover:text-orange-500 xl:self-center flex font-sans xl:text-end text-green-700 md:text-xl xl:text-2xl font-semibold underline xl:px-4 xl:py-6 xl:self-end"
                               href="?add-comment#comment">{{__('forum.add_comment')}}</a>
                        @endauth
                    </div>
                    @if(request()->has('add-comment'))
                        <div class="flex flex-col bg-yellow-100 py-6 px-10 rounded-xl">
                            <form action="/" method="post" class="relative">
                                @csrf
                                <a class="hover:text-orange-500 absolute -top-6 right-1 font-sans text-end text-green-700 text-xl font-semibold underline px-4 py-6 self-end"
                                   href="/{{app()->getLocale()}}/forum/{{$subject->slug}}#comment">{{__('forum.button_back')}}</a>
                                <label class="text-green-500 text-lg font-medium"
                                       for="comment">{{__('forum.label_comment')}}</label>
                                <textarea class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 mt-4 rounded-xl border-2 border-orange-500" name="comment" id="comment"
                                          cols="75" rows="7"></textarea>
                                <input type="submit" value="{{__('forum.value__add')}}" class="text-white-100 bg-green-700 px-6 border-2 border-green-700 hover:bg-white-100 hover:text-green-700 py-2 rounded-lg text-xl font-sans font-semibold">
                            </form>
                        </div>
                    @endif
                    @if($subject->comments_count === 0)
                      <p>{{__('forum.no_comment')}}</p>
                    @else
                        @foreach($subject->comments as $comment)
                            <div id="{{$comment->slug}}" class="flex flex-col bg-yellow-100 py-3 px-5 xl:py-6 xl:px-10 rounded-xl">
                                <p class="sm:leading-8 mt-3 sm:mt-6 leading-6 text-sm sm:text-base">
                                    {{$comment->content}}
                                </p>
                                <div class="flex -order-1 items-center ">
                                    <div class="order-2 sm:ml-2 xl:ml-4">
                                        <p class="text-lg uppercase">{{$comment->user->firstname}} {{$comment->user->name}}</p>
                                        <p class="">{{$comment->created_at->format('d M. Y')}}</p>
                                    </div>
                                    <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 sr-only sm:not-sr-only xl:w-[98px] sm:w-[78px] rounded-full" width="98"
                                         src="{{$comment->user->avatar}}"
                                         alt="{{$comment->user->firstname}} {{$comment->user->name}}">
                                </div>
                                <div class="flex gap-20 mt-4">
                                    <div class="relative flex order-7 gap-1.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24.998 25">
                                            <path id="_55875de67f0001d7695d7cadee652fba"
                                                  data-name="55875de67f0001d7695d7cadee652fba"
                                                  d="M26.125,12.1a3.75,3.75,0,0,0-2.875-1.35h-5.7l.7-1.787A5.162,5.162,0,0,0,13.387,2a1.25,1.25,0,0,0-1.137.737L8.687,10.75H5.75A3.75,3.75,0,0,0,2,14.5v8.75A3.75,3.75,0,0,0,5.75,27H21.662a3.75,3.75,0,0,0,3.687-3.075l1.587-8.75A3.75,3.75,0,0,0,26.125,12.1ZM8.25,24.5H5.75A1.25,1.25,0,0,1,4.5,23.25V14.5a1.25,1.25,0,0,1,1.25-1.25h2.5ZM24.5,14.725l-1.587,8.75a1.25,1.25,0,0,1-1.25,1.025H10.75V12.262l3.4-7.65a2.637,2.637,0,0,1,1.725,3.475l-.663,1.787A2.5,2.5,0,0,0,17.55,13.25h5.7a1.276,1.276,0,0,1,1.25,1.475Z"
                                                  transform="translate(-2 -2)" fill="#da953a"/>
                                        </svg>
                                        <p class="pt-1">{{$comment->like}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </article>
            </div>
            <x-aside_forum :latests="$latests" :ratings="$ratings"></x-aside_forum>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>

