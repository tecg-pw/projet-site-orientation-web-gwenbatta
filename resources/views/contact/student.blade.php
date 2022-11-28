<x-commons.navigation></x-commons.navigation>
<main id="content">
    <section class="mt-20 mb-20 xl:mb-0 xl:flex justify-center" aria-labelledby="contact">
        <div class="xl:px-36">
            <div class="px-10 xl:px-0 flex flex-col">
                <h2 class="text-2xl xl:text-4xl uppercase font-bold text-yellow-800 mb-7 font-sans order-1 mt-6"
                    id="contact" role="heading" aria-level="2">
                    {{__('contact_page.contact_title')}}
                </h2>
                <a class="text-green-500 text-lg xl:text-2xl font-sans font-light underline mt-8"
                   href="/{{str_replace('_','-',app()->getLocale())}}">{{__('Contact > Étudiant')}}</a>
            </div>
            <div class="flex flex-1 px-10 xl:px-0">
                <a class="bg-orange-200 font-sans text-green-700 text-xl rounded-lg font-semibold underline xl:mr-28 py-2.5 px-6"
                   href="/{{str_replace('_','-',app()->getLocale())}}/contact/student">{{__('contact_page.student_link')}}</a>
                <a class="hover:text-orange-500 text-end font-sans text-green-700 self-center text-xl font-semibold underline flex-1 py-2.5 px-6 xl:text-start"
                   href="/{{str_replace('_','-',app()->getLocale())}}/contact/agency">{{__('contact_page.agency_link')}}</a>
            </div>
            <div class="flex  mt-14">
                <form action="/" method="post" class="flex-1 px-10 xl:px-0">
                    @csrf
                    <div class="flex flex-col xl:flex-row flex-1">
                        <fieldset class="flex flex-col flex-1 xl:mr-10 mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl" for="name">{{__('contact_page.student_name')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                placeholder="Caron" name="name" id="name" type="text">
                        </fieldset>
                        <fieldset class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-lg xl:text-2xl" for="surname">{{__('contact_page.student_firstname')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="surname" id="surname" type="text" placeholder="Jordan">
                        </fieldset>
                    </div>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="email">{{__('contact_page.mail')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="object">{{__('contact_page.student_object')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="object" id="object" type="text" placeholder="{{__('contact_page.student_object_value')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-lg xl:text-2xl" for="message">{{__('contact_page.student_message')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="message" id="message" cols="30" rows="10"
                            placeholder="{{__('contact_page.student_message_value')}}"></textarea>
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input
                            class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl flex-1 xl:flex-initial"
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
