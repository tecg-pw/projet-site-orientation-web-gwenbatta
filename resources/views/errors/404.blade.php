<x-commons.navigation :page="__('404.404_title')"></x-commons.navigation>
<main id="content" class="flex min-h-full gap-x-20 mb-60">
        <section class="min-w-full mt-20 xl:px-32 flex flex-col items-center justify-center" aria-labelledby="404">
            <h2 class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mt-20 mb-11" role="heading" aria-level="2"
                id="404">{{__('404.404_title')}}</h2>
            <p class="text-2xl">{{__('404.404_text')}}</p>
            <p class="text-xl mt-2">{{__('404.404_back')}} <a class="hover:text-orange-500 text-green-700 underline" href="/{{str_replace('_','-',app()->getLocale())}}">{{__('404.404_link')}}</a> </p>
        </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
