@props([
    /** @var \mixed */
    'new_ref'
])

@if(isset($new_ref))
<article {{ $attributes->class(['slide-in group hover:bg-orange-100 flex-col sm:max-w-[93%] min-h-full flex bg-yellow-100 rounded-3xl relative']) }}
         aria-labelledby="{{$new_ref->slug}}">
    <div class="flex-col flex px-4 mt-6">
        <div class="flex justify-between items-center mb-3">
            <h4 class="capitalize text-xl md:text-2xl xl:text-3xl truncate" role="heading" aria-level="3"
                id="{{$new_ref->slug}}">{{$new_ref->name}}</h4>
            <p class="datesNew xl:text-xl md:text-lg relative z-30">{{ucwords($new_ref->date->translatedFormat('d/m/Y '))}}</p>
        </div>
        <div class="flex justify-between mb-4">
            <div class="wysiwyg excerpt max-w-[80%] text-start wrapping">
                {!!__($new_ref->excerpt)!!}
            </div>
            <svg class="group-hover:mr-0 mr-2 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                 viewBox="0 0 32 27.417">
                <path
                        d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
            </svg>
        </div>
        <a class="self-end linkcard"
           href="/{{app()->getLocale()}}/news/{{$new_ref->slug}}">{{__('actu.actu_link')}}</a>
    </div>
    <picture class="-order-2 rounded-t-3xl">
        @if($new_ref->srcset && $new_ref->srcset['thumbnail'])
            @foreach($new_ref->srcset['thumbnail'] as $size => $path)
                <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
            @endforeach
        @endif
            <img
                src="{{$new_ref->pictures && $new_ref->pictures['thumbnail'] ? '/' . $new_ref->pictures['thumbnail'] : '/'.$new_ref->main_pictures}}"
                alt="{{$new_ref->title}}" class="rounded-t-3xl order-first">
    </picture>
</article>
@endif
