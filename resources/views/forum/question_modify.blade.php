<x-commons.navigation :page="__('forum_question.title_modify')"></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-36 flex " aria-labelledby="question">
        <div class="px-10 2xl:px-48 xl:px-32 lg:px-16 flex-1">
            <div class="flex flex-col mb-14 xl:mb-28">
                <div class="flex flex-col md:flex-row order-1">
                    <h2 class="xl:text-4xl md:text-3xl text-2xl uppercase font-bold text-yellow-800 font-sans mt-6"
                        aria-level="2"
                        role="heading" id="question">
                        {{__('forum_question.title_modify')}}
                    </h2>
                    <a class="hover:text-orange-500 font-sans mt-3 md:text-xl self-end xl:mt-6 md:text-end text-green-700 xl:text-3xl font-semibold underline flex-1"
                       href="/{{app()->getLocale()}}/forum/index">{{__('forum_question.back')}}</a>
                </div>
            </div>
            <div class="lg:grid lg:grid-cols-5 flex flex-1 xl:mt-14">
                <form action="/{{app()->getLocale()}}/subject" method="post"
                      class="lg:col-span-3 flex-1 lg:items-center lg:mr-20">
                    @csrf
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="subject">{{__('forum_question.question')}}</label>
                        @error('subject')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <input class="border border-orange-500 rounded-xl py-2 px-3  @error('subject') outline outline-3 outline-red-600 @enderror text-gray-700 leading-tight focus:outline focus:outline-2 focus:outline-green-700 border focus:bg-orange-100"
                            name="subject" id="subject" type="text" placeholder="{{__('forum_question.question_placeholder')}}" value="{{$subject->subject}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl"
                               for="description">{{__('forum_question.description')}}</label>
                        @error('description')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <textarea
                            cols="30" rows="10"
                            class="border border-orange-500 rounded-xl @error('description') outline outline-3 outline-red-600 @enderror py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="description" id="description"
                            placeholder="{{__('forum_question.description_placeholder')}}">{{$subject->description}}</textarea>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="tag_id">{{__('forum_question.tag')}}</label>
                        <p>{{$subject->tag_id}}</p>
                        <select name="tag_id" id="tag_id"
                                class="appearance-none max-w-[50%] bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
                            @foreach($tags as $tag)
                                <option @selected($tag->id === $subject->tag_id)
                                    value="{{$tag->translation->where('locale',app()->getLocale())->first()->tag_id}}">{{mb_strtoupper($tag->translation->where('locale',app()->getLocale())->first()->name)}} {{mb_strtoupper($tag->translation->where('locale',app()->getLocale())->first()->tag_id)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-1 xl:justify-end">
                        <button
                            class="hover:text-green-700 flex-1 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold mt-4 xl:mt-0 xl:max-w-[40%]"
                            type="submit">{{__('forum_question.button')}}</button>
                    </div>
                </form>
                <x-login.commons.aside class="sr-only xl:not-sr-only lg:col-span-2"></x-login.commons.aside>
            </div>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>