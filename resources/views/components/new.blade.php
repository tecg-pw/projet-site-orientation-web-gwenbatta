@props([
    /** @var \mixed */
    'new_ref'
])
<article {{ $attributes->class(['group hover:bg-orange-100 flex-col flex bg-yellow-100 rounded-3xl relative']) }}
         aria-labelledby="{{$new_ref->slug}}">
    <div class="flex-col flex px-4 mt-6">
        <div class="flex justify-between mb-3">
            <h3 class="text-xl xl:text-3xl " role="heading" aria-level="3"
                id="{{$new_ref->slug}}">{{$new_ref->name}}</h3>
            <p class="xl:text-xl relative z-30">{{$new_ref->date}}</p>
        </div>
        <div class="flex justify-between mb-4">
            <p class="max-w-[80%]">{{__($new_ref->excerpt)}}</p>
            <svg class="group-hover:mr-0 mr-2 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                 viewBox="0 0 32 27.417">
                <path
                        d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
            </svg>
        </div>
        <a class="self-end linkcard"
           href="/{{str_replace('_','-',app()->getLocale())}}/news/{{$new_ref->slug}}">{{__('actu.actu_link')}}</a>
    </div>
    <figure class="order-first">
        <img class="rounded-t-3xl" src="{{$new_ref->main_picture}}" alt="">
    </figure>
</article>
