@props([
    /** @var \mixed */
    'partner_ref'
])

<article
        {{ $attributes->class(['group hover:bg-orange-100 relative flex flex-col bg-white-100 py-4 px-4 xl:py-6 xl:px-8 rounded-3xl']) }}
        aria-labelledby="{{$partner_ref->slug}}">
    <div class="flex flex-1 items-center">
        <div class="flex-1 order-2 ml-4">
            <h4 id="{{$partner_ref->slug}}" role="heading" aria-level="4"
                class="text-lg xl:text-2xl">{{$partner_ref->name}}</h4>
            <div class="mt-1 flex justify-between">
                <div class="flex flex-col xl:flex-row xl:gap-2">
                    <p class="xl:text-lg">{{$partner_ref->adresse}},</p>
                    <p class="uppercase xl:text-lg">{{$partner_ref->locality_number}} {{$partner_ref->locality}}</p>
                </div>
                <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg" width="25"
                     viewBox="0 0 32 27.417">
                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
            </div>
        </div>
        <img class="order-1 rounded-full" src="/{{$partner_ref->logo_thumb}}" alt="avatar">
    </div>
    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
       href="/{{app()->getLocale()}}/entreprise/partner/{{$partner_ref->slug}}">{{__('En savoir plus') . $partner_ref->name}}</a>
</article>
