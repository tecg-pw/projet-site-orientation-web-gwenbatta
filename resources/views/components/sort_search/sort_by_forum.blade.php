@props([
    'status',
    'tags',
    'created',
    'urlAction',
])

<div {{ $attributes }}>
    <p class="text-green-500 text-xl xl:text-3xl 2xl:text-4xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="{{$urlAction}}" method="get" class="flex flex-col gap-6 xl:gap-4" >
        <div class="flex md:flex-row flex-col md:gap-x-10 gap-2">
        <div class="flex flex-col">
            <label for="status" class="text-lg text-green-500 mb-2 xl:text-xl 2xl:text-2xl">{{__('sort.status')}}</label>
            <select id="status"
                    name="status"
                    class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1 2xl:text-xl">
                <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
                    <option value="1">
                        {{mb_strtoupper(__('Résolu'))}}
                    </option>
                    <option value="0">
                        {{mb_strtoupper(__('Non résolu'))}}
                    </option>

            </select>
        </div>
        <div class="flex flex-col xl:ml-16">
            <label for="tags" class="text-lg text-green-500 mb-2 xl:text-xl 2xl:text-2xl">{{__('sort.tags')}}</label>
            <select class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1 2xl:text-xl" id="tags"
                    name="tags">
                <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
            @foreach($tags as $tag)
                    <option value="{{$tag->translation->where('locale',app()->getLocale())->first()->tag_id}}">
                        {{mb_strtoupper($tag->translation->where('locale',app()->getLocale())->first()->name)}}
                    </option>
                @endforeach

            </select >
        </div>
        <div class="flex flex-col xl:ml-16">
            <label for="year" class="text-lg text-green-500 mb-2 xl:text-xl 2xl:text-2xl">{{__('sort.year')}}</label>
            <select class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1 2xl:text-xl" id="year"
                    name="year">
                <option value="all">{{mb_strtoupper(__('sort.all'))}}</option>
            @foreach($created as $filter)
                    <option value="{{$filter->created_at}}">
                        {{$filter->created_at->format('Y')}}
                    </option>
                @endforeach
            </select >
        </div>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold  xl:max-w-[27%] lg:max-w-[50%] 2xl:max-w-[48%] md:max-w-[70%]">
            {{__('search.button')}}
        </button>
    </form>
</div>
