<x-commons.navigation :page="__('nav.nav_navigation.technical')"></x-commons.navigation>
<main id="content">
    <section class="xl:px-32 lg:px-16 px-10 2xl:px-48 flex mt-14 xl:mb-36 lg:gap-x-12 xl:gap-24 items-center" aria-labelledby="technical">
        <div class="flex-1">
            <h2 class="xl:text-4xl md:text-3xl text-2xl leading-8 mb-6 uppercase font-bold text-yellow-800 xl:mb-16 font-sans"
                role="heading" aria-level="2"
                id="technical">
                {{__('technicals.technical_title')}}
            </h2>
            <p class="text-lg md:leading-8 xl:leading-10 xl:text-xl">
                {{__('technicals.technical_text')}}
            </p>
        </div>
        <div class="sr-only lg:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="/img-redimensions/windows-97pJ_0CkVEY-unsplash-878.jpeg" srcset="
                     /img-redimensions/windows-97pJ_0CkVEY-unsplash-481.jpeg 1024w,
                     /img-redimensions/windows-97pJ_0CkVEY-unsplash-534.jpeg 1250w,
                     /img-redimensions/windows-97pJ_0CkVEY-unsplash-588.jpeg 1520w,
                     /img-redimensions/windows-97pJ_0CkVEY-unsplash-733.jpeg 2040w,
                     /img-redimensions/windows-97pJ_0CkVEY-unsplash-878.jpeg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w" alt="">
                <img class="rounded-3xl" src="/img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-504.jpeg" srcset="
                     /img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-274.jpeg 1024w,
                     /img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-302.jpeg 1250w,
                     /img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-330.jpeg 1520w,
                     /img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-417.jpeg 2040w,
                     /img-redimensions/christopher-gower-m_HRfLhgABo-unsplash-504.jpeg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w" alt="">
                <img class="rounded-3xl" src="/img-redimensions/pexels-buro-millennial-1438081-504.jpg"
                     srcset="
                     /img-redimensions/pexels-buro-millennial-1438081-274.jpg 1024w,
                     /img-redimensions/pexels-buro-millennial-1438081-302.jpg 1250w,
                     /img-redimensions/pexels-buro-millennial-1438081-330.jpg 1520w,
                     /img-redimensions/pexels-buro-millennial-1438081-417.jpg 2040w,
                     /img-redimensions/pexels-buro-millennial-1438081-504.jpg 2560w"
                     sizes="
                         (min-width : 1024px) 1024w,
                         (min-width : 1250px) 1250w,
                         (min-width : 1520px) 1520w,
                         (min-width : 2040px) 2040w,
                         2560w" alt="">
            </figure>
        </div>
    </section>
    <x-questions-forum :latests="$latests" :ratings="$ratings" :subjects="$subjects"></x-questions-forum>
    <article class="px-10 mt-14 mb-20 xl:px-32 lg:px-16 xl:mt-36 xl:mb-36" aria-labelledby="glossary">
        <div class="flex flex-col mb-8 md:flex-row justify-between">
            <h2 id="glossary" aria-level="2" role="heading"
                class="xl:text-4xl md:text-3xl md:max-w-md md:leading-10 text-2xl uppercase font-bold text-yellow-800 mb-4 xl:mb-16 font-sans">{{__('technicals.glossary_title')}}</h2>
            <a class="hover:text-orange-500 font-sans text-green-700 md:text-xl xl:text-3xl font-semibold underline xl:px-4"
               href="/{{app()->getLocale()}}/technical/glossary">{{__('technicals.glossary_button')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 flex flex-col gap-y-4 xl:gap-x-24 lg:gap-x-12 xl:gap-y-8">
            @foreach($termes as $terme_ref)
                <x-term-glossary :terme_ref="$terme_ref->translation->where('locale',app()->getLocale())->first()"/>
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
                <x-tuto class="bg-yellow-100" :tuto="$tuto_ref" :tuto_ref="$tuto_ref->translation->where('locale',app()->getLocale())->first()"/>
            @endforeach
        </div>
    </article>
    <article class="xl:px-32 lg:px-16 px-10 mt-36 mb-36">
        <div class="flex flex-col mb-8 md:flex-row justify-between">
            <h2 id="tutos" aria-level="2" role="heading"
                class="xl:text-4xl md:text-3xl text-2xl uppercase font-bold text-yellow-800 mb-4 xl:mb-16 font-sans">{{__('technicals.doc_title')}}</h2>
            <a class="hover:text-orange-500  font-sans text-green-700 xl:text-3xl font-semibold underline md:text-xl xl:px-4"
               href="/{{app()->getLocale()}}/technical/docandtool/doc">{{__('technicals.doc_button')}}</a>
        </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4 ">
            @foreach($docs as $doc_ref)
                <x-doc_single :doc_ref="$doc_ref"/>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
