<x-commons.navigation></x-commons.navigation>
<main id="content" class="px-10 xl:px-36">
    <section class="mt-20 mb-32 xl:mb-64" aria-labelledby="glossary">
        <div class="flex flex-col xl:flex-row justify-between mb-7 xl:items-center">
            <h2 id="tutos" role="heading" aria-level="2"
                class="mb-4 text-2xl xl:text-4xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('glossary.glossary_title')}}</h2>
            <x-search_bar class=""></x-search_bar>
        </div>
        <p class="mb-24 xl:max-w-[55%] xl:text-xl xl:leading-10">{{__('glossary.glossary_text')}}</p>
        <article aria-labelledby="list-glossary">
            <h3 id="list-glossary" role="heading" aria-level="3"
                class="sr-only">{{__('glossary.glossary_list_title')}}</h3>
            <div class="xl:grid xl:grid-cols-2 flex flex-col gap-y-4 xl:gap-x-24 xl:gap-y-8">
                @foreach($termes as $terme)
                    <x-term-glossary :terme="$terme"/>
                @endforeach
            </div>
            {{$termes->links()}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
