@php
    $urlAction = "/".app()->getLocale()."/forum/index"
@endphp

<x-commons.navigation :page="$subject->subject"></x-commons.navigation>
<main id="content">
    <div class="flex flex-wrap items-center px-10 2xl:px-48 xl:px-32 lg:px-16 mt-20">
        <a href="/{{app()->getLocale()}}/forum/index"
           class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.forum')}}
        </a>
        <svg class="h-7 w-7 text-green-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>
            <polyline points="9 6 15 12 9 18"/>
        </svg>
        <a href="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}"
           class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{$subject->subject}}
        </a>
    </div>
    <section class="" aria-labelledby="sujetSection" id="sujet">
        @auth()
            @if(request()->has('delete-comment'))
                <div
                    class="delete-element fixed top-0 z-30 bg-green-200 w-full h-full flex items-center justify-center">
                    <div class="flex px-10 py-10 items-center flex-col rounded-lg bg-white-100">
                        <form class="flex items-center flex-col"
                              action="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}/comment/destroy/{{Request::query('delete-comment')}}"
                              method="post">
                            @csrf
                            <label class="text-green-500 text-lg font-medium mb-4 "
                                   for="delete">{{__('forum.verify_delete_label_comment')}}</label>
                            <div class="flex gap-x-10">
                                <a class="hover:text-orange-500 font-sans self-center text-green-700 text-xl font-semibold underline "
                                   href="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}#sujet">{{__('forum.button_back')}}</a>
                                <input
                                    class="text-white-100 bg-red-600 px-6 border-2 border-red-600 hover:bg-white-100 hover:text-red-600 py-2 rounded-lg text-xl font-sans font-semibold"
                                    name="delete" id="delete" type="submit" value="{{__('forum.value__delete')}}">
                            </div>
                        </form>
                    </div>
                </div>
            @endif
            @if(request()->has('delete-subject'))
                <div
                    class="delete-element fixed top-0 z-30 bg-green-200 w-full h-full flex items-center justify-center">
                    <div class="flex px-10 py-10 items-center flex-col rounded-lg bg-white-100">
                        <form class="flex items-center flex-col"
                              action="/{{app()->getLocale()}}/forum/subject/destroy/{{Request::query('delete-subject')}}"
                              method="post">
                            @csrf
                            <label class="text-green-500 text-lg font-medium mb-4"
                                   for="delete">{{__('forum.verify_delete_label')}}</label>
                            <div class="flex gap-x-10">
                                <a class="hover:text-orange-500 font-sans self-center text-green-700 text-xl font-semibold underline "
                                   href="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}#sujet">{{__('forum.button_back')}}</a>
                                <input
                                    class="text-white-100 bg-red-600 px-6 border-2 border-red-600 hover:bg-white-100 hover:text-red-600 py-2 rounded-lg text-xl font-sans font-semibold"
                                    name="delete" id="delete" type="submit" value="{{__('forum.value__delete')}}">
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        @endauth
        <div
            class="xl:px-32 lg:px-16 2xl:px-48 mt-20 px-10 flex flex-col md:flex-row gap-5 mb-7 justify-between xl:items-center">
            <div class="flex gap-5 md:max-w-lg xl:max-w-[50%] 2xl:max-w-full xl:mb-5 xl:items-center">
                <h2 role="heading" id="sujetSection" aria-level="2"
                    class="xl:text-4xl 2xl:text-5xl 3xl:max-w-[80%] 4xl:max-w-full md:text-2xl text-xl uppercase font-extrabold text-yellow-800 font-sans xl:leading-12">{{$subject->subject}}</h2>
                @if($subject->resolved)
                    <svg class="xl:not-sr-only sr-only -order-1" xmlns="http://www.w3.org/2000/svg" width="40"
                         viewBox="0 0 34.194 34.196">
                        <g data-name="Groupe 214" transform="translate(-875 -1773)">
                            <path data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                  d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                  transform="translate(873 1771)" fill="#da953a"/>
                            <path data-name="846e0b1f246b76024f36d97f9864a9c8"
                                  d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                  transform="translate(875.711 1774.888)" fill="#da953a"/>
                        </g>
                    </svg>
                    <svg class="xl:sr-only -order-1" xmlns="http://www.w3.org/2000/svg" width="60"
                         viewBox="0 0 34.194 34.196">
                        <g data-name="Groupe 214" transform="translate(-875 -1773)">
                            <path data-name="106780bf1ed9964c2ffe0eda53fe07ea"
                                  d="M31.186,7.009a17.1,17.1,0,1,0,0,24.179,17.094,17.094,0,0,0,0-24.179ZM28.775,28.775a13.678,13.678,0,1,1,4-9.677A13.678,13.678,0,0,1,28.775,28.775Z"
                                  transform="translate(873 1771)" fill="#da953a"/>
                            <path data-name="846e0b1f246b76024f36d97f9864a9c8"
                                  d="M27.269,7.394a1.623,1.623,0,0,0-2.305,0L12.87,19.5l-5.081-5.1a1.659,1.659,0,1,0-2.305,2.386l6.233,6.233a1.623,1.623,0,0,0,2.305,0L27.269,9.781a1.623,1.623,0,0,0,0-2.386Z"
                                  transform="translate(875.711 1774.888)" fill="#da953a"/>
                        </g>
                    </svg>
                @endif
            </div>
            <a class="hover:text-orange-500 xl:self-center flex font-sans xl:text-end text-green-700 md:text-xl xl:text-2xl font-semibold underline xl:px-4 xl:py-6 2xl:py-2 xl:self-end 2xl:self-start 2xl:text-3xl"
               href="/{{app()->getLocale()}}/forum/index">{{__('forum.single_back')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-5 ">
            <div class="lg:col-span-3 xl:pl-32 2xl:pl-48 xl:pr-14 lg:pr-7 px-10 mb-36">
                <div class="mb-24">
                    <div class="flex items-center gap-y-4 flex-wrap xl:gap-8">
                        <picture>
                            @if($subject->user->srcset && $subject->user->srcset['thumbnail'])
                                @foreach($subject->user->srcset['thumbnail'] as $size => $path)
                                    <source media="(max-width: {{$size}}px)"
                                            srcset="/{{$path}}">
                                @endforeach
                            @endif
                            <img
                                src="{{$subject->user->avatars && $subject->user->avatars['thumbnail'] ? '/' . $subject->user->avatars['thumbnail'] : '/'.$subject->user->avatar}}"
                                alt="{{$subject->user->title}}"
                                class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full">
                        </picture>
                        <div class="flex mr-4 sm:mr-0 flex-1 flex-col">
                            <a href="/{{app()->getLocale()}}/user/profile/{{$subject->user->slug}}"
                               class="hover:text-orange-500 uppercase xl:text-xl text-lg mb-2 2xl:text-2xl">{{$subject->user->firstname}} {{$subject->user->name}}</a>
                            <p class="xl:text-lg 2xl:text-xl">{{$subject->created_at->format('d M. Y')}}</p>
                        </div>
                        <div>
                            <p class="uppercase font-medium bg-orange-500/40 mb-3 mr-4 px-4 xl:px-6 pb-1 pt-1.5 rounded-lg md:text-lg text-green-700 xl:text-lg 2xl:text-xl">
                                {{ucwords($subject->tag->translation->where('locale',app()->getLocale())->first()->name)}}</p>
                            @if($subject->user->id === auth()->id())
                                <div class="flex justify-end pr-4">
                                    <a href="/{{app()->getLocale()}}/forum/question/modify/{{$subject->slug}}">
                                        <span class="sr-only">{{__('forum.value__modify')}}</span>
                                        <span><svg class="h-8 w-8 text-green-700" width="24" height="24"
                                                   viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                   fill="none" stroke-linecap="round" stroke-linejoin="round">  <path
                                                    stroke="none" d="M0 0h24v24H0z"/>  <path
                                                    d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"/>  <line
                                                    x1="13.5" y1="6.5" x2="17.5" y2="10.5"/></svg></span>
                                    </a>
                                    <a href="?delete-subject={{$subject->id}}#sujet">
                                        <span class="sr-only">{{__('forum.value__delete')}}</span>
                                        <span><svg class="h-8 w-8 text-red-500" width="24" height="24"
                                                   viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                   fill="none" stroke-linecap="round" stroke-linejoin="round">  <path
                                                    stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20"
                                                                                             y2="7"/>  <line x1="10"
                                                                                                             y1="11"
                                                                                                             x2="10"
                                                                                                             y2="17"/>  <line
                                                    x1="14" y1="11" x2="14" y2="17"/>  <path
                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>  <path
                                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/></svg></span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div
                        class="wysiwyg leading-8 md:leading-9 xl:leading-10 xl:text-xl 2xl:text-2xl 2xl:leading-12 md:text-lg xl:mt-7 mt-6">
                        {!!$subject->description!!}
                    </div>
                </div>
                <article class="flex flex-col gap-y-8 " aria-labelledby="add-comment">
                    <div class="flex md:flex-row flex-col justify-between xl:items-center">
                        <h3 id="add-comment" aria-level="3" role="heading"
                            class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-extrabold mb-3 text-yellow-800 font-sans ">{{__('forum.comment')}}</h3>
                        @auth()
                            <a class="hover:text-orange-500 xl:self-center flex font-sans xl:text-end text-green-700 md:text-xl xl:text-2xl font-semibold underline xl:px-4 xl:py-6 xl:self-end 2xl:text-3xl"
                               href="?add-comment#comment">{{__('forum.add_comment')}}</a>
                        @endauth
                    </div>
                    @auth()
                        @if(request()->has('add-comment'))
                            <div class="flex flex-col bg-yellow-100 py-6 px-10 rounded-xl">
                                <form action="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}" method="post"
                                      class="relative">
                                    @csrf
                                    <a class="hover:text-orange-500 absolute -top-6 right-1 font-sans text-end text-green-700 text-lg font-semibold underline px-4 py-6 self-end xl:text-xl 2xl:text-2xl"
                                       href="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}#comment">{{__('forum.button_back')}}</a>
                                    <div class="flex-col flex">
                                        <label class="text-green-500 text-lg xl:text-xl 2xl:text-2xl font-medium mb-4 "
                                               for="content">{{__('forum.label_comment')}}</label>
                                        @error('content')
                                        <div class="flex gap-1.5 items-center">
                                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                                        </div>
                                        @enderror
                                        <x-forms.tinymce-editor :name="'content'"
                                                                :placeholder="''">{!! old('content') !!}</x-forms.tinymce-editor>
                                    </div>
                                    <button type="submit"
                                            class="text-white-100 bg-green-700 px-6 mt-4 border-2 border-green-700 hover:bg-white-100 hover:text-green-700 py-2 rounded-lg text-xl xl:text-2xl  font-sans font-semibold">{{__('forum.value__add')}}</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                    @if($subject->comments_count === 0)
                        <p class="text-lg xl:text-xl 2xl:text-2xl">{{__('forum.no_comment')}}</p>
                    @else
                        @foreach($subject->comments as $comment)
                            <div id="{{$comment->slug}}"
                                 class="slide-in flex flex-col bg-yellow-100 py-3 px-5 xl:py-6 xl:px-10 rounded-xl">
                                @auth()
                                    @if(\Request::query('edit-comment')===$comment->slug)
                                        <div class="flex flex-col bg-yellow-100 rounded-xl mt-6">
                                            <form
                                                action="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}/comment/{{$comment->id}}"
                                                method="post"
                                                class="relative">
                                                @csrf
                                                <a class="hover:text-orange-500 absolute -top-6 right-1 font-sans text-end text-green-700 text-xl font-semibold underline px-4 py-6 self-end 2xl:text-2xl"
                                                   href="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}#comment">{{__('forum.button_back')}}</a>
                                                <div class="flex-col flex">
                                                    <label
                                                        class="text-green-500 text-lg xl:text-xl 2xl:text-2xl font-medium"
                                                        for="content">{{__('forum.label_modify')}}</label>
                                                    @error('content')
                                                    <div class="flex gap-1.5 items-center">
                                                        <svg class="h-7 w-7 text-red-500" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                        </svg>
                                                        <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                                                    </div>
                                                    @enderror
                                                    <x-forms.tinymce-editor :name="'content'"
                                                                            :placeholder="''">{!! old('content')?? $comment->content!!}</x-forms.tinymce-editor>
                                                </div>
                                                <button type="submit"
                                                        class="text-white-100 bg-green-700 px-6 mt-4 border-2 border-green-700 hover:bg-white-100 hover:text-green-700 py-2 rounded-lg text-xl font-sans font-semibold 2xl:text-2xl">{{__('forum.value__modify')}}</button>
                                            </form>
                                        </div>
                                    @endif
                                @elseguest()
                                    <div
                                        class="wysiwyg sm:leading-8 mt-3 sm:mt-6 leading-6 text-sm xl:text-base 2xl:text-lg sm:text-base">
                                        {!!$comment->content!!}
                                    </div>
                                @endauth
                                <div class="flex -order-1 justify-between ">
                                    @if($comment->user->id === auth()->id())
                                        <div class="flex">
                                            <a href="?edit-comment={{$comment->slug}}#{{$comment->slug}}">
                                                <span class="sr-only">{{__('forum.value__modify')}}</span>
                                                <span><svg class="h-8 w-8 text-green-700" width="24" height="24"
                                                           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                           fill="none" stroke-linecap="round" stroke-linejoin="round">  <path
                                                            stroke="none" d="M0 0h24v24H0z"/>  <path
                                                            d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"/>  <line
                                                            x1="13.5" y1="6.5" x2="17.5" y2="10.5"/></svg></span>

                                            </a>
                                            <a href="?delete-comment={{$comment->id}}#sujet">
                                                <span class="sr-only">{{__('forum.value__delete')}}</span>
                                                <span><svg class="h-8 w-8 text-red-500" width="24" height="24"
                                                           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                           fill="none" stroke-linecap="round" stroke-linejoin="round">  <path
                                                            stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7"
                                                                                                     x2="20" y2="7"/>  <line
                                                            x1="10" y1="11" x2="10" y2="17"/>  <line x1="14" y1="11"
                                                                                                     x2="14" y2="17"/>  <path
                                                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>  <path
                                                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/></svg></span>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="flex -order-1 items-center">
                                        <div class="order-2 sm:ml-2 xl:ml-4">
                                            <a href="/{{app()->getLocale()}}/user/profile/{{$comment->user->slug}}"
                                               class="hover:text-orange-500 uppercase md:text-base sm:text-sm self-end 2xl:text-lg">{{$comment->user->firstname}} {{$comment->user->name}}</a>
                                            <p class="md:text-base sm:text-sm self-end 2xl:text-lg">{{$comment->created_at->format('d M. Y')}}</p>
                                        </div>
                                        <picture>
                                            @if($comment->user->srcset && $comment->user->srcset['thumbnail'])
                                                @foreach($comment->user->srcset['thumbnail'] as $size => $path)
                                                    <source media="(max-width: {{$size}}px)"
                                                            srcset="/{{$path}}">
                                                @endforeach
                                            @endif
                                            <img
                                                src="{{$comment->user->avatars && $comment->user->avatars['thumbnail'] ? '/' . $comment->user->avatars['thumbnail'] : '/'.$comment->user->avatar}}"
                                                alt="{{$comment->user->title}}"
                                                class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full">
                                        </picture>
                                    </div>
                                </div>
                                <div class="flex gap-20 mt-4">
                                    <div class="relative flex order-7 gap-1.5">
                                        <form
                                            action="/{{app()->getLocale()}}/forum/show/{{$subject->slug}}/comment/like/{{$comment->id}}"
                                            method="post">
                                            @csrf
                                            <label class="sr-only" for="like{{$comment->id}}">Liker</label>
                                            <button name="like" id="like{{$comment->id}}" type="submit">
                                                <span class="sr-only">Liker</span>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                         viewBox="0 0 24.998 25">
                                                        <path
                                                            data-name="55875de67f0001d7695d7cadee652fba"
                                                            d="M26.125,12.1a3.75,3.75,0,0,0-2.875-1.35h-5.7l.7-1.787A5.162,5.162,0,0,0,13.387,2a1.25,1.25,0,0,0-1.137.737L8.687,10.75H5.75A3.75,3.75,0,0,0,2,14.5v8.75A3.75,3.75,0,0,0,5.75,27H21.662a3.75,3.75,0,0,0,3.687-3.075l1.587-8.75A3.75,3.75,0,0,0,26.125,12.1ZM8.25,24.5H5.75A1.25,1.25,0,0,1,4.5,23.25V14.5a1.25,1.25,0,0,1,1.25-1.25h2.5ZM24.5,14.725l-1.587,8.75a1.25,1.25,0,0,1-1.25,1.025H10.75V12.262l3.4-7.65a2.637,2.637,0,0,1,1.725,3.475l-.663,1.787A2.5,2.5,0,0,0,17.55,13.25h5.7a1.276,1.276,0,0,1,1.25,1.475Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                    </svg>
                                                </span>
                                            </button>
                                        </form>
                                        <p class="pt-1 xl:pt-0 xl:text-lg 2xl:text-xl">{{$comment->user_like_count}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </article>
            </div>
            <x-aside_forum :urlAction="$urlAction" :latests="$latests" :ratings="$ratings"></x-aside_forum>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>

