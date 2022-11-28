<x-commons.navigation></x-commons.navigation>
<main id="content" class="">
    <section class="xl:mt-20 px-10 xl:px-36 flex flex-col mb-36 gap-x-11" aria-labelledby="name">
        <div class="flex flex-col xl:flex-row justify-between mt-20">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11"
                id="dev-front" aria-level="2" role="heading">{{$partner->name}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/entreprise/partner">{{__('agency.partner_back')}}</a>
        </div>
        <div class="flex flex-col xl:flex-row xl:gap-12 mt-16">
            <div class="mb-7 order-2 xl:gap-y-10">
                <div class="flex mb-10 xl:gap-12 gap-8">
                    <section aria-labelledby="informations">
                        <h3 id="informations" role="heading" aria-level="3" class="text-xl xl:text-2xl mb-5 font-semibold">{{__('agency.partner_informations')}}</h3>
                        <div class="flex flex-col gap-y-2.5 mb-5">
                            <a class="hover:text-orange-500 text-green-700 underline xl:text-lg" href="mailto:{{$partner->mail}}">{{$partner->mail}}</a>
                            <div class="xl:text-xl">
                                <p>{{$partner->adresse}}</p>
                                <p class="uppercase">{{$partner->locality}}</p>
                            </div>
                        </div>
                        <div class="flex flex-1 mb-6 gap-5">
                            <div class="relative group">
                                <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                     viewBox="0 0 38.97 38.005">
                                    <path id="_08774047e75405e5723edc2388e9bc78"
                                          data-name="08774047e75405e5723edc2388e9bc78"
                                          d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                                          transform="translate(-1.999 -2.247)" fill="#da953a"/>
                                </svg>
                                <a class="linkcard" href="{{$partner->link_facebook}}"></a>
                            </div>
                            <div class="group relative">
                                <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                     viewBox="0 0 41.079 41.079">
                                    <path id="af2da8f3726c5aa836b9ea2eeab70e0c"
                                          d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                                          transform="translate(-2 -2)" fill="#da953a"/>
                                </svg>
                                <a class="linkcard" href="{{$partner->link_instagram}}"></a>
                            </div>
                            <div class="group relative">
                                <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="30"
                                     viewBox="0 0 37.777 38.005">
                                    <path id="e42de672acac05e6c1484ce6eac8627f"
                                          d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                                          transform="translate(-2.06 -2)" fill="#da953a"/>
                                </svg>
                                <a class="linkcard" href="{{$partner->link_linkedin}}"></a>
                            </div>
                        </div>
                    </section>
                    <section aria-labelledby="members">
                        <h3 id="members" role="heading" aria-level="3" class="xl:text-2xl text-xl mb-5 font-semibold">{{__('agency.partner_members')}}</h3>
                        <ul class="flex flex-col xl:gap-3 gap-y-1.5 list-disc">
                            @for($i=1;$i<6;$i++)
                                <li class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7">
                                        <circle id="Ellipse_50" data-name="Ellipse 50" cx="3.5" cy="3.5" r="3.5"
                                                fill="#6f704d"/>
                                    </svg>
                                    <p>Nom du membre</p>
                                </li>
                            @endfor
                        </ul>
                    </section>
                </div>
                @if($partner->description === null)
                    <p class="flex flex-col gap-6 text-lg leading-8 xl:text-xl xl:leading-10">
                        {{__('people.bottin_no_description')}}
                    </p>
                @else
                    <p class="flex flex-col gap-6 text-lg leading-8 xl:text-xl xl:leading-10 xl:max-w-[65%]">
                        {{$partner->description}}
                    </p>
                @endif
            </div>
            <div class="min-w-[313px]">
                <img class="xl:mb-16 mb-6 rounded-3xl" src="https://via.placeholder.com/345" alt="avatar">
                <div class="flex flex-col">
                    <a href="{{$partner->site_link}}"
                       class="hover:bg-white-100 hover:text-green-700 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-4 py-4 rounded-2xl text-2xl font-semibold ">{{__('agency.partner_view_site')}}</a>
                    <a class=" self-center flex font-sans text-end text-green-700 text-2xl font-semibold underline px-4 py-6 self-end"
                       href="/">

                    </a>
                </div>
            </div>
        </div>

    </section>
    <article class="bg-yellow-600 xl:px-36 px-10 pb-24 pt-20" aria-labelledby="internships">
        <div class="flex xl:flex-row flex-col justify-between mb-8">
            <h2 id="internships" role="heading" aria-level="2" class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20">{{__('Offres de stages')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/entreprise/internship">{{__('Voir les offres de stage')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @if(count($offers) !== 0)
                @foreach($offers as $offer)
                    <article class="group hover:bg-orange-100 relative flex flex-col bg-white-100 py-4 px-4 xl:py-6 xl:px-8 rounded-3xl"
                             aria-labelledby="{{$offer->slug}}">
                        <div class="flex flex-1 items-center">
                            <div class="flex-1 order-2 ml-4">
                                <div class="xl:flex-row flex-col flex justify-between">
                                    <h3 id="{{$offer->slug}}" role="heading" aria-level="4" class="text-lg xl:text-2xl">{{$offer->name}}</h3>
                                    <p class="xl:text-lg">{{$offer->created_at->format('d M. Y')}}</p>
                                </div>
                                <div class="mt-1 flex justify-between">
                                    <div class="flex flex-col gap-2 max-w-[80%]">
                                        <p class="text">{{$offer->description}}</p>
                                        <p class="font-medium xl:text-lg">{{$offer->partner->name}}</p>
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
                           href="/entreprise/internship/{{$offer->slug}}">{{__('En savoir plus' . $offer->slug)}}</a>
                    </article>
                @endforeach
            @else
                <p class="flex flex-col gap-6 text-lg leading-8 xl:text-xl xl:leading-10">
                    {{__('agency.partner_no_offer')}}
                </p>
            @endif
        </div>
    </article>
    <article class="xl:px-36 px-10 mt-36 mb-36" aria-labelledby="alumnis">
        <div class="flex flex-col xl:flex-row justify-between mb-6">
            <h2 class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 mb-6 xl:mb-16 font-sans" id="alumnis" aria-level="2"
                role="heading">{{__('Nos alumnis en stage ici')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/bottin/alumni">{{__('Voir plus d\'alumnis')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($alumnis as $alumni)
                <article
                    class="hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-8 rounded-3xl"
                    aria-labelledby="{{$alumni->slug}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <h4 id="{{$alumni->slug}}" role="heading" aria-level="4" class="text-xl xl:text-2xl">{{$alumni->firstname}} {{$alumni->name}}</h4>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col xl:flex-row xl:gap-4">
                                    @if($alumni->status === 'teachalumni')
                                        <p class="uppercase xl:text-lg">{{__('Ancien - Professeur')}}</p>
                                    @else
                                        <p class="uppercase xl:text-lg">{{$alumni->status}}</p>
                                    @endif
                                    @if($alumni->end === null)
                                        <p class="xl:text-lg">{{$alumni->begin->format('Y')}} - {{__('people.bottin_today')}}</p>
                                    @else
                                        <p class="uppercase xl:text-lg">{{$alumni->begin->format('Y')}}-{{$alumni->end->format('Y')}}</p>
                                    @endif
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
                        <img class="order-1 rounded-full" width="98" src="{{$alumni->avatar}}" alt="avatar">
                    </div>
                    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                       href="/bottin/{{$alumni->status === 'teachalumni'? 'teachalumni' : 'alumni'}}/{{$alumni->slug}}">{{__('En savoir plus sur' . $alumni->name)}}</a>
                </article>
            @endforeach
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
