@props([
    'tuto'
])
<article {{ $attributes->class(['group hover:bg-orange-100 relative py-4 px-4 xl:py-6 xl:px-8 rounded-3xl']) }} aria-labelledby="{{$tuto->slug}}">
    <div class="flex justify-between">
        <div class="flex-1 flex justify-between">
            <h3 id="{{$tuto->slug}}" aria-level="3" role="heading" class="text-lg font-medium xl:text-2xl mb-1.5">
                {{$tuto->name}}</h3>
            <p class="mb-3">{{$tuto->created_at}}</p>
        </div>
        @auth()
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20.996 30">
                <path
                        d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"
                        transform="translate(-5 -2)" fill="#da953a"/>
                <path
                        data-name="c839c07daa330db315a65863143c41b9"
                        d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"
                        transform="translate(-5 -2)" fill="#da953a"/>
            </svg>
        @endauth
    </div>
    <p class="mb-2.5 xl:mb-6 xl:text-lg">{{$tuto->excerpt}}</p>
    <div class="flex justify-between">
        <p class="text-orange-500 font-sans xl:text-lg font-medium">{{$tuto->languages}}</p>
        <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
           href="{{$tuto->link}}">{{__('tuto.tuto_do')}}</a>
        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
             viewBox="0 0 32 27.417">
            <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                  transform="translate(-19 -8.001)" fill="#4e6458"/>
        </svg>
    </div>
</article>
