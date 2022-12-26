@props([
    'tuto_ref',
    'tutoUserConnect',
    'tuto'
])
<article
    {{ $attributes->class(['group  relative py-6 px-8 rounded-3xl']) }} aria-labelledby="{{$tuto_ref->slug}}">
    <div class="flex justify-between">
        <div class="flex-1 flex justify-between">
            <h3 id="{{$tuto_ref->slug}}" aria-level="3" role="heading" class="hover-within:text-orange-500 text-lg font-medium xl:text-2xl mb-1.5">
                <a class="hover:text-orange-500"
                   href="{{$tuto_ref->link}}">{{$tuto_ref->name}}</a>
                </h3>
        </div>
        @auth()
                @if($tuto->user->where('id', auth()->user()->id)->first())
                    <form action="/{{app()->getLocale()}}/technical/tuto/favorite/{{$tuto_ref->tuto_id}}" method="post">
                        @csrf
                        <button type="submit" class="flex">
                            <span class="sr-only">{{__('Enlever des favoris')}}</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="30px" fill="#da953a"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/></svg>
                    </span>
                        </button>
                    </form>
                @else
                    <form action="/{{app()->getLocale()}}/technical/tuto/favorite/{{$tuto_ref->tuto_id}}" method="post">
                        @csrf
                        <button type="submit" class="flex">
                            <span class="sr-only">{{__('Mettre en favoris')}}</span>
                            <span>
                               <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="30px" fill="#da953a"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>
                    </span>
                        </button>
                    </form>
                @endif
        @endauth
    </div>
    <p class="mb-2.5 xl:mb-6 xl:text-lg">{{$tuto_ref->excerpt}}</p>
    <div class="flex justify-between">
        <div class="flex gap-5 items-center">
            <p class="text-orange-500 font-sans xl:text-lg font-medium">{{ucwords($tuto_ref->languages)}}</p>
            <p>{{ucwords($tuto_ref->created_at->translatedFormat('d F Y'))}}</p>
        </div>
        <svg class="mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
             viewBox="0 0 32 27.417">
            <path
                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                transform="translate(-19 -8.001)" fill="#4e6458"/>
        </svg>
    </div>
</article>
