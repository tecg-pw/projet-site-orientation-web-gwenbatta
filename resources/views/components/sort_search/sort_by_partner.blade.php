@props([
    'cities',
    'agencies',
    'urlAction'
])

<div {{ $attributes->class(['xl:mb-20 mb-8']) }}>
    <p class="text-green-500 text-xl xl:text-3xl 2xl:text-4xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="{{$urlAction}}" method="get" class="forms flex flex-col gap-4">
        <div class="flex justify-between sm:justify-start xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="cities" class="text-lg xl:text-xl 2xl:text-2xl text-green-500 mb-2">{{__('sort.city')}}</label>
                <select id="cities"
                        name="cities"
                        class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1 2xl:text-xl">
                    <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    @foreach($cities as $city)
                        <option value="{{$city->locality}}">
                            {{$city->locality}}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset class="flex flex-col ml-16">
                <label for="agency" class="text-lg xl:text-xl 2xl:text-2xl text-green-500 mb-2">{{__('sort.agency')}}</label>
                <select class="agency-partner appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1 2xl:text-xl"
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
                class="filter hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl 2xl:text-2xl font-semibold xl:max-w-[27%] 2xl:max-w-[23%] sm:max-w-[45%] md:max-w-[40%]">
            {{__('sort.button')}}
        </button>
    </form>
</div>
