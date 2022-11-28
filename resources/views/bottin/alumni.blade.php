<x-commons.navigation></x-commons.navigation>
<main id="content" class="">
    <section class="mt-20" aria-labelledby="alumni">
        <div class="px-10 flex flex-col xl:px-36 xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="almuni" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('people.alumni_title')}}</h2>
            <x-search_bar class="xl:min-w-[23%] xl:not-sr-only sr-only"></x-search_bar>
        </div>
        <p class="px-10 xl:pl-36 mb-7 xl:max-w-[47%] xl:text-xl xl:leading-10">{{__('people.alumni_text')}}</p>
        <x-sort_by :status="$status" :years_end="$years_end"/>
        <article class="px-10 flex flex-col gap-y-4 xl:px-36 xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8"
                 aria-labelledby="list-bottin">
            <h3 id="list-bottin" role="heading" aria-level="3" class="sr-only">{{__('people.alumni_list_title')}}</h3>
            @foreach($people as $person)
                <article
                    class="hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-8 rounded-3xl"
                    aria-labelledby="{{$person->slug}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <h4 id="{{$person->slug}}" role="heading" aria-level="4"
                                class="text-xl xl:text-2xl">{{$person->firstname}} {{$person->name}}</h4>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col xl:flex-row xl:gap-4">
                                    @if($person->status === 'teachalumni')
                                        <p class="uppercase xl:text-lg">{{__('Ancien - Professeur')}}</p>
                                    @else
                                        <p class="uppercase xl:text-lg">{{$person->status}}</p>
                                    @endif
                                    @if($person->end === null)
                                        <p class="xl:text-lg">{{$person->begin->format('Y')}}
                                            - {{__('people.bottin_today')}}</p>
                                    @else
                                        <p class="uppercase xl:text-lg">{{$person->begin->format('Y')}}
                                            -{{$person->end->format('Y')}}</p>
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
                        <img class="order-1 rounded-full" width="98" src="{{$person->avatar}}" alt="avatar">
                    </div>
                    @if($person->status === 'ancien')
                        <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                           href="/bottin/alumni/{{$person->slug}}">{{__('En savoir plus sur' . $person->name)}}</a>
                    @elseif($person->status === 'professeur')
                        <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                           href="/bottin/teacher/{{$person->slug}}">{{__('En savoir plus sur' . $person->name)}}</a>
                    @elseif($person->status === 'étudiante')
                            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                               href="/bottin/student/{{$person->slug}}">{{__('En savoir plus sur' . $person->name)}}</a>
                    @elseif($person->status === 'teachalumni')
                            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                               href="/bottin/teacher/{{$person->slug}}">{{__('En savoir plus sur' . $person->name)}}</a>
                    @endif

                </article>
            @endforeach
            {{--            {{$people->links()}}--}}
        </article>
       <x-testimonials :testimonials="$testimonials"/>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
