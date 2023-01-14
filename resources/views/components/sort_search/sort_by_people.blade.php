@props([
    'status',
    'years_end',
    'urlAction'
])

<div {{ $attributes->class(['xl:px-32 lg:px-16 2xl:px-48 px-10 mb-8 xl:mb-20']) }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="{{$urlAction}}" method="get" class="forms flex flex-col gap-4">
        <div class="flex flex-1 justify-between sm:justify-start sm:gap-x-10 xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="status" class="text-lg xl:text-xl 2xl:text-2xl text-green-500 mb-2">{{__('sort.status')}}</label>
                <select id="status"
                        name="status"
                        class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1 2xl:text-xl">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($status as $filter)
                        <option value="{{$filter->status}}">
                            {{mb_strtoupper($filter->status)}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset class="flex flex-col xl:ml-16">
                <label for="year" class="text-lg xl:text-xl 2xl:text-2xl text-green-500 mb-2">{{__('sort.year')}}</label>
                <select
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold pl-2 pr-8 py-1 2xl:text-xl"
                    id="year"
                    name="year">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($years_end as $filter)
                        <option value="{{$filter->end}}">
                            {{mb_strtoupper($filter->end->format('Y'))}}
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
