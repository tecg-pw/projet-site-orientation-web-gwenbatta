<x-commons.navigation :page="__('login_register.register_title')"></x-commons.navigation>
<main id="content">
    <section class="px-10 lg:px-16 xl:px-32 2xl:px-48 py-20 items-center xl:gap-24 flex justify-center" aria-labelledby="register">
        <div class="px-10">
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-3xl xl:text-4xl 2xl:text-5xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6" role="heading" aria-level="2" id="register">
                    {{__('login_register.register_title')}}
                </h2>
            </div>
            <div class="flex flex-1">
                <a class="hover:text-orange-500 font-sans text-green-700 self-center md:text-xl xl:text-xl 2xl:text-2xl font-semibold underline flex-1"
                   href="/{{app()->getLocale()}}/user/login">{{__('login_register.login_link')}}</a>
            </div>
            <div class="flex mt-14">
                <form class="flex-1" action="/{{app()->getLocale()}}/register" method="post">
                    @csrf
                    <div class="xl:flex-row flex-col flex flex-1">
                        <div class="flex flex-1 flex-col xl:mr-10 mb-8">
                            <label class="text-green-500 @error('name') text-red-400 @enderror text-lg xl:text-2xl 2xl:text-3xl" for="name">{{__('login_register.name')}}</label>
                            @error('name')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                placeholder="Caron" dusk="name" name="name" id="name" type="text" value="{{old('name')}}">
                        </div>
                        <div class="flex flex-1 flex-col mb-8">
                            <label class="2xl:text-3xl text-green-500 @error('firstname') text-red-400 @enderror text-lg xl:text-2xl" for="firstname">{{__('login_register.firstname')}}</label>
                            @error('firstname')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="firstname" id="firstname" dusk="firstname" type="text" placeholder="Jordan" value="{{old('firstname')}}">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="2xl:text-3xl text-green-500 @error('email') text-red-400 @enderror text-lg xl:text-2xl" for="email">{{__('login_register.mail')}}</label>
                        @error('email')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight @error('email') outline-red-600 @enderror focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" dusk="email-field" id="email" type="email" placeholder="email@example.be" value="{{old('email')}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="2xl:text-3xl text-green-500 @error('password') text-red-400 @enderror text-lg xl:text-2xl" for="password">
                            {{__('login_register.password')}}
                        </label>
                        @error('password')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div class="flex-1 px-3 items-center  @error('password') outline-red-600 @enderror flex border leading-tight border-orange-500 rounded-xl focus-within:border focus-within:border-2 focus-within:border-green-700 focus-within:bg-orange-100">
                            <input
                                class="password outline-none font-mono focus:bg-orange-100 py-2 text-gray-700 h-full w-full "
                                name="password" dusk="password-field" id="password" type="password" placeholder="azerty">
                            <span class="show-password cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="20" height="20"
                             class="fill-orange">
                                <path class="show"
                                      d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                <path class="hidden hide"
                                      d="M10.94,6.08A6.93,6.93,0,0,1,12,6c3.18,0,6.17,2.29,7.91,6a15.23,15.23,0,0,1-.9,1.64,1,1,0,0,0-.16.55,1,1,0,0,0,1.86.5,15.77,15.77,0,0,0,1.21-2.3,1,1,0,0,0,0-.79C19.9,6.91,16.1,4,12,4a7.77,7.77,0,0,0-1.4.12,1,1,0,1,0,.34,2ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.39,6.8a14.62,14.62,0,0,0-3.31,4.8,1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20a9.26,9.26,0,0,0,5.05-1.54l3.24,3.25a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.36,9.19,2.45,2.45A1.81,1.81,0,0,1,12,14a2,2,0,0,1-2-2A1.81,1.81,0,0,1,10.07,11.48ZM12,18c-3.18,0-6.17-2.29-7.9-6A12.09,12.09,0,0,1,6.8,8.21L8.57,10A4,4,0,0,0,14,15.43L15.59,17A7.24,7.24,0,0,1,12,18Z"/>
                        </svg>
                    </span>
                        </div>
                    </div>
                    <div class="flex mb-8 items-center gap-3">
                        <input class="checkbox mb-1 absolute cursor-pointer opacity-0 z-30 w-6 h-6" type="checkbox"
                        name="newsletter"
                               id="newsletter">
                        <span class="notCheck">
                                                    <svg data-name="Composant 7 – 1"
                                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24">
                                                      <g data-name="Rectangle 275" fill="#fff" stroke="#707070" stroke-width="1">
                                                        <rect width="24" height="24" rx="6" stroke="none"/>
                                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="none"/>
                                                      </g>
                                                      <path id="d62ff70270774c6e6e679f7a8c643f83"
                                                            d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                      <path id="d62ff70270774c6e6e679f7a8c643f83-2" data-name="d62ff70270774c6e6e679f7a8c643f83"
                                                            d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                    </svg>
                                                </span>
                        <span class="isCheck">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                                      <g data-name="Composant 7 – 2" transform="translate(0.5 0.5)">
                                                        <g data-name="Rectangle 275" transform="translate(0 0)" fill="#da953a" stroke="#da953a" stroke-width="1">
                                                          <rect width="24" height="24" rx="6" stroke="none"/>
                                                          <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="none"/>
                                                        </g>
                                                        <path d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z" transform="translate(-2 -2)" fill="#da953a" stroke="#da953a" stroke-width="1"/>
                                                        <path data-name="d62ff70270774c6e6e679f7a8c643f83" d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z" transform="translate(-2 -2)" fill="#fff" stroke="#da953a" stroke-width="1"/>
                                                      </g>
                                                    </svg>
                                                </span>
                        <label class="2xl:text-3xl mt-1 text-green-500 text-lg xl:text-2xl"
                               for="newsletter">{{__('login_register.newsletter')}}</label>
                    </div>
                    <div class="flex flex-1 justify-end mt-8 xl:mt-0">
                        <input
                            class="2xl:text-3xl hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 md:text-xl xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
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
