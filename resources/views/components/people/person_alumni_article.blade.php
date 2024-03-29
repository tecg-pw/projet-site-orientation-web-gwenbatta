@props([
    /** @var \mixed */
    'person_ref'
])

    <article
        {{ $attributes->class(['slide-in hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-8 rounded-3xl']) }}
        aria-labelledby="{{$person_ref->slug}}">
        <div class="flex flex-1 items-center">
            <div class="flex-1 order-2 ml-4">
                <h4 id="{{$person_ref->slug}}" role="heading" aria-level="4"
                    class="capitalize text-xl xl:text-2xl 2xl:text-3xl">
                    <span class="firstname">{{$person_ref->firstname}} </span>
                    <span class="name">{{$person_ref->name}}</span>
                </h4>
                <div class="mt-1 flex justify-between">
                    <div class="flex flex-col xl:flex-row xl:gap-4">
                        <div class="status xl:text-lg 2xl:text-xl uppercase">
                            @if($person_ref->status === 'teachalumni')
                                <p>{{__('people.teachalumni_status')}}</p>
                            @else
                                <p>{{$person_ref->status}}</p>
                            @endif
                        </div>
                        <div>
                            @if($person_ref->end === null)
                                <div class="xl:text-lg 2xl:text-xl flex">
                                    <p class="begin">{{$person_ref->begin->format('Y')}}</p>
                                    - {{__('people.bottin_today')}}</div>
                            @else
                                <div class="uppercase xl:text-lg 2xl:text-xl flex">
                                    <p class="begin">{{$person_ref->begin->format('Y')}}</p>-<p
                                        class="end">{{$person_ref->end->format('Y')}}</p>
                                </div>
                            @endif
                        </div>
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
            <picture>
                @if($person_ref->srcset && $person_ref->srcset['thumbnail'])
                    @foreach($person_ref->srcset['thumbnail'] as $size => $path)
                        <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                    src="{{$person_ref->logos && $person_ref->logos['thumbnail'] ? '/' . $person_ref->logos['thumbnail'] : '/'.$person_ref->logo}}"
                    alt="{{$person_ref->title}}" class="order-1 rounded-full">
            </picture>
        </div>
        @if($person_ref->status === 'ancien' || $person_ref->status === 'alumni')
            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
               href="/{{app()->getLocale()}}/bottin/alumni/{{$person_ref->slug}}">{{__('En savoir plus sur' . $person_ref->name)}}</a>
        @elseif($person_ref->status === 'professeur' || $person_ref->status === 'teacher')
            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
               href="/{{app()->getLocale()}}/bottin/teacher/{{$person_ref->slug}}">{{__('En savoir plus sur' . $person_ref->name)}}</a>
        @elseif($person_ref->status === 'étudiante' || $person_ref->status === 'student')
            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
               href="/{{app()->getLocale()}}/bottin/student/{{$person_ref->slug}}">{{__('En savoir plus sur' . $person_ref->name)}}</a>
        @elseif($person_ref->status === 'teachalumni')
            <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
               href="/{{app()->getLocale()}}/bottin/teachalumni/{{$person_ref->slug}}">{{__('En savoir plus sur' . $person_ref->name)}}</a>
        @endif

    </article>
