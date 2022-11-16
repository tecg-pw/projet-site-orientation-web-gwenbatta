<x-commons.navigation></x-commons.navigation>
<main>
    <section class="mt-20 mb-36 flex justify-center" aria-labelledby="login">
        <div class="xl:px-36 px-10">
            <div class="flex flex-col">
                <h2 class="text-2xl xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-7 mb-3 font-sans order-1 mt-6" role="heading" aria-level="2" id="login">
                    {{__('Connexion à votre compte')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="hover:text-orange-500 font-sans text-green-700 self-center xl:text-xl font-semibold underline flex-1"
                   href="/user/register">{{__('Je n\'ai pas de compte')}}</a>
            </div>
            <div class="flex mt-14">
                <form action="/" method="post" class="flex flex-col xl:block min-w-full">
                    @csrf
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="email">{{__('Email')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="password">{{__('Mot de passe')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="password" id="password" type="password" placeholder="azerty">
                        <a class="hover:text-orange-500 mt-2 text-green-700 underline font-sans self-end text-sm"
                           href="/user/password">{{('Mot de passe oublié')}}</a>
                    </fieldset>
                    <fieldset class="flex flex-row-reverse justify-end gap-4">
                        <label class="text-green-500 text-lg xl:text-2xl mr-4" for="remindme">{{__('Se souvenir de moi')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="remindme" id="remindme" type="checkbox">
                    </fieldset>
                    <div class="flex flex-1 justify-end mt-8 xl:mt-0">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
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
