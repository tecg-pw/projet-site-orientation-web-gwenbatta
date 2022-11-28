<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="question">
        <div class="px-10 xl:px-36">
            <div class="flex flex-col mb-14 xl:mb-28">
                <div class="flex flex-col xl:flex-row order-1">
                    <h2 class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 font-sans mt-6" aria-level="2" role="heading" id="question">
                        {{__('forum_question.title')}}
                    </h2>
                    <a class="hover:text-orange-500 font-sans mt-3 xl:mt-6 xl:text-end text-green-700 xl:text-3xl font-semibold underline flex-1"
                       href="/{{str_replace('_','-',app()->getLocale())}}/forum/index">{{__('forum_question.back')}}</a>
                </div>
                <a class="text-green-500 font-sans font-light underline mt-8"
                   href="/{{str_replace('_','-',app()->getLocale())}}/">{{__('Techniques > Forum > Poser une question')}}</a>
            </div>
            <div class="xl:grid xl:grid-cols-5 flex flex-1 xl:mt-14">
                <form action="/" method="post" class="xl:col-span-3 flex-1 xl:items-center xl:mr-20">
                    @csrf
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questions">{{__('forum_question.question')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="questions" id="questions" type="text" placeholder="{{__('forum_question.question_placeholder')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questionsDescription">{{__('forum_question.description')}}</label>
                        <textarea
                            cols="30" rows="10"
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="questionsDescription" id="questionsDescription"
                            placeholder="{{__('forum_question.description_placeholder')}}"></textarea>
                    </fieldset>
                    <div class="flex flex-1 xl:justify-end">
                        <input
                            class="hover:text-green-700 flex-1 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold mt-4 xl:mt-0 xl:max-w-[40%]"
                            type="submit" value="{{__('forum_question.button')}}">
                    </div>
                </form>
                <x-login.commons.aside class="sr-only xl:not-sr-only xl:col-span-2"></x-login.commons.aside>
            </div>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
