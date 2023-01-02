<x-commons.navigation :page="__('contact_page.student_link')"></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-20 xl:mb-0 xl:flex lg:grid lg:grid-cols-9 lg:items-center lg:justify-center justify-center" aria-labelledby="contact">
        <div class="xl:px-32 2xl:pl-48 mt-10 flex-1 lg:col-span-4">
            <div class="px-10 xl:px-0 flex flex-col">
                <h2 class="text-2xl xl:text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6"
                    id="contact" role="heading" aria-level="2">
                    {{__('contact_page.contact_title')}}
                </h2>
            </div>
            <div class="flex flex-1 justify-between px-10 xl:px-0">
                <a class="hover:text-orange-500 bg-orange-200 rounded-lg font-sans text-green-700 text-xl rounded-lg font-semibold underline  py-2.5 px-6"
                   href="/{{app()->getLocale()}}/contact/student">{{__('contact_page.student_link')}}</a>
                <a class=" font-sans text-green-700 text-en xl:text-start self-center text-xl font-semibold underline py-2.5 "
                   href="/{{app()->getLocale()}}/contact/agency">{{__('contact_page.agency_link')}}</a>
            </div>
            @if(session('success'))
                <div class="mt-12 mb-4 bg-orange-200 rounded-lg flex items-center gap-x-2 px-4 py-2.5">
                    <svg class="h-8 w-8 text-green-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <path d="M9 12l2 2l4 -4"/></svg>
                    <p class="mt-1 text-green-700 text-xl">{{session('success')}}</p>
                </div>
            @else
            <div class="flex  mt-14">
                <form action="/{{app()->getLocale()}}/contact/student" method="post" class="flex-1 px-10 xl:px-0">
                    @csrf
                    <div class="flex flex-col xl:flex-row flex-1">
                        <div class="flex flex-col flex-1 xl:mr-10 mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl" for="name">{{__('contact_page.student_name')}}</label>
                            @error('name')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100" value="{{old('name')}}"
                                placeholder="Caron" name="name" id="name" type="text">
                        </div>
                        <div class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl" for="firstname">{{__('contact_page.student_firstname')}}</label>
                            @error('firstname')
                            <div class="flex gap-1.5 items-center">
                                <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                            </div>
                            @enderror
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100" value="{{old('firstname')}}"
                                name="firstname" id="firstname" type="text" placeholder="Jordan">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="email">{{__('contact_page.mail')}}</label>
                        @error('email')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100" value="{{old('email')}}"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="subject">{{__('contact_page.student_object')}}</label>
                        @error('subject')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100" value="{{old('subject')}}"
                            name="subject" id="subject" type="text" placeholder="{{__('contact_page.student_object_value')}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="message">{{__('contact_page.student_message')}}</label>
                        @error('message')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="message" id="message" cols="30" rows="10"
                            placeholder="{{__('contact_page.student_message_value')}}">
                            {{old('message')}}
                        </textarea>
                    </div>
                    <div class="flex flex-1 justify-end mb-20">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
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

