@props([
    'tuto_ref',
    'tuto'
])
<article
    {{ $attributes->class(['slide-in relative py-6 px-8 rounded-3xl']) }} aria-labelledby="{{$tuto_ref->slug}}">
    <div class="flex justify-between">
        <div class="flex-1 flex justify-between">
            <h3 id="{{$tuto_ref->slug}}" aria-level="3" role="heading" class="hover-within:text-orange-500 text-lg font-medium xl:text-2xl mb-1.5 2xl:text-3xl">
                <a class="hover:text-orange-500" href="{{$tuto_ref->link}}">
                {{$tuto_ref->name}}
                </a>
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
    <div class="mb-2.5 xl:mb-6 xl:text-lg  2xl:text-xl">{!!$tuto_ref->excerpt!!}</div>
    <div class="flex justify-between">
        <div class="flex gap-5 items-center">
            <p class="text-orange-500 font-sans xl:text-lg 2xl:text-xl font-medium">{{ucwords($tuto_ref->languages)}}</p>
            <p class="xl:text-lg 2xl:text-xl">{{ucwords($tuto_ref->created_at->translatedFormat('d F Y'))}}</p>
        </div>
    </div>
</article>
