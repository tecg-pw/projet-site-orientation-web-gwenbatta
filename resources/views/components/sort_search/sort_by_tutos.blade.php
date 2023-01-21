@props([
    'languages',
    'date',
])
<div {{ $attributes->class([' xl:mb-20']) }}>
    <p class="text-green-500 text-xl xl:text-3xl 2xl:text-4xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="/{{app()->getLocale()}}/technical/tuto" method="get" class="forms flex gap-4">
        <div class="flex flex-1 flex-col md:flex-row justify-between sm:justify-start sm:gap-x-10 xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="languages" class="text-lg text-green-500 mb-2 xl:text-xl 2xl:text-2xl">{{__('sort.languages')}}</label>
                <select id="languages"
                        name="languages"
                        class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1 2xl:text-xl uppercase">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($languages as $filter)
                        <option value="{{$filter->languages}}">
                            {{mb_strtoupper($filter->languages)}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset class="flex flex-col xl:ml-16">
                <label for="date" class="text-lg text-green-500 mb-2 xl:text-xl 2xl:text-2xl">{{__('sort.date')}}</label>
                <select
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold pl-2 pr-8 py-1 2xl:text-xl"
                    id="date"
                    name="date">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($date as $filter)
                        <option value="{{$filter->created_at}}">
                            {{$filter->created_at->format('Y')}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
        </div>
        <button type="submit"
                class="filter hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl 2xl:text-2xl font-semibold xl:max-w-[27%] 2xl:max-w-[23%] sm:max-w-[45%] md:max-w-[40%]">
            {{__('sort.button')}}
        </button>
    </form>
</div>
