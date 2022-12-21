<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="flex flex-col relative mb-32" aria-labelledby="name">
        <div class="relative">
            <div class="flex items-center justify-self-end sm:mt-24 md:mt-36 lg:mt-52 xl:mt-80 2xl:mt-96 px-10 lg:px-16 xl:px-32 2xl:px-48">
                <div class="order-2 flex-1 ml-8 mt-32">
                    <div>
                        <h2 role="heading" id="name" aria-level="2"
                            class="xl:text-4xl md:text-3xl text-2xl text-yellow-800 font-extrabold font-sans mb-3">{{$user->firstname}} {{$user->name}}</h2>
                        <p class="uppercase text-2xl">{{$user->status}}</p>
                    </div>
                    <div class="text-end">
                        <a href="/{{app()->getLocale()}}/user/profile/modify/{{$user->slug}}"
                           class="border-2 border-green-700 hover:text-green-700 hover:bg-white-100 font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-lg md:text-xl xl:text-2xl font-semibold mb-32">{{__('user.user_modify')}}</a>
                    </div>
                </div>
                <img class="rounded-full md:w-1/4 xl:w-1/4" src="{{$user->avatar}}" alt="">
            </div>
            <img class="absolute -z-10 top-0 bottom-0 left-0 right-0"
                 src="{{$user->back_image}}" alt="">
        </div>
    </section>
    <article class="bg-yellow-600 px-10 lg:px-16 xl:px-32 2xl:px-48 pb-36 pt-20" aria-labelledby="tutos">
        <div class="flex justify-between">
            <h2 role="heading" id="tutos" aria-level="2"
                class="xl:text-4xl text-2xl md:text-3xl uppercase font-extrabold font-sans mb-20">{{__('user.user_favorite')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 text-lg md:text-xl xl:text-3xl font-semibold underline px-4" href="/{{app()->getLocale()}}/technical/tuto">{{__('user.tuto_back')}}</a>
        </div>
        <div class="mt-12 grid grid-cols-2 gap-x-24 gap-y-8">
            @foreach($tutos as $tuto)
                <article class="group relative bg-yellow-100 py-6 px-8 rounded-3xl"
                         aria-labelledby="{{$tuto->translation->where('locale',app()->getLocale())->first()->slug}}">
                    <div class="flex justify-between">
                        <div>
                            <h3 id="{{$tuto->translation->where('locale',app()->getLocale())->first()->slug}}" aria-level="3" role="heading"
                                class="font-medium text-2xl mb-1.5">
                                {{$tuto->translation->where('locale',app()->getLocale())->first()->name}}</h3>
                            <p class="mb-3">{{$tuto->translation->where('locale',app()->getLocale())->first()->created_at->format('d M Y')}}</p>
                        </div>
                        <div class="relative">
                            <label class="sr-only" for="favorite">{{__('Checkbox Favoris')}}</label>
                            <input class="absolute cursor-pointer opacity-0 z-30 w-5 h-11 " type="checkbox" name="favorite"
                                   id="favorite">
                            {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20.996 30">--}}
                            {{--                            <path--}}
                            {{--                                d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"--}}
                            {{--                                transform="translate(-5 -2)" fill="#da953a"/>--}}
                            {{--                            <path--}}
                            {{--                                data-name="c839c07daa330db315a65863143c41b9"--}}
                            {{--                                d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"--}}
                            {{--                                transform="translate(-5 -2)" fill="#da953a"/>--}}
                            {{--                        </svg>--}}
                            <svg class="self-start mt-2" xmlns="http://www.w3.org/2000/svg" width="20"
                                 viewBox="0 0 20.996 30">
                                <path id="c839c07daa330db315a65863143c41b9"
                                      d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2Z"
                                      transform="translate(-5 -2)" fill="#da953a"/>
                            </svg>
                        </div>
                    </div>
                    <p class="mb-6 text-lg">{{$tuto->translation->where('locale',app()->getLocale())->first()->excerpt}}</p>
                    <div class="flex justify-between">
                        <p class="text-orange-500 font-sans text-lg font-medium">{{$tuto->translation->where('locale',app()->getLocale())->first()->languages}}</p>
                        <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"
                           href="{{$tuto->translation->where('locale',app()->getLocale())->first()->link}}">{{__('Faire l\'exercices')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
            @endforeach
            @if(count($tutos) === 0)
                <p>{{__('user.user_no_favorite')}}</p>
            @endif
        </div>
    </article>
    <section class="px-10 lg:px-16 xl:px-30 2xl:px-48 mt-36 mb-36" aria-labelledby="questions">
        <h2 role="heading" id="questions" aria-level="2"
            class="text-4xl text-yellow-800 uppercase font-extrabold font-sans mb-20">{{__('user.user_question_title')}}</h2>
        <p>{{__('user.user_no_question')}}</p>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
