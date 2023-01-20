<x-commons.navigation :page="__('nav.nav_navigation.technical')"></x-commons.navigation>
<main id="content">
    <section class="xl:px-32 lg:px-16 px-10 2xl:px-48 flex mt-14 xl:mb-36 lg:gap-x-12 xl:gap-24 items-center" aria-labelledby="technical">
        <div class="flex-1">
            <h2 class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl leading-8 mb-6 uppercase font-bold text-yellow-800 xl:mb-16 font-sans"
                role="heading" aria-level="2"
                id="technical">
                {{__('technicals.technical_title')}}
            </h2>
            <p class="text-lg md:leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl 2xl:leading-12">
                {{__('technicals.technical_text')}}
            </p>
        </div>
        <div class="sr-only lg:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <picture class="sr-only lg:not-sr-only lg:rounded-3xl lg:row-span-2 lg:min-h-full">
                    <source media="(max-width: 1024px)" srcset="/img-redimensions/windows-97pJ_0CkVEY-unsplash-481.jpeg">
                    <source media="(max-width: 1250px)" srcset="/img-redimensions/windows-97pJ_0CkVEY-unsplash-534.jpeg">
                    <source media="(max-width: 1520px)" srcset="/img-redimensions/windows-97pJ_0CkVEY-unsplash-588.jpeg">
                    <source media="(max-width: 2040px)" srcset="/img-redimensions/windows-97pJ_0CkVEY-unsplash-733.jpeg">
                    <source media="(max-width: 2560px)" srcset="/img-redimensions/windows-97pJ_0CkVEY-unsplash-878.jpeg">
                    <img src="/img-redimensions/windows-97pJ_0CkVEY-unsplash-878.jpeg"
                         alt="" class="sr-only lg:not-sr-only lg:rounded-3xl lg:row-span-2 lg:min-h-full">
                </picture>
                <picture class="sr-only lg:not-sr-only lg:rounded-3xl">
                    <source media="(max-width: 1024px)" srcset="/img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-274.jpeg">
                    <source media="(max-width: 1250px)" srcset="/img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-302.jpeg">
                    <source media="(max-width: 1520px)" srcset="/img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-330.jpeg">
                    <source media="(max-width: 2040px)" srcset="/img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-417.jpeg">
                    <source media="(max-width: 2560px)" srcset="/img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-504.jpeg">
                    <img src="/img-redimensions/ux-gc7de3d904_1920-504.jpeg"
                         alt="" class="sr-only lg:not-sr-only lg:rounded-3xl">
                </picture>
                <picture class="sr-only lg:not-sr-only lg:rounded-3xl">
                    <source media="(max-width: 1024px)" srcset="/img-redimensions/pexels-buro-millennial-1438081-274.jpg">
                    <source media="(max-width: 1250px)" srcset="/img-redimensions/pexels-buro-millennial-1438081-302.jpg">
                    <source media="(max-width: 1520px)" srcset="/img-redimensions/pexels-buro-millennial-1438081-330.jpg">
                    <source media="(max-width: 2040px)" srcset="/img-redimensions/pexels-buro-millennial-1438081-417.jpg">
                    <source media="(max-width: 2560px)" srcset="/img-redimensions/pexels-buro-millennial-1438081-504.jpg">
                    <img src="/img-redimensions/student-g0a8698c9e_1920-504.jpg"
                         alt="" class="sr-only lg:not-sr-only lg:rounded-3xl">
                </picture>
            </figure>
        </div>
    </section>
    <x-questions-forum :latests="$latests" :ratings="$ratings" :subjects="$subjects"></x-questions-forum>
    <article class="px-10 mt-14 mb-20 xl:px-32 lg:px-16 xl:mt-36 xl:mb-36" aria-labelledby="glossary">
        <div class="flex flex-col mb-8 md:flex-row justify-between">
            <h2 id="glossary" aria-level="2" role="heading"
                class="xl:text-4xl 2xl:text-5xl md:text-3xl md:max-w-md md:leading-10 2xl:max-w-full text-2xl uppercase font-bold text-yellow-800 mb-4 xl:mb-16 font-sans">{{__('technicals.glossary_title')}}</h2>
            <a class="hover:text-orange-500 font-sans text-green-700 md:text-xl xl:text-2xl 2xl:text-3xl font-semibold underline xl:px-4"
               href="/{{app()->getLocale()}}/technical/glossary">{{__('technicals.glossary_button')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 flex flex-col gap-y-4 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8">
            @foreach($termes as $terme_ref)
                <x-technical.term-glossary :terme_ref="$terme_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </article>
    <article class="bg-yellow-600 px-10 xl:px-32 lg:px-16 pt-20 pb-28" aria-labelledby="tutos">
        <div class="flex flex-col mb-8 md:flex-row justify-between">
            <h2 id="tutos" aria-level="2" role="heading"
                class="text-2xl md:text-3xl xl:text-4xl uppercase font-bold mb-4 xl:mb-16 font-sans">{{__('technicals.tuto_title')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 xl:text-3xl font-semibold underline md:text-xl xl:px-4"
               href="/{{app()->getLocale()}}/technical/tuto">{{__('technicals.tuto_button')}}</a>
        </div>
        <div class="flex gap-y-4 flex-col lg:grid lg:grid-cols-2 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8">
            @foreach($tutos as $tuto_ref)
                <x-technical.tuto class="bg-yellow-100" :tuto="$tuto_ref" :tuto_ref="$tuto_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </article>
    <article class="xl:px-32 lg:px-16 px-10 mt-36 mb-36" aria-labelledby="docs">
        <div class="flex flex-col mb-8 md:flex-row justify-between">
            <h2 id="docs" aria-level="2" role="heading"
                class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-bold text-yellow-800 mb-4 xl:mb-16 font-sans">{{__('technicals.doc_title')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 xl:text-2xl 2xl:text-3xl font-semibold underline md:text-xl xl:px-4"
               href="/{{app()->getLocale()}}/technical/docandtool/doc">{{__('technicals.doc_button')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4 ">
            @foreach($docs as $doc_ref)
                <x-technical.doc_single :doc_ref="$doc_ref"/>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
