@props([
    'status',
    'years_end'
])

<div {{ $attributes->class(['xl:px-32 lg:px-16 2xl:px-48 px-10 mb-8 xl:mb-20']) }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="/" method="get" class="flex flex-col gap-4">
        <div class="flex flex-1 justify-between sm:justify-start sm:gap-x-10 xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="status" class="text-lg text-green-500 mb-2">{{__('sort.status')}}</label>
                <select id="status"
                        name="status"
                        class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
                    <option value="all">{{strtoupper('Toutes')}}</option>
                    @foreach($status as $filter)
                        <option value="nothings">
                            {{mb_strtoupper($filter->status)}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset class="flex flex-col xl:ml-16">
                <label for="year" class="text-lg text-green-500 mb-2">{{__('sort.year')}}</label>
                <select
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold pl-2 pr-8 py-1"
                    id="year"
                    name="year">
                    <option value="all">{{strtoupper('Toutes')}}</option>
                    @foreach($years_end as $filter)
                        <option value="nothings">
                            {{mb_strtoupper($filter->end->format('Y'))}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold sm:max-w-[50%] xl:max-w-[27%] lg:max-w-[30%]">
            {{__('sort.button')}}
        </button>
    </form>
</div>
