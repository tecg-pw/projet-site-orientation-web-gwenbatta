@php
    $urlAction = "/".app()->getLocale()."/forum/index";
@endphp

<x-commons.navigation :page="__('forum.latest_subject')"></x-commons.navigation>
<main id="content">
    <x-recurring.recurrent_questions :recurrings="$recurrings"></x-recurring.recurrent_questions>
    <section class="mt-20" aria-labelledby="forum">
        <div class="px-10 2xl:px-48 xl:px-32 lg:px-16 flex md:flex-row flex-col justify-between mb-8 xl:mb-24 xl:items-center">
            <h2 id="forum" aria-level="2" role="heading"
                class="text-2xl md:text-3xl md:self-center xl:text-4xl 2xl:text-5xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('forum.index_title')}}</h2>
            @auth()
                <a href="/{{app()->getLocale()}}/forum/question"
                   class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl xl:text-2xl 2xl:text-3xl font-semibold mt-4 md:mt-0 xl:max-w-[27%]">{{__('forum.add_question')}}</a>
            @endauth
        </div>
        <x-sort_search.sort_by_forum id="sortlatestsubject" :urlAction="$urlAction" :status="$status" :tags="$tags" :created="$created"
                                     class="px-10 2xl:px-48 xl:px-32 lg:px-16 mb-14"></x-sort_search.sort_by_forum>
        <div class="flex items-start md:flex-row flex-col xl:gap-32 mb-12 px-10 2xl:px-48 xl:px-32 lg:px-16">
            <a class="xl:text-xl 2xl:text-2xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold rounded-lg font-sans bg-orange-100 px-5 py-2"
               href="/{{app()->getLocale()}}/forum/index#forum">{{__('forum.latest_subject')}}</a>
            <a class="xl:text-xl 2xl:text-2xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/{{app()->getLocale()}}/forum/latest-answers#forum">{{__('forum.latest_answer')}}</a>
            @auth()
                <a class="xl:text-xl 2xl:text-2xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold font-sans px-5 py-2"
                   href="/{{app()->getLocale()}}/forum/my-subject#forum">{{__('forum.my_subject')}}</a>
                <a class="xl:text-xl 2xl:text-2xl text-lg hover:text-orange-500 text-center underline text-green-700 font-semibold font-sans px-5 py-2"
                   href="/{{app()->getLocale()}}/forum/my-talks#forum">{{__('forum.my_talks')}}</a>
            @endauth
        </div>
        <div class="lg:grid lg:grid-cols-5 mb-36">
            <x-latestsubject_paginated class="lg:col-span-3 flex flex-col xl:pr-14 lg:pr-7 2xl:pl-48 xl:px-32 lg:px-16 px-10" :subjects="$subjects"/>
            <x-aside_forum id="latestsubject" :urlAction="$urlAction" :latests="$latests" :ratings="$ratings"></x-aside_forum>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
