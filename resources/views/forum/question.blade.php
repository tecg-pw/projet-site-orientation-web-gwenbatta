<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="question">
        <div class="px-10 xl:px-36">
            <div class="flex flex-col mb-14 xl:mb-28">
                <div class="flex flex-col xl:flex-row order-1">
                    <h2 class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 font-sans mt-6" aria-level="2" role="heading" id="question">
                        {{__('Poser une question')}}
                    </h2>
                    <a class="hover:text-orange-500 font-sans mt-3 xl:mt-6 xl:text-end text-green-700 xl:text-3xl font-semibold underline flex-1"
                       href="/forum/index">{{__('Retour au forum')}}</a>
                </div>
                <a class="text-green-500 font-sans font-light underline mt-8"
                   href="/">{{__('Techniques > Forum > Poser une question')}}</a>
            </div>
            <div class="xl:grid xl:grid-cols-5 flex flex-1 xl:mt-14">
                <form action="/" method="post" class="xl:col-span-3 flex-1 xl:items-center xl:mr-20">
                    @csrf
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questions">{{__('Question')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="questions" id="questions" type="text" placeholder="Comment vole les oiseaux ?">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questionsDescription">{{__('Description')}}</label>
                        <textarea
                            cols="30" rows="10"
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="questionsDescription" id="questionsDescription"
                            placeholder="Je décris ma question"></textarea>
                    </fieldset>
                    <div class="flex flex-1 xl:justify-end">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
                            type="submit" value="{{__('Poser ma question')}}">
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
