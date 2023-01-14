<div {{ $attributes }}>
    <form id="searchGlobalForm" action="/{{app()->getLocale()}}/search" method="GET" class="flex flex-col relative">
        <label class="hidden" for="search_bar">{{__('search.label')}}</label>
        <span>
            <svg class="absolute left-1.5 top-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" fill="#4E6458"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg>
        </span>
        <input
            class="bg-yellow-100 border border-orange-500 rounded-xl pl-9 pr-2 pb-2 pt-2.5 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500"
            type="search" name="search_bar" id="search_bar"
            placeholder="{{__('search.placeholder')}}"/>
        <fieldset class="relative">
        <label class="hidden" >{{__('search.button')}}</label>
        <input class="sr-only" type="submit" id="s" name="s" value="search"/>
        </fieldset>
    </form>
</div>
