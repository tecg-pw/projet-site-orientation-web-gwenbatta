<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="xl:px-36 px-10 mt-20 mb-20 xl:mb-40" aria-labelledby="{{$offer->slug}}">
        <div class="flex xl:flex-row flex-col justify-between mb-8">
            <h2 id="{{$offer->slug}}" role="heading" aria-level="2"
                class="xl:text-4xl text-2xl text-yellow-800 uppercase font-extrabold font-sans mb-4 xl:mb-20">{{$offer->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/{{str_replace('_','-',app()->getLocale())}}/entreprise/internship">{{__('agency.offer_back')}}</a>
        </div>
        <div class="flex xl:flex-row flex-col">
            <div class="flex flex-col gap-16">
                <article class="even:mt-36 relative mt-48" aria-labelledby="{{$offer->partner->slug}}">
                    <img class="rounded-lg absolute -z-10 bottom-2/3" src="{{$offer->partner->logo}}"
                         alt="avatar">
                    <div class="relative bg-yellow-100 rounded-xl px-4 py-8 left-10">
                        <h3 id="{{$offer->partner->slug}}" role="heading" aria-level="3" class="underline font-medium text-xl xl:text-2xl mb-2">
                            <a class="text-green-700 hover:text-orange-500" href="/{{str_replace('_','-',app()->getLocale())}}/entreprise/partner/{{$offer->partner->slug}}">
                                {{$offer->partner->name}}
                            </a>
                        </h3>
                        <div>
                            <p class="xl:text-lg">{{$offer->partner->adresse}},</p>
                            <p class="mb-4 xl:text-lg">{{$offer->partner->locality}}</p>
                        </div>
                        <a class="hover:text-orange-500 underline text-green-700 text-lg xl:text-xl" href="mailto:{{$offer->partner->mail}}">{{$offer->partner->mail}}</a>
                        <div class="flex justify-between gap-24 xl:gap-32 items-center mt-4 ">
                            <div class="flex flex-1 gap-3">
                                <div class="relative group">
                                    <svg class="group-hover:scale-110" width="34" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" fill="#da953a"><path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"/></svg>
                                    <a class="linkcard" href="{{$offer->partner->link_facebook}}"></a>
                                </div>
                                <div class="group relative">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                         viewBox="0 0 41.079 41.079">
                                        <path id="af2da8f3726c5aa836b9ea2eeab70e0c"
                                              d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                                              transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$offer->partner->link_instagram}}"></a>
                                </div>
                                <div class="group relative">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                         viewBox="0 0 37.777 38.005">
                                        <path id="e42de672acac05e6c1484ce6eac8627f"
                                              d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                                              transform="translate(-2.06 -2)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$offer->partner->link_linkedin}}"></a>
                                </div>

                            </div>
                            <p class="justify-self-end text-green-500 uppercase xl:text-lg">Partenaire</p>
                        </div>
                    </div>
                </article>
                <div class="flex flex-col xl:gap-10 mb-12 xl:mb-0">
                    <a href="{{$offer->partner->site_link}}"
                       class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('Voir le site')}}</a>
                    <a class="group hover:text-orange-500 self-center flex font-sans text-end text-green-700 xl:text-2xl font-semibold underline self-end"
                       href="{{$offer->pdf}}">{{__('agency.offer_pdf')}}
                    </a>
                </div>
            </div>
            <div class="xl:ml-20 flex flex-col gap-16">
                <div>
                    <p class="font-sans text-xl xl:text-2xl font-medium mb-5">{{__('agency.offer_description')}}</p>
                    <p class="text-lg leading-8 xl:max-w-[75%]">
                        {{$offer->description}}
                    </p>
                </div>
                <section aria-labelledby="needed">
                    <h3 id="needed" role="heading" aria-level="3"
                        class="font-sans text-xl xl:text-2xl font-medium mb-5">{{__('agency.offer_aptitude')}}</h3>
                    <div class="flex flex-col xl:flex-row gap-12 xl:gap-32">
                        <section class="border-b-2 border-b-orange-500/40 pb-12 xl:border-b-0 xl:pb-0 xl:pr-24 xl:border-r-orange-500/40 xl:border-r-2" aria-labelledby="languages">
                            <h4 id="languages" role="heading" aria-level="4"
                                class="text-green-500 mb-4 text-lg xl:text-xl">{{__('contact_page.agency_language')}}</h4>
                            <ul class="flex flex-col gap-2 list-disc">
                                @for($i=1;$i<10;$i++)
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7">
                                            <circle data-name="Ellipse 50" cx="3.5" cy="3.5" r="3.5"
                                                    fill="#6f704d"/>
                                        </svg>
                                        <p>Nom de l'aptitude</p>
                                    </li>
                                @endfor
                            </ul>
                        </section>
                        <div class="flex flex-col gap-12">
                            <section class="border-b-2 border-b-orange-500/40 pb-12 xl:border-b-0 xl:pb-0 " aria-labelledby="software">
                                <h4 id="software" role="heading" aria-level="4"
                                    class="text-xl text-green-500 mb-4">{{__('agency.offer_software')}}</h4>
                                <ul class="flex flex-col gap-2 list-disc">
                                    @for($i=1;$i<4;$i++)
                                        <li class="flex items-center gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7"
                                                 viewBox="0 0 7 7">
                                                <circle data-name="Ellipse 50" cx="3.5" cy="3.5" r="3.5"
                                                        fill="#6f704d"/>
                                            </svg>
                                            <p>Nom de l'aptitude</p>
                                        </li>
                                    @endfor
                                </ul>
                            </section>
                            <section class="" aria-labelledby="assets">
                                <h4 id="assets" role="heading" aria-level="4"
                                    class="text-xl text-green-500 mb-4">{{__('agency.offer_plus')}}</h4>
                                <ul class="flex flex-col gap-2 list-disc">
                                    @for($i=1;$i<3;$i++)
                                        <li class="flex items-center gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7"
                                                 viewBox="0 0 7 7">
                                                <circle data-name="Ellipse 50" cx="3.5" cy="3.5" r="3.5"
                                                        fill="#6f704d"/>
                                            </svg>
                                            <p>Nom de l'aptitude</p>
                                        </li>
                                    @endfor
                                </ul>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <article class="bg-yellow-600 xl:px-36 px-10 pb-24 pt-20" aria-labelledby="internships">
        <div class="flex xl:flex-row flex-col justify-between mb-8">
            <h2 id="internships" role="heading" aria-level="2" class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20">{{__('agency.offer_other_title')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/{{str_replace('_','-',app()->getLocale())}}/entreprise/internship">{{__('agency.offer_other')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($offers as $other_offer)
                <article class="group hover:bg-orange-100 relative flex flex-col bg-white-100 py-4 px-4 xl:py-6 xl:px-8 rounded-3xl"
                         aria-labelledby="{{$other_offer->slug}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <div class="xl:flex-row flex-col flex justify-between">
                                <h3 id="{{$other_offer->slug}}" role="heading" aria-level="4" class="text-lg xl:text-2xl">{{$other_offer->name}}</h3>
                                <p class="xl:text-lg">{{$other_offer->created_at->format('d M. Y')}}</p>
                            </div>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col gap-2 max-w-[80%]">
                                    <p class="text">{{$other_offer->description}}</p>
                                    <p class="font-medium xl:text-lg">{{$other_offer->partner->name}}</p>
                                </div>
                                <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg"
                                     width="25"
                                     viewBox="0 0 32 27.417">
                                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                       href="/{{str_replace('_','-',app()->getLocale())}}/entreprise/internship/{{$other_offer->slug}}">{{__('En savoir plus' . $other_offer->slug)}}</a>
                </article>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
