@props([
    /** @var \mixed */
    'comments'
])

@foreach($comments as $comment)
    <article {{ $attributes->class(['slide-in mb-7 flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-10 rounded-xl']) }}
             aria-labelledby="{{$comment->slug}}">
        <div
                class="hover:bg-orange-100 relative flex mb-5 rounded-xl order-3 bg-white-100 p-3 border-2 border-orange-500 gap-2">
            <h3 id="{{$comment->slug}}" aria-level="3" role="heading"
                class="search-title first-letter:uppercase order-2 font-medium xl:text-xl">
                {{$comment->subject->subject}}
            </h3>
            @if($comment->subject->resolved)
                <svg class="xl:not-sr-only sr-only" xmlns="http://www.w3.org/2000/svg" width="25"
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
            <a class="cursor-pointer linkcard"
               href="/{{app()->getLocale()}}/forum/show/{{$comment->subject->slug}}">{{__('forum.see_subject') . $comment->subject->name}}</a>
        </div>
        <p class="first-letter:uppercase search-comment xl:leading-8 xl:mt-6 mt-4">
            {{$comment->content}}
        </p>
        <p class="text-green-500 font-medium xl:text-lg mt-4 mb-0.5 xl:mb-2">{{__('forum.latest_comment')}}</p>
        <div class="flex -order-1 items-center ">
            <div class="order-2 ml-2 mt-1 xl:ml-4 xl:mt-0">
                <p class="md:text-base sm:text-sm text-base uppercase self-end 2xl:text-lg"
                   >{{$comment->user->firstname}} {{$comment->user->name}} </p>
                <p class="md:text-base sm:text-sm self-end 2xl:text-lg">{{$comment->created_at-> format('d M. Y')}}</p>
            </div>
            <picture class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full">
                @if($comment->user->srcset && $comment->user->srcset['thumbnail'])
                    @foreach($comment->user->srcset['thumbnail'] as $size => $path)
                        <source media="(max-width: {{$size}}px)"
                                srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                        src="{{$comment->user->avatars && $comment->user->avatars['thumbnail'] ? '/' . $comment->user->avatars['tiny'] : '/'.$comment->user->avatar}}"
                        alt="{{$comment->user->title}}"
                        class="sr-only xl:not-sr-only order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full">
            </picture>
        </div>
        <div class="relative flex order-7 gap-1.5">
            <form
                    action="/{{app()->getLocale()}}/forum/{{$comment->subject->slug}}/comment/like/{{$comment->id}}"
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
            <p class="pt-1">{{$comment->user_like_count}}</p>
        </div>
    </article>
@endforeach
