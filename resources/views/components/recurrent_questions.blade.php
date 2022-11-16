<article {{ $attributes->class(['bg-yellow-600 xl:px-36 px-10 py-20 ']) }} aria-labelledby="recurring-questions">
    <h2 role="heading" aria-level="2" id="recurring-questions"
        class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-8 xl:mb-20">{{__('Quelques questions récurrentes')}}</h2>
    <div class="xl:grid xl:grid-cols-3 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @for($i=1;$i<5;$i++)
            <article aria-labelledby="{{__('test'.$i)}}"
                     class="col-span-2 flex flex-col justify-between bg-white-100 py-10 px-8 rounded-3xl">
                <h3 role="heading" aria-level="3" id="{{__('test'.$i)}}"
                    class="xl:text-2xl text-xl font-sans font-medium">{{__('Est-ce qu’avoir un Mac est indispensable ?')}}</h3>
                @if(!(request()->has('show-reponse-test'.$i)))
                    <div class="justify-end flex">
                        <a href="?show-reponse-{{__('test'.$i)}}#{{__('test'.$i)}}" class="">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
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
                @if(request()->has('show-reponse-test'.$i))
                    <p class="mt-8 text-lg leading-8 xl:text-xl xl:mr-36">{{__('Non, il n’est pas obligatoire d’avoir un Mac pour les cours de web. Cependant, nous vous conseillons, si vous devez acheter un nouvel ordinateur et que vous vous destinez au web, de prendre un Mac. En effet, la plupart des professeurs de web utilise Apple et sauront mieux vous aider si vous avez un problème car il maitrise mieux ces machines et c’est un outil mieux adapter pour le développment de sites.')}}</p>
                    <div class="flex justify-end">
                        <a href="/forum/index#{{__('test'.$i)}}"
                           class="justify-self-end">
                            <span class="sr-only">{{__('Voir la réponse')}}</span>
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
        @endfor
    </div>
</article>
