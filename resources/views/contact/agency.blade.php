<x-commons.navigation :page="__('contact_page.agency_link')"></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-20 xl:mb-0 xl:flex lg:grid lg:grid-cols-9 " aria-labelledby="contact">
        <div class="xl:px-32 2xl:pl-48 mt-16 flex-1 lg:col-span-4">
            <div class="px-10 xl:px-0 flex flex-col">
                <h2 class="text-2xl xl:text-4xl 2xl:text-5xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6"
                    id="contact" role="heading" aria-level="2">
                    {{__('contact_page.contact_title')}}
                </h2>
            </div>
            <div class="flex flex-1 justify-between px-10 xl:px-0">
                <a class="font-sans text-green-700 xl:text-2xl 2xl:text-3xl text-xl rounded-lg font-semibold underline  py-2.5 px-6"
                   href="/{{app()->getLocale()}}/contact/student">{{__('contact_page.student_link')}}</a>
                <a class="hover:text-orange-500 bg-orange-200 rounded-lg py-2.5 px-6 font-sans text-green-700 text-en xl:text-start self-center xl:text-2xl 2xl:text-3xl font-semibold underline py-2.5 "
                   href="/{{app()->getLocale()}}/contact/agency">{{__('contact_page.agency_link')}}</a>
            </div>
            @if(session('success'))
                <div class="mt-12 mb-4 bg-orange-200 rounded-lg flex items-center gap-x-2 px-4 py-2.5">
                    <svg class="h-8 w-8 text-green-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M9 12l2 2l4 -4"/>
                    </svg>
                    <p class="mt-1 text-green-700 text-xl">{{session('success')}}</p>
                </div>
            @else
                <div class="flex  mt-14">
                    <form action="/{{app()->getLocale()}}/contact/agency" method="post" class="flex-1 px-10 xl:px-0"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="slide-in flex flex-col xl:flex-row flex-1">
                            <div class="flex flex-col flex-1 xl:mr-10 mb-8">
                                <label class="text-green-500 text-lg xl:text-2xl 2xl:text-3xl"
                                       for="name">{{__('contact_page.agency_name')}}</label>
                                @error('name')
                                <div class="flex gap-1.5 items-center">
                                    <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                                </div>
                                @enderror
                                <input
                                    class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                    value="{{old('name')}}"
                                    placeholder="Whitecube" name="name" id="name" type="text">
                            </div>
                            <div class="flex flex-col flex-1 mb-8">
                                <label class="text-green-500 text-lg xl:text-2xl 2xl:text-3xl"
                                       for="name_supervisor">{{__('contact_page.agency_supervisor_name')}}</label>
                                @error('name_supervisor')
                                <div class="flex gap-1.5 items-center">
                                    <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                                </div>
                                @enderror
                                <input
                                    class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                    value="{{old('name_supervisor')}}"
                                    name="name_supervisor" id="name_supervisor" type="text"
                                    placeholder="Toon Van den Bos">
                            </div>
                        </div>
                        <div class="slide-in flex flex-col mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl 2xl:text-3xl"
                                   for="email">{{__('contact_page.mail')}}</label>
                            @error('email')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                value="{{old('email')}}"
                                name="email" id="email" type="email" placeholder="email@example.be">
                        </div>
                        <div class="slide-in flex flex-col mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl 2xl:text-3xl"
                                   for="subject">{{__('contact_page.agency_title')}}</label>
                            @error('subject')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                value="{{old('subject')}}"
                                name="subject" id="subject" type="text"
                                placeholder="{{__('contact_page.agency_title_value')}}">
                        </div>
                        <div class="slide-in flex flex-col mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl 2xl:text-3xl"
                                   for="message">{{__('contact_page.agency_description')}}</label>
                            @error('message')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <textarea
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="message" id="message" cols="30" rows="10"
                                placeholder="{{__('contact_page.agency_description_value')}}">{{old('message')}}</textarea>
                        </div>
                        <div class="slide-in">
                        <span class="text-green-500 text-lg mb-12 xl:text-2xl 2xl:text-3xl">{{__('contact_page.agency_aptitude_value')}}</span>
                            <div class="flex mt-6 ">
                                <div class="border-r border-orange-500 pr-20">
                                    <span class="text-green-500 xl:text-xl 2xl:text-2xl mb-4">{{__('contact_page.agency_language')}}</span><br>
                                    <div class="flex flex-col mt-4">
                                        @foreach($languages as $language)
                                            <div class="flex items-center gap-x-2">
                                                <input class="checkbox mb-1 absolute cursor-pointer opacity-0 z-30 w-6 h-6" type="checkbox" @if(old('softwares'))@checked(in_array($language->translation->where('locale',app()->getLocale(),)->first()->slug,old('languages')))@endif
                                                       value="{{$language->translation->where('locale',app()->getLocale(),)->first()->slug}}"
                                                       name="languages[]"
                                                       id="{{$language->translation->where('locale',app()->getLocale(),)->first()->slug}}">
                                                <span class="notCheck">
                                                    <svg data-name="Composant 7 – 1"
                                                           xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                           viewBox="0 0 24 24">
                                                      <g data-name="Rectangle 275" fill="#fff" stroke="#707070" stroke-width="1">
                                                        <rect width="24" height="24" rx="6" stroke="none"/>
                                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="none"/>
                                                      </g>
                                                      <path
                                                            d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                      <path  data-name="d62ff70270774c6e6e679f7a8c643f83"
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
                                                <label class="text-lg xl:text-xl 2xl:text-2xl relative"
                                                       for="{{$language->translation->where('locale',app()->getLocale(),)->first()->slug}}">{{$language->translation->where('locale',app()->getLocale(),)->first()->name}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pl-20">
                                    <span class="text-green-500 xl:text-xl 2xl:text-2xl">{{__('contact_page.agency_software')}}</span><br>
                                    <div class="flex flex-col mt-4">
                                        @foreach($softwares as $software)
                                            <div class="flex items-center gap-x-2">
                                                <input class="checkbox mb-1 absolute cursor-pointer opacity-0 z-30 w-6 h-6" type="checkbox"
                                                       name="softwares[]" @if(old('softwares'))@checked(in_array($software->translation->where('locale',app()->getLocale(),)->first()->slug,old('softwares')))@endif
                                                       value="{{$software->translation->where('locale',app()->getLocale(),)->first()->slug}}"
                                                       id="{{$software->translation->where('locale',app()->getLocale(),)->first()->slug}}">
                                                <span class="notCheck">
                                                    <svg data-name="Composant 7 – 1"
                                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24">
                                                      <g data-name="Rectangle 275" fill="#fff" stroke="#707070" stroke-width="1">
                                                        <rect width="24" height="24" rx="6" stroke="none"/>
                                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="none"/>
                                                      </g>
                                                      <path
                                                            d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                      <path data-name="d62ff70270774c6e6e679f7a8c643f83"
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
                                                        <path  d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z" transform="translate(-2 -2)" fill="#da953a" stroke="#da953a" stroke-width="1"/>
                                                        <path  data-name="d62ff70270774c6e6e679f7a8c643f83" d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z" transform="translate(-2 -2)" fill="#fff" stroke="#da953a" stroke-width="1"/>
                                                      </g>
                                                    </svg>
                                                </span>
                                                <label class="text-lg xl:text-xl 2xl:text-2xl"
                                                       for="{{$software->translation->where('locale',app()->getLocale(),)->first()->slug}}">{{$software->translation->where('locale',app()->getLocale(),)->first()->name}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-in flex flex-col mb-8 mt-10">
                            <p class="text-green-500 text-lg mb-2 xl:text-2xl 2xl:text-3xl">{{__('contact_page.agency_offer_title')}}</p>
                            <div class="flex items-center justify-center w-full">
                                <label for="pdf" class="flex flex-col items-center justify-center w-full h-64 border-2 border-orange-500 rounded-lg cursor-pointer bg-yellow-100 hover:bg-gray-100">
                                    <span class=" flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        <span class="mb-2 text-sm text-green-700"><span class="font-semibold xl:text-lg 2xl:text-xl">{{__('contact_page.agency_offer')}}</span></span>
                                        <span class="textInput"></span>
                                    </span>
                                    <input id="pdf" name="pdf" type="file"/>
                                </label>
                            </div>
                        </div>
                        <div class="slide-in flex flex-1 justify-end mb-20">
                            <input
                                class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl 2xl:text-3xl flex-1 xl:flex-initial"
                                type="submit" value="{{__('contact_page.contact_button')}}">
                        </div>
                    </form>
                </div>
            @endif
        </div>
        <x-contact.commons.aside :coordinates="$coordinates"></x-contact.commons.aside>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>


