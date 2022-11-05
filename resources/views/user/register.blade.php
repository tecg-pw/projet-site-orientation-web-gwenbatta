<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="register">
        <div class="px-36">
            <div class="flex flex-col">
                <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6" role="heading" aria-level="2" id="register">
                    {{__('Création de votre compte')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="font-sans text-green-700 self-center text-3xl font-semibold underline flex-1"
                   href="/user/login">{{__('J\'ai déjà un compte')}}</a>
            </div>
            <div class="flex mt-14">
                <form class="flex-1" action="/" method="post">
                    @csrf
                    <div class="flex flex-1">
                        <fieldset class="flex flex-1 flex-col mr-10 mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('Nom')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Caron" name="name" id="name" type="text">
                        </fieldset>
                        <fieldset class="flex flex-1 flex-col mb-8">
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
                        <label class="text-green-500 text-2xl" for="password">{{__('Mot de passe')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="password" id="password" type="password" placeholder="azerty">
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input class="mt-16 font-sans text-center text-white-100 bg-green-700 px-16 py-3 rounded-2xl text-xl font-semibold"
                               type="submit" value="{{__('Créer un compte')}}">
                    </div>
                </form>
            </div>
        </div>
        <x-login.commons.aside></x-login.commons.aside>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
