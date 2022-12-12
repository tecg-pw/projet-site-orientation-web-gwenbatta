<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class=" xl:px-36 py-20 items-center gap-24 flex justify-center" aria-labelledby="login">
        <div class=" px-10">
            <div class="flex flex-col">
                <h2 class="text-2xl xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-7 mb-3 font-sans order-1 mt-6" role="heading" aria-level="2" id="login">
                    {{__('login_register.login_title')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="hover:text-orange-500 font-sans text-green-700 self-center xl:text-xl font-semibold underline flex-1"
                   href="/{{str_replace('_','-',app()->getLocale())}}/user/register">{{__('login_register.register_link')}}</a>
            </div>
            <div class="flex mt-14">
                <form action="/login" method="post" class="flex flex-col xl:block min-w-full">
                    @csrf
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 @error('email') text-red-400 @enderror text-lg xl:text-2xl" for="email">{{__('login_register.mail')}}</label>
                        @error('email')
                        <p class="text-red-400 my-2">{{ $message }}</p>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight @error('email') outline-red-600 @enderror focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" dusk="email-field" id="email" type="email" placeholder="email@example.be" value=" {{old('email')}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 @error('password') text-red-400 @enderror text-lg xl:text-2xl" for="password">{{__('login_register.password')}}</label>
                        @error('password')
                        <p class="text-red-400 my-2">{{ $message }}</p>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight @error('password') outline-red-600 @enderror focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="password" dusk="password-field" id="password" type="password" placeholder="azerty">
                        <a class="hover:text-orange-500 mt-2 text-green-700 underline font-sans self-end text-sm"
                           href="/{{app()->getLocale()}}/user/password">{{__('login_register.forgot')}}</a>
                    </div>
                    <div class="flex flex-row-reverse mb-8 justify-end gap-4">
                        <label class="text-green-500 text-lg xl:text-2xl mr-4" for="remindme">{{__('login_register.remind')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="remindme" id="remindme" type="checkbox">
                    </div>
                    <div class="flex flex-1 justify-end mt-10  xl:mt-0">
                        <button class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
                                type="submit" dusk="submit-credentials">{{__('login_register.login_button')}}</button>
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
