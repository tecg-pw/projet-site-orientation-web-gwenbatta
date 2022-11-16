<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="contact">
        <div class="px-10 xl:pl-36 xl:pr-20">
            <div class="flex flex-col">
                <h2 class="text-2xl xl:text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6"
                    id="contact" role="heading" aria-level="2">
                    {{__('Contactez-nous !')}}
                </h2>
                <a class="text-green-500 text-lg xl:text-2xl font-sans font-light underline mt-8"
                   href="/">{{__('Contact > Étudiant')}}</a>
            </div>
            <div class="flex flex-1 justify-between xl:justify-start">
                <a class="hover:text-orange-500 font-sans text-green-700 text-xl rounded-lg font-semibold underline xl:mr-28 py-2.5"
                   href="/contact/student">{{__('Étudiants')}}</a>
                <a class="bg-orange-200 rounded-lg font-sans text-green-700 text-end xl:text-start self-center text-xl font-semibold underline xl:flex-1 py-2.5 px-6"
                   href="/contact/agency">{{__('Entreprises')}}</a>
            </div>
            <div class="flex  mt-14">
                <form action="/" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl" for="name">{{__('Nom de l\'entreprise')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            placeholder="Whitecube" name="name" id="name" type="text">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl" for="surname">{{__('Nom du maître du stage')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="surname" id="surname" type="text" placeholder="Toon VAN DEN BOS">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl" for="email">{{__('Email')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl" for="title">{{__('Titre')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="title" id="title" type="text" placeholder="{{__('Je propose un stage')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl" for="offer">{{__('Description de l\'offre')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="offer" id="offer" cols="30" rows="10"
                            placeholder="{{__('Mon offre de stage')}}"></textarea>
                    </fieldset>
                    <div>
                        <span class="text-green-500 text-lg mb-2 xl:text-2xl">{{__('Aptitude nécessaire à la mission')}}</span>
                        <div class="flex mt-2">
                            <fieldset class="pr-12 border-r border-orange-500 mr-12">
                                <span class="text-green-500 xl:text-xl ">{{__('Langage de programmation')}}</span><br>
                                <input class="mb-2.5 mt-6" type="checkbox" name="html" id="html">
                                <label class="xl:text-xl" for="html">{{__('HTML5')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="css" id="css">
                                <label class="xl:text-xl" for="css">{{__('CSS3')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="laravel" id="laravel">
                                <label class="xl:text-xl" for="laravel">{{__('Laravel')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="wordpress" id="wordpress">
                                <label class="xl:text-xl" for="wordpress">{{__('Wordpress')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="php" id="php">
                                <label class="xl:text-xl" for="php">{{__('PHP')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="js" id="js">
                                <label class="xl:text-xl" for="js">{{__('Javascript')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="flutter" id="flutter">
                                <label class="xl:text-xl" for="flutter">{{__('Flutter')}}</label><br>
                            </fieldset>
                            <fieldset>
                                <span class="text-green-500 xl:text-xl">{{__('Maîtrise des logiciels')}}</span><br>
                                <input class="mb-2.5 mt-6" type="checkbox" name="ill" id="ill">
                                <label class="xl:text-xl" for="ill">{{__('Illustrator')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="ps" id="ps">
                                <label class="xl:text-xl" for="ps">{{__('Photoshop')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="xd" id="xd">
                                <label class="xl:text-xl" for="xd">{{__('Adobe XD')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="id" id="id">
                                <label class="xl:text-xl" for="id">{{__('Indesign')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="figma" id="figma">
                                <label class="xl:text-xl" for="figma">{{__('Figma')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="sketch" id="sketch">
                                <label class="xl:text-xl" for="sketch">{{__('Sketch')}}</label><br>
                            </fieldset>
                        </div>
                    </div>
                    <fieldset class="flex flex-col mb-8 mt-6">
                        <p class="text-green-500 text-lg mb-2 xl:text-2xl">{{__('Votre offre de stage')}}</p>
                        <div class="flex gap-4 items-center">
                            <label for="internship" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center px-12 py-3 xl:py-3 xl:px-16">
                                    <span class="xl:text-xl text-center text-gray-500">{{__('Glisser un PDF')}} </span>
                                </span>
                                <input id="internship" type="file" class="hidden" />
                            </label>
                            <img class="sr-only xl:not-sr-only rounded-full -order-2" src="https://placehold.jp/108x108.png" alt="">
                            <img class="xl:sr-only rounded-full -order-2" src="https://placehold.jp/78x78.png" alt="">
                        </div>
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
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
