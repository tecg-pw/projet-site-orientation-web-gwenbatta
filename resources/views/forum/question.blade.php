<x-commons.navigation/>
<main>
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="question">
        <div class="px-36">
            <div class="flex flex-col mb-28">
                <div class="flex order-1">
                    <h2 class="text-4xl uppercase font-bold text-yellow-800 font-sans mt-6" aria-level="2" role="heading" id="question">
                        {{__('Poser une question')}}
                    </h2>
                    <a class="font-sans mt-6 text-end text-green-700 text-3xl font-semibold underline flex-1"
                       href="/forum/index">{{__('Retour au forum')}}</a>
                </div>
                <a class="text-green-500 font-sans font-light underline mt-8"
                   href="/">{{__('Techniques > Forum > Poser une question')}}</a>
            </div>
            <div class="grid grid-cols-5 mt-14 items-center">
                <form action="/" method="post" class="col-span-3 items-center mr-20">
                    @csrf
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questions">{{__('Question')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="questions" id="questions" type="text" placeholder="Comment vole les oiseaux ?">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questionsDescription">{{__('Description')}}</label>
                        <textarea
                            cols="30" rows="10"
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="questionsDescription" id="questionsDescription"
                            placeholder="Je décris ma question"></textarea>
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input
                            class="mt-16 font-sans text-center text-white-100 bg-green-700 px-16 py-3 rounded-2xl text-xl font-semibold"
                            type="submit" value="{{__('Poser ma question')}}">
                    </div>
                </form>
                <x-login.commons.aside class="col-span-2"></x-login.commons.aside>
            </div>
        </div>

    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
