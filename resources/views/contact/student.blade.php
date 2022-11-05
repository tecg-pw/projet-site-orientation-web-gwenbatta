<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 flex justify-center" aria-labelledby="contact">
        <div class="px-36">
            <div class="flex flex-col">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6" id="contact" role="heading" aria-level="2">
                {{__('Contactez-nous !')}}
            </h2>
            <a class="text-green-500 text-2xl font-sans font-light underline mt-8" href="/">{{__('Contact > Étudiant')}}</a>
            </div>
            <div class="flex flex-1">
                <a class="bg-orange-200 font-sans text-green-700 text-3xl font-semibold underline mr-28 py-2.5 px-6"
                   href="/contact/student">{{__('Étudiants')}}</a>
                <a class="font-sans text-green-700 self-center text-3xl font-semibold underline flex-1"
                   href="/contact/agency">{{__('Entreprises')}}</a>
            </div>
            <div class="flex  mt-14">
                <form action="/" method="post" class="flex-1">
                    @csrf
                    <div class="flex flex-1">
                        <fieldset class="flex flex-col flex-1 mr-10 mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('Nom')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Caron" name="name" id="name" type="text">
                        </fieldset>
                        <fieldset class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-2xl" for="surname">{{__('Prénom')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="surname" id="surname" type="text" placeholder="Jordan">
                        </fieldset>
                    </div>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('Email')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="object">{{__('Objet')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="object" id="object" type="text" placeholder="{{__('Je pose une question')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="message">{{__('Message')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="message" id="message" cols="30" rows="10"
                            placeholder="{{__('Mon message')}}"></textarea>
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
