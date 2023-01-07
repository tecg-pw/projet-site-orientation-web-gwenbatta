@props([
    'recurring_ref'
])

<article aria-labelledby="{{$recurring_ref->slug}}"
        {{ $attributes->class(['col-span-2 flex flex-col justify-between bg-white-100 p-5 xl:py-10 xl:px-8 rounded-3xl']) }}>
    <h3 role="heading" aria-level="3" id="{{$recurring_ref->slug}}"
        class="xl:text-2xl text-xl font-sans font-medium">{{$recurring_ref->name}}</h3>
    @if(!(request()->has('show-reponse-'.$recurring_ref->slug)))
        <div class="justify-end flex">
            <a href="?show-reponse-{{$recurring_ref->slug}}#{{$recurring_ref->slug}}" class="">
                <span class="sr-only">{{__('recurring.recurring_link')}}</span>
                <span class="flex-1 justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                      <path id="_2020bf85e241394953aca514c8b97948"
                                            data-name="2020bf85e241394953aca514c8b97948"
                                            d="M19.5,2A17.5,17.5,0,1,0,37,19.5,17.5,17.5,0,0,0,19.5,2Zm0,31.5a14,14,0,1,1,14-14A14,14,0,0,1,19.5,33.5Zm7-15.75H21.25V12.5a1.75,1.75,0,0,0-3.5,0v5.25H12.5a1.75,1.75,0,0,0,0,3.5h5.25V26.5a1.75,1.75,0,0,0,3.5,0V21.25H26.5a1.75,1.75,0,0,0,0-3.5Z"
                                            transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>
                                </span></a>
        </div>
    @endif
    @if(request()->has('show-reponse-'.$recurring_ref->slug))
        <p class="mt-8 text-lg leading-8 xl:text-xl xl:mr-36">{{$recurring_ref->description}}</p>
        <div class="flex justify-end">
            <a href="/{{str_replace('_','-',app()->getLocale())}}/forum/index#{{$recurring_ref->slug}}"
               class="justify-self-end">
                <span class="sr-only">{{__('recurring.recurring_link')}}</span>
                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                      <path id="_2020bf85e241394953aca514c8b97948"
                                            data-name="2020bf85e241394953aca514c8b97948"
                                            d="M19.5,2A17.5,17.5,0,1,0,37,19.5,17.5,17.5,0,0,0,19.5,2Zm0,31.5a14,14,0,1,1,14-14A14,14,0,0,1,19.5,33.5Zm7-15.75h-14a1.75,1.75,0,0,0,0,3.5h14a1.75,1.75,0,0,0,0-3.5Z"
                                            transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>
                                </span></a>
        </div>
    @endif
</article>
