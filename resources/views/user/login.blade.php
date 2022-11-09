<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="login">
        <div class="px-36">
            <div class="flex flex-col">
                <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6" role="heading" aria-level="2" id="login">
                    {{__('Connexion à votre compte')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="hover:text-orange-500 font-sans text-green-700 self-center text-xl font-semibold underline flex-1"
                   href="/user/register">{{__('Je n\'ai pas de compte')}}</a>
            </div>
            <div class="flex mt-14">
                <form action="/" method="post" class="min-w-full">
                    @csrf
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('Email')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="password">{{__('Mot de passe')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="password" id="password" type="password" placeholder="azerty">
                        <a class="hover:text-orange-500 mt-2 text-green-700 underline font-sans self-end"
                           href="/user/password">{{('Mot de passe oublié')}}</a>
                    </fieldset>
                    <fieldset class="flex flex-row-reverse justify-end gap-4">
                        <label class="text-green-500 text-2xl mr-4" for="remindme">{{__('Se souvenir de moi')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="remindme" id="remindme" type="checkbox">
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input
                            class="hover:bg-white-100 hover:text-green-700 border-2 border-green-700 mt-16 font-sans text-center text-white-100 bg-green-700 px-16 py-3 rounded-2xl text-xl font-semibold"
                            type="submit" value="{{__('Se connecter')}}">
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
