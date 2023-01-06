@props([
    'project_ref',
    'person',
])
@if(isset($project_ref))
    <article class="group hover:bg-orange-100 flex-col sm:max-w-[93%] flex bg-yellow-100 rounded-3xl relative"
             aria-labelledby="{{$project_ref->slug}}">
        <div class="flex-col flex px-4 mt-4 xl:mt-6">
            <h3 class="text-xl mb-1.5 xl:text-3xl xl:mb-3" role="heading" aria-level="3" id="{{$project_ref->slug}}">{{$project_ref->title}}</h3>
            <p class="xl:text-xl relative z-30">{{$person->firstname}} {{$person->name}}</p>
            <div class="flex justify-between mb-4">
                <p class="xl:text-xl">{{ucwords($project_ref->date->translatedFormat('F Y'))}}</p>
                <svg class="group-hover:mr-0 mr-2 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                     viewBox="0 0 32 27.417">
                    <path
                        d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
            </div>
            <a class="self-end linkcard" href="/{{app()->getLocale()}}/project/{{$project_ref->slug}}">{{__('project_ref.project_ref_view'). $project_ref->title}}</a>
        </div>
        <figure class="order-first">
            <img class="rounded-t-3xl" src="/{{$project_ref->main_picture}}" alt="">
        </figure>
    </article>
@endif

