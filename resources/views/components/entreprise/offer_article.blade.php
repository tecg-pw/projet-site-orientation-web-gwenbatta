@props([
    /** @var \mixed */
    'offer_ref'
])
@php
    $offer = $offer_ref->translation->where('locale',app()->getLocale())->first()
@endphp
<article
        {{$attributes->class(['slide-in group hover:bg-orange-100 relative flex flex-col bg-white-100 py-4 px-4 xl:py-6 xl:px-8 rounded-3xl']) }}
        aria-labelledby="{{$offer->slug}}">
    <div class="flex flex-1 items-center">
        <div class="flex-1 order-2 ml-4">
            <div class="md:flex-row flex-col flex justify-between">
                <h3 id="{{$offer->slug}}" role="heading" aria-level="3"
                    class="capitalize text-lg md:text-xl xl:text-2xl  2xl:text-3xl">{{$offer->name}}</h3>
                <p class="xl:text-lg">{{ucwords($offer->created_at->translatedFormat('d F Y'))}}</p>
            </div>
            <div class="mt-1 flex justify-between">
                <div class="wysiwyg description flex flex-col gap-2 max-w-[80%] xl:text-lg 2xl:text-2xl">
                    {!!$offer->description!!}
                    <p class="partner font-medium xl:text-lg 2xl:text-2xl">{{$offer_ref->partner->translation->where('locale',app()->getLocale())->first()->name}}</p>
                </div>
                <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                     width="25"
                     viewBox="0 0 32 27.417">
                    <path
                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
            </div>
        </div>
    </div>
    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
       href="/{{app()->getLocale()}}/entreprise/internship/{{$offer->slug}}">{{__('agency.offer_link')}}</a>
</article>
