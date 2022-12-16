<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-36 xl:px-36 2xl:px-48 px-10 flex 2xl:px-48 justify-center gap-x-10" aria-labelledby="register">
        <div>
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-3xl xl:text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6" role="heading" aria-level="2" id="register">
                    {{__('login_register.register_title')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="hover:text-orange-500 font-sans text-green-700 self-center md:text-xl xl:text-xl font-semibold underline flex-1"
                   href="/{{app()->getLocale()}}/user/login">{{__('login_register.login_link')}}</a>
            </div>
            <div class="flex mt-14">
                <form class="flex-1" action="/register" method="post">
                    @csrf
                    <div class="xl:flex-row flex-col flex flex-1">
                        <div class="flex flex-1 flex-col xl:mr-10 mb-8">
                            <label class="text-green-500 @error('name') text-red-400 @enderror text-lg xl:text-2xl" for="name">{{__('login_register.name')}}</label>
                            @error('name')
                            <p class="text-red-400 my-2">{{ $message }}</p>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                placeholder="Caron" dusk="name" name="name" id="name" type="text" value="{{old('name')}}">
                        </div>
                        <div class="flex flex-1 flex-col mb-8">
                            <label class="text-green-500 @error('firstname') text-red-400 @enderror text-lg xl:text-2xl" for="firstname">{{__('login_register.firstname')}}</label>
                            @error('firstname')
                            <p class="text-red-400 my-2">{{ $message }}</p>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="firstname" id="firstname" dusk="firstname" type="text" placeholder="Jordan" value="{{old('firstname')}}">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 @error('email') text-red-400 @enderror text-lg xl:text-2xl" for="email">{{__('login_register.mail')}}</label>
                        @error('email')
                        <p class="text-red-400 my-2">{{ $message }}</p>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight @error('email') outline-red-600 @enderror focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" dusk="email-field" id="email" type="email" placeholder="email@example.be" value="{{old('email')}}">
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
                    <div class="flex flex-1 justify-end mt-8 xl:mt-0">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 md:text-xl xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
                            type="submit" dusk="register-submit" value="{{__('login_register.register_button')}}">
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
