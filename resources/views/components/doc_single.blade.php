@props([
    /** @var \Illuminate\Database\Eloquent\Model */
    'doc'
])

<article
        aria-labelledby="{{$doc->slug}}" {{ $attributes->class(['group relative bg-yellow-100 py-6 px-8 rounded-3xl']) }}>
    <div class="flex justify-between">
        <div>
            <h4 id="{{$doc->slug}}" aria-level="4" role="heading"
                class="font-medium text-lg xl:text-2xl mb-2">{{$doc->name}}</h4>
        </div>
    </div>
    <p class="mb-4 xl:mb-10 xl:text-lg">{{$doc->excerpt}}</p>
    <div class="flex flex- justify-between">
        <p class="xl:text-lg flex gap-x-3 font-medium">
            {{__('technicals.doc_course')}}
            <span class="flex gap-2">
{{--                @foreach($doc->courses as $course)--}}
{{--                    <a class="underline text-green-700"--}}
{{--                       href="/{{str_replace('_','-',app()->getLocale())}}/cours/show">{{$course->name}}</a>--}}
{{--                @endforeach--}}
            </span>

        </p>
{{--        <a class="linkcard text-xl underline text-green-700 font-semibold font-sans"--}}
{{--           href="{{$doc->link}}">{{__('')}} {{$course->name}}</a>--}}
        <svg class="group-hover:mr-0 mr-4 self-end" xmlns="http://www.w3.org/2000/svg" width="25"
             viewBox="0 0 32 27.417">
            <path
                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                    transform="translate(-19 -8.001)" fill="#4e6458"/>
        </svg>
    </div>
</article>
