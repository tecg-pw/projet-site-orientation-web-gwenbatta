<x-commons.navigation :page="__('login_register.reset_title')"></x-commons.navigation>
<main id="content">
    <section class=" px-10 lg:px-16 xl:px-32 2xl:px-48 py-20 items-center xl:gap-24 flex justify-center" aria-labelledby="login">
        <div class="px-10">
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-3xl xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-7 mb-3 font-sans order-1 mt-6" role="heading" aria-level="2" id="login">
                    {{__('login_register.reset_title')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="hover:text-orange-500 font-sans text-green-700 self-center md:text-xl xl:text-xl font-semibold underline flex-1"
                   href="/{{app()->getLocale()}}/user/register">{{__('login_register.login_back')}}</a>
            </div>
            <div class="flex mt-14">
                <form action="/login" method="post" class="flex flex-col xl:block min-w-full">
                    @csrf
                    <div class="flex flex-col mb-4">
                        <label class="text-green-500 @error('email') text-red-400 @enderror text-lg xl:text-2xl" for="email">{{__('login_register.mail')}}</label>
                        @error('email')
                        <p class="text-red-400 my-2">{{ $message }}</p>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight @error('email') outline-red-600 @enderror focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" dusk="email-field" id="email" type="email" placeholder="email@example.be" value="{{old('email')}}">
                    </div>
                    <div class="flex flex-1 justify-end mt-10  xl:mt-0">
                        <button class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
                                type="submit" dusk="submit-credentials">{{__('login_register.reset_button')}}</button>
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
