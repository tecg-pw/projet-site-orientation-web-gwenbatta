<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-20 xl:mb-0 xl:flex lg:grid lg:grid-cols-9 lg:items-center lg:justify-center justify-center" aria-labelledby="contact">
        <div class="xl:px-36 2xl:pl-48 mt-10 flex-1 lg:col-span-4">
            <div class="px-10 xl:px-0 flex flex-col">
                <h2 class="text-2xl xl:text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6"
                    id="contact" role="heading" aria-level="2">
                    {{__('contact_page.contact_title')}}
                </h2>
            </div>
            <div class="flex flex-1 justify-between px-10 xl:px-0">
                <a class="hover:text-orange-500  font-sans text-green-700 text-xl rounded-lg font-semibold underline  py-2.5 "
                   href="/{{app()->getLocale()}}/contact/student">{{__('contact_page.student_link')}}</a>
                <a class=" font-sans text-green-700 bg-orange-200 rounded-lg text-en xl:text-start self-center text-xl font-semibold underline py-2.5 px-6"
                   href="/{{app()->getLocale()}}/contact/agency">{{__('contact_page.agency_link')}}</a>
            </div>
            <div class="flex  mt-14">
                <form action="/" method="post" class="flex-1 px-10 xl:px-0">
                    @csrf
                    <div class="flex flex-col xl:flex-row flex-1">
                        <div class="flex flex-col flex-1 xl:mr-10 mb-8">
                            <label class="text-green-500 text-lg mb-2 xl:text-2xl"
                                   for="name">{{__('contact_page.agency_name')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                placeholder="Whitecube" name="name" id="name" type="text">
                        </div>
                        <div class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-lg mb-2 xl:text-2xl"
                                   for="surname">{{__('contact_page.agency_supervisor_name')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="surname" id="surname" type="text" placeholder="Toon VAN DEN BOS">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl"
                               for="email">{{__('contact_page.mail')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl"
                               for="title">{{__('contact_page.agency_title')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="title" id="title" type="text" placeholder="{{__('contact_page.agency_title_value')}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg mb-2 xl:text-2xl"
                               for="offer">{{__('contact_page.agency_description')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="offer" id="offer" cols="30" rows="10"
                            placeholder="{{__('agency_description_value')}}"></textarea>
                    </div>
                    <div>
                        <span
                            class="text-green-500 text-lg mb-2 xl:text-2xl">{{__('contact_page.agency_aptitude_value')}}</span>
                        <div class="flex mt-2">
                            <div class="pr-12 border-r border-orange-500 mr-12">
                                <span
                                    class="text-green-500 xl:text-xl ">{{__('contact_page.agency_language')}}</span><br>
                                <input class="mb-2.5 mt-6" type="checkbox" name="html" id="html">
                                <label class="xl:text-xl" for="html">{{__('contact_page.agency_html')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="css" id="css">
                                <label class="xl:text-xl" for="css">{{__('contact_page.agency_css')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="laravel" id="laravel">
                                <label class="xl:text-xl"
                                       for="laravel">{{__('contact_page.agency_laravel')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="wordpress" id="wordpress">
                                <label class="xl:text-xl"
                                       for="wordpress">{{__('contact_page.agency_wordpress')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="php" id="php">
                                <label class="xl:text-xl" for="php">{{__('contact_page.agency_php')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="js" id="js">
                                <label class="xl:text-xl" for="js">{{__('contact_page.agency_js')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="flutter" id="flutter">
                                <label class="xl:text-xl"
                                       for="flutter">{{__('contact_page.agency_flutter')}}</label><br>
                            </div>
                            <div>
                                <span
                                    class="text-green-500 xl:text-xl">{{__('contact_page.agency_software')}}</span><br>
                                <input class="mb-2.5 mt-6" type="checkbox" name="ill" id="ill">
                                <label class="xl:text-xl" for="ill">{{__('contact_page.agency_ill')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="ps" id="ps">
                                <label class="xl:text-xl" for="ps">{{__('contact_page.agency_ps')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="xd" id="xd">
                                <label class="xl:text-xl" for="xd">{{__('contact_page.agency_xd')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="id" id="id">
                                <label class="xl:text-xl" for="id">{{__('contact_page.agency_id')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="figma" id="figma">
                                <label class="xl:text-xl" for="figma">{{__('contact_page.agency_fig')}}</label><br>
                                <input class="mb-2.5" type="checkbox" name="sketch" id="sketch">
                                <label class="xl:text-xl" for="sketch">{{__('contact_page.agency_sketch')}}</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mb-8 mt-6">
                        <p class="text-green-500 text-lg mb-2 xl:text-2xl">{{__('contact_page.agency_offer_title')}}</p>
                        <div class="flex gap-x-10">
                            <label for="internship"
                                   class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center px-12 py-3 xl:py-3 xl:px-16">
                                    <span
                                        class="xl:text-xl text-center text-gray-500">{{__('contact_page.agency_offer')}} </span>
                                </span>
                                <input id="internship" type="file" class="hidden"/>
                            </label>
                            <img class="sr-only xl:not-sr-only rounded-full -order-2"
                                 src="https://placehold.jp/108x108.png" alt="">
                            <img class="xl:sr-only rounded-full -order-2" src="https://placehold.jp/78x78.png" alt="">
                        </div>
                    </div>
                    <div class="flex flex-1 justify-end mb-20">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold md:text-xl xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
                            type="submit" value="{{__('contact_page.contact_button')}}">
                    </div>
                </form>
            </div>
        </div>
        <x-contact.commons.aside :coordinates="$coordinates"></x-contact.commons.aside>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>


