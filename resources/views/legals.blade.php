<x-commons.navigation :page="__('nav.nav_footer_legals')"></x-commons.navigation>
<main id="content" class="flex flex-col lg:flex-row gap-x-20 mb-60">
    <section class="bg-yellow-600 xl:mt-20 py-20 px-10 lg:px-16 xl:px-32 2xl:px-48" aria-labelledby="informations">
        <h2 class="xl:text-4xl 2xl:leading-12 md:text-3xl text-2xl uppercase font-extrabold font-sans mb-11" role="heading" aria-level="2"
            id="informations">{{__('legals.informations_title')}}</h2>
        <section class="mb-5 xl:mb-14 " aria-labelledby="company" itemscope itemtype="https://schema.org/Organization">
            <h3 class="xl:text-2xl text-xl font-semibold" role="heading" aria-level="3"
                id="company">{{__('legals.informations_company_title')}}</h3>
            <p class="xl:text-xl text-lg" itemprop="streetAddress">{{__('legals.informations_company_text')}}</p>
        </section>
        <section class="mb-5 xl:mb-14 " aria-labelledby="social">
            <h3 class="xl:text-2xl text-xl font-semibold" role="heading" aria-level="3"
                id="social">{{__('legals.informations_social_title')}}</h3>
            <div itemscope itemtype="https://schema.org/PostalAddress">
                <p class="xl:text-xl text-lg" itemprop="streetAddress">{{__('legals.informations_social_street')}}</p>
                <p class="xl:text-xl text-lg" itemprop="postalCode">{{__('legals.informations_social_city')}}</p>
            </div>
        </section>
        <section class="mb-5 xl:mb-14 " aria-labelledby="email" itemscope itemtype="https://schema.org/Organization">
            <h3 class="xl:text-2xl text-xl font-semibold" role="heading" aria-level="3" id="email">{{__('legals.informations_mail_title')}}</h3>
            <p class="xl:text-xl text-lg" itemprop="email">{{__('legals.informations_mail_text')}}</p>
        </section>
    </section>
    <div class="">
        <section class="mt-20 px-10 pr-10 lg:pr-16 xl:pr-30 2xl:pr-48" aria-labelledby="confidential">
            <h2 class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11" role="heading" aria-level="2"
                id="confidential">{{__('legals.confidentials_title')}}</h2>
            <p class="text-lg leading-8 2xl:leading-10">{{__('legals.confidentials_text')}}</p>
        </section>
        <section class="mt-20 px-10 xl:pr-30" aria-labelledby="cookies">
            <h2 class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11" role="heading" aria-level="2"
                id="cookies">{{__('legals.cookies_title')}}</h2>
            <p class="text-lg leading-8 2xl:leading-10 mb-6">{{__('legals.cookies_text_part_1')}}</p>
            <p class="text-lg leading-8 2xl:leading-10 mb-6">{{__('legals.cookies_text_part_2')}}</p>
            <p class="text-lg leading-8 2xl:leading-10 mb-6">{{__('legals.cookies_text_part_3')}}</p>
            <p class="text-lg leading-8 2xl:leading-10 mb-6">{{__('legals.cookies_text_part_4')}}</p>

        </section>
    </div>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
