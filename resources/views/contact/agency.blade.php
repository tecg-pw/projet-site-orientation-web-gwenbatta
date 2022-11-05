<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 flex justify-center mb-36" aria-labelledby="contact">
        <div class="px-36">
            <div class="flex flex-col">
                <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6" role="heading" aria-level="2" id="contact">
                    {{__('Contactez-nous !')}}
                </h2>
                <a class="text-green-500 font-sans font-light underline mt-8" href="/">{{__('Contact > Étudiant')}}</a>
            </div>
            <div class="flex flex-1">
                <a class="font-sans text-green-700 text-3xl font-semibold underline self-center mr-28"
                   href="/contact/student">{{__('Étudiants')}}</a>
                <a class="bg-orange-200 font-sans text-green-700 self-center text-3xl font-semibold underline mr-28 py-2.5 px-6 flex-1"
                   href="/contact/agency">{{__('Entreprises')}}</a>
            </div>
            <div class="flex mt-14">
                <form action="/" method="post" enctype="multipart/form-data">
                    @csrf
                        <fieldset class="flex flex-col mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('Nom de l\'entreprise')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Whitecube" name="name" id="name" type="text">
                        </fieldset>
                        <fieldset class="flex flex-col mb-8">
                            <label class="text-green-500 text-2xl" for="surname">{{__('Nom du maître du stage')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="surname" id="surname" type="text" placeholder="Toon VAN DEN BOS">
                        </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('Email')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="title">{{__('Titre')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="title" id="title" type="text" placeholder="{{__('Je propose un stage')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="offer">{{__('Description de l\'offre')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="offer" id="offer" cols="30" rows="10"
                            placeholder="{{__('Mon offre de stage')}}"></textarea>
                    </fieldset>
                    <div>
                        <span class="text-green-500 text-2xl">{{__('Aptitude nécessaire à la mission')}}</span>
                        <div class="flex mt-6">
                        <fieldset class="pr-12 border-r border-orange-500 mr-12">
                            <span class="text-green-500 text-2xl ">{{__('Langage de programmation')}}</span><br>
                            <input class="mb-2.5 mt-6" type="checkbox" name="html" id="html">
                            <label class="text-xl" for="html">{{__('HTML5')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="css" id="css">
                            <label class="text-xl" for="css">{{__('CSS3')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="laravel" id="laravel">
                            <label class="text-xl" for="laravel">{{__('Laravel')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="wordpress" id="wordpress">
                            <label class="text-xl" for="wordpress">{{__('Wordpress')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="php" id="php">
                            <label class="text-xl" for="php">{{__('PHP')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="js" id="js">
                            <label class="text-xl" for="js">{{__('Javascript')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="flutter" id="flutter">
                            <label class="text-xl" for="flutter">{{__('Flutter')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="other-languges" id="other-languges">
                            <label class="text-xl" for="other-languges">{{__('Autres : ')}}</label><br>
                        </fieldset>
                        <fieldset>
                            <span class="text-green-500 text-2xl">{{__('Maîtrise des logiciels')}}</span><br>
                            <input class="mb-2.5 mt-6" type="checkbox" name="ill" id="ill">
                            <label class="text-xl" for="ill">{{__('Illustrator')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="ps" id="ps">
                            <label class="text-xl" for="ps">{{__('Photoshop')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="xd" id="xd">
                            <label class="text-xl" for="xd">{{__('Adobe XD')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="id" id="id">
                            <label class="text-xl" for="id">{{__('Indesign')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="figma" id="figma">
                            <label class="text-xl" for="figma">{{__('Figma')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="sketch" id="sketch">
                            <label class="text-xl" for="sketch">{{__('Sketch')}}</label><br>
                            <input class="mb-2.5" type="checkbox" name="other-software" id="other-software">
                            <label class="text-xl" for="other-software">{{__('Autres : ')}}</label><br>
                        </fieldset>
                        </div>
                    </div>
                    <fieldset class="flex flex-col mb-8 mt-4">
                        <p class="text-green-500 text-2xl">{{__('Votre offre de stage')}}</p>
                        <div class="flex gap-4 items-center">
                            <label for="internship" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center py-5 px-32">
                                    <span class="text-xl text-gray-500">{{__('Glisser un PDF')}} </span>
                                </span>
                                <input id="internship" type="file" class="hidden" />
                            </label>
                            <img class="rounded-full -order-2" src="https://placehold.jp/108x108.png" alt="">
                        </div>
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input class="font-sans text-center text-white-100 bg-green-700 px-16 py-3 rounded-2xl text-xl font-semibold"
                               type="submit" value="{{__('Envoyer')}}">
                    </div>
                </form>
            </div>
        </div>
        <x-contact.commons.aside></x-contact.commons.aside>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
