@props([
    'status',
    'tags',
    'created'
])

<div {{ $attributes }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('sort.sort_by')}}</p>
    <form action="/"
          method="get" class="flex flex-col gap-6 xl:gap-4" >
        <div class="flex md:flex-row flex-col md:gap-x-10 gap-2">
        <fieldset class="flex flex-col">
            <label for="status" class="xl:text-lg text-green-500 xl:mb-2">{{__('sort.status')}}</label>
            <select id="status"
                    name="status"
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1">
                    <option value="resolved">
                        {{__('Résolu')}}
                    </option>
                    <option value="unresolved">
                        {{__('Non résolu')}}
                    </option>
            </select>
        </fieldset>
        <fieldset class="flex flex-col xl:ml-16">
            <label for="tags" class="xl:text-lg text-green-500 xl:mb-2">{{__('sort.tags')}}</label>
            <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="tags"
                    name="tags">
                @foreach($tags as $tag)
                    <option value="{{$tag->translation->where('locale',app()->getLocale())->first()->slug}}">
                        {{mb_strtoupper($tag->translation->where('locale',app()->getLocale())->first()->name)}}
                    </option>
                @endforeach
            </select >
        </fieldset>
        <fieldset class="flex flex-col xl:ml-16">
            <label for="year" class="xl:text-lg text-green-500 xl:mb-2">{{__('sort.year')}}</label>
            <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="year"
                    name="year">
                @foreach($created as $filter)
                    <option value="{{$filter->created_at->format('Y')}}">
                        {{$filter->created_at->format('Y')}}
                    </option>
                @endforeach
            </select >
        </fieldset>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold xl:max-w-[27%] 2xl:max-w-[48%] md:max-w-[70%]">
            {{__('search.button')}}
        </button>
    </form>
</div>
