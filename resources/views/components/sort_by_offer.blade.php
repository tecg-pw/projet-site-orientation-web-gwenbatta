@props([
    'jobs',
    'agencies',
    'urlAction'
])

<div {{ $attributes->class(['xl:mb-20 mb-8']) }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="{{$urlAction}}" method="get" class="flex flex-col gap-4">
        <div class="flex justify-between sm:justify-start xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="jobs" class="xl:text-lg text-green-500 mb-2">{{__('sort.job')}}</label>
                <select id="jobs"
                        name="jobs"
                        class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($jobs as $job)
                        <option value="{{$job->name}}">
                            {{$job->name}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset class="flex flex-col ml-16">
                <label for="agency" class="xl:text-lg text-green-500 mb-2">{{__('sort.agency')}}</label>
                <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1"
                        id="agency"
                        name="agency">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($agencies as $agency)
                        <option value="{{$agency->name}}">
                            {{$agency->name}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 py-3 rounded-2xl text-xl font-semibold xl:max-w-[25%] lg:max-w-[45%] 2xl:max-w-[32%] md:max-w-[58%] sm:max-w-[75%]">
            {{__('sort.button')}}
        </button>
    </form>
</div>