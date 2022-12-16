<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-36 flex " aria-labelledby="question">
        <div class="px-10 2xl:px-48 xl:px-36 flex-1">
            <div class="flex flex-col mb-14 xl:mb-28">
                <div class="flex flex-col md:flex-row order-1">
                    <h2 class="xl:text-4xl md:text-3xl text-2xl uppercase font-bold text-yellow-800 font-sans mt-6" aria-level="2"
                        role="heading" id="question">
                        {{__('forum_question.title')}}
                    </h2>
                    <a class="hover:text-orange-500 font-sans mt-3 md:text-xl self-end xl:mt-6 md:text-end text-green-700 xl:text-3xl font-semibold underline flex-1"
                       href="/{{app()->getLocale()}}/forum/index">{{__('forum_question.back')}}</a>
                </div>
            </div>
            <div class="xl:grid xl:grid-cols-5 flex flex-1 xl:mt-14">
                <form action="/subject" method="post" class="xl:col-span-3 flex-1 xl:items-center xl:mr-20">
                    @csrf
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questions">{{__('forum_question.question')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="questions" id="questions" type="text"
                            placeholder="{{__('forum_question.question_placeholder')}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl"
                               for="questionsDescription">{{__('forum_question.description')}}</label>
                        <textarea
                            cols="30" rows="10"
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="questionsDescription" id="questionsDescription"
                            placeholder="{{__('forum_question.description_placeholder')}}"></textarea>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="tag">{{__('forum_question.tag')}}</label>

                        <select name="tag" id="tag"
                                class="appearance-none max-w-[50%] bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
                            @foreach($tags as $tag)
                                <option value="{{$tag->translation->where('locale',app()->getLocale())->first()->slug}}">{{mb_strtoupper($tag->translation->where('locale',app()->getLocale())->first()->name)}}</option>
                            @endforeach
                        </select>
                    </div>
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
