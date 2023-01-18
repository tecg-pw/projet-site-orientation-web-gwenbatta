<x-commons.navigation :page="__('forum_question.title_modify')"></x-commons.navigation>
<main id="content">
    <div class="flex items-center px-10 2xl:px-48 xl:px-32 lg:px-16 mt-20">
        <a href="/{{app()->getLocale()}}/forum/index" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.forum')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/forum/question/modify/{{$subject->slug}}" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('forum_question.title_modify')}}
        </a>
    </div>
    <section class="mt-20 mb-36 flex " aria-labelledby="question">
        <div class="px-10 2xl:px-48 xl:px-32 lg:px-16 flex-1">
            <div class="flex flex-col mb-14 xl:mb-28">
                <div class="flex flex-col md:flex-row order-1">
                    <h2 class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-bold text-yellow-800 font-sans mt-6"
                        aria-level="2"
                        role="heading" id="question">
                        {{__('forum_question.title_modify')}}
                    </h2>
                    <a class="hover:text-orange-500 font-sans mt-3 md:text-xl self-end xl:mt-6 md:text-end text-green-700 xl:text-2xl 2xl:text-3xl font-semibold underline flex-1 2xl:text-3xl"
                       href="/{{app()->getLocale()}}/forum/index">{{__('forum_question.back')}}</a>
                </div>
            </div>
            <div class="lg:grid lg:grid-cols-5 flex flex-1 xl:mt-14">
                <form action="/{{app()->getLocale()}}/modify/{{$subject->slug}}" method="post"
                      class="lg:col-span-3 flex-1 lg:items-center lg:mr-20">
                    @csrf
                    <div class="slide-in flex flex-col mb-8">
                        <label class="text-green-500 @error('subject') text-red-400 @enderror text-lg xl:text-2xl 2xl:text-3xl" for="subject">{{__('forum_question.question')}}</label>
                        @error('subject')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <input class="2xl:text-xl border border-orange-500 rounded-xl py-2 px-3  @error('subject') outline outline-3 outline-red-600 @enderror text-gray-700 leading-tight focus:outline focus:outline-2 focus:outline-green-700 border focus:bg-orange-100"
                            name="subject" id="subject" type="text" placeholder="{{__('forum_question.question_placeholder')}}" value="{{old('subject')?:$subject->subject}}">
                    </div>
                    <div class="slide-in flex flex-col mb-8">
                        <label class="text-green-500 @error('description') text-red-400 @enderror text-lg xl:text-2xl 2xl:text-3xl"
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
                            class="2xl:text-xl border border-orange-500 rounded-xl @error('description') outline outline-3 outline-red-600 @enderror py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="description" id="description"
                            placeholder="{{__('forum_question.description_placeholder')}}">{{old('description')?:$subject->description}}</textarea>
                    </div>
                    <div class="slide-in flex flex-col mb-8">
                        <label class="text-green-500 @error('tag') text-red-400 @enderror text-lg xl:text-2xl 2xl:text-3xl" for="tag_id">{{__('forum_question.tag')}}</label>
                        <select name="tag_id" id="tag_id"
                                class="appearance-none max-w-[50%] bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
                            @foreach($tags as $tag)
                                <option @selected($tag->id === $subject->tag_id)
                                    value="{{$tag->translation->where('locale',app()->getLocale())->first()->tag_id}}">{{mb_strtoupper($tag->translation->where('locale',app()->getLocale())->first()->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="slide-in flex flex-1 xl:justify-end">
                        <button
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl 2xl:text-3xl flex-1 xl:flex-initial"
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
