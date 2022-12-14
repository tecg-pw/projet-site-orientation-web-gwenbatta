@props([
    'languages',
    'date'
])

<div {{ $attributes->class([' xl:mb-20']) }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="/"
          method="get" class="flex flex-col gap-4">
        <div class="flex flex-1 justify-between sm:justify-start sm:gap-x-10 xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="languages" class="text-lg text-green-500 mb-2">{{__('sort.languages')}}</label>
                <select id="languages"
                        name="languages"
                        class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
                    @foreach($languages as $filter)
                        <option value="nothings">
                            {{$filter->languages}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset class="flex flex-col xl:ml-16">
                <label for="date" class="text-lg text-green-500 mb-2">{{__('sort.date')}}</label>
                <select
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold pl-2 pr-8 py-1"
                    id="date"
                    name="date">
                    @foreach($date as $filter)
                        <option value="nothings">
                            {{$filter->created_at->format('Y')}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold xl:max-w-[27%] sm:max-w-[45%]">
            {{__('sort.button')}}
        </button>
    </form>
</div>
