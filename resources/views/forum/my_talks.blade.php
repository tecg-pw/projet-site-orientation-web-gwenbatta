<x-commons.navigation></x-commons.navigation>
<main>
    <x-recurrent_questions></x-recurrent_questions>
    <section class="mt-20" aria-labelledby="forum">
        <div class="px-10 xl:px-36 flex justify-between mb-8 xl:mb-24 items-center">
            <h2 id="forum" aria-level="2" role="heading"
                class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('forum.index_title')}}</h2>
            @auth()
                <a href="/forum/question"
                   class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold mt-4 xl:mt-0 xl:max-w-[27%]">{{__('forum.add_question')}}</a>
            @endauth
        </div>
        <x-sort_by_forum class="px-10 xl:px-36 mb-14"></x-sort_by_forum>
        <div class="flex items-start xl:flex-row flex-col xl:gap-32 mb-12 px-10 xl:px-36">
            <a class="xl:text-xl text-lg text-center underline text-green-700 font-semibold  font-sans  px-5 py-2"
               href="/forum/index#forum">{{__('forum.my_subject')}}</a>
            <a class="xl:text-xl text-lg text-center underline text-green-700 font-semibold font-sans px-5 py-2"
               href="/forum/latest-answers#forum">{{__('forum.latest_answer')}}</a>
            <a class="xl:text-xl text-lg text-center underline text-green-700 font-semibold  font-sans px-5 py-2"
               href="/forum/my-subject#forum">{{__('forum.my_subject')}}</a>
            <a class="xl:text-xl text-lg text-center underline text-green-700 font-semibold rounded-lg bg-orange-100 font-sans px-5 py-2"
               href="/forum/my-talks#forum">{{__('forum.my_talks')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-5 xl:gap-24 mb-36">
            <div class="col-span-3 flex flex-col gap-y-8 xl:pr-14 px-10 xl:px-36 ">
                <p>Vous n'avez aucun sujet</p>
            </div>
            <x-aside_forum></x-aside_forum>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
