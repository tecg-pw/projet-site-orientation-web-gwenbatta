<article {{ $attributes->class(['bg-yellow-600 xl:px-36 px-10 py-20 ']) }} aria-labelledby="recurring-questions">
    <h2 role="heading" aria-level="2" id="recurring-questions"
        class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-8 xl:mb-20">{{__('recurring.recurring_title')}}</h2>
    <div class="xl:grid xl:grid-cols-3 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @foreach($recurrings as $recurring)
            <article aria-labelledby="{{$recurring->slug}}"
                     class="col-span-2 flex flex-col justify-between bg-white-100 py-10 px-8 rounded-3xl">
                <h3 role="heading" aria-level="3" id="{{$recurring->slug}}"
                    class="xl:text-2xl text-xl font-sans font-medium">{{$recurring->name}}</h3>
                @if(!(request()->has('show-reponse-'.$recurring->slug)))
                    <div class="justify-end flex">
                        <a href="?show-reponse-{{$recurring->slug}}#{{$recurring->slug}}" class="">
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
                @if(request()->has('show-reponse-'.$recurring->slug))
                    <p class="mt-8 text-lg leading-8 xl:text-xl xl:mr-36">{{$recurring->description}}</p>
                    <div class="flex justify-end">
                        <a href="/forum/index#{{$recurring->slug}}"
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
        @endforeach
    </div>
</article>
