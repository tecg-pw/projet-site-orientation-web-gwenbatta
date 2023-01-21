<x-commons.navigation :page="__('docandtool.doc_tool_title')"></x-commons.navigation>
<main id="content">
    <div class="flex items-center xl:px-32 lg:px-16 2xl:px-48 px-10 mt-20">
        <a href="/{{app()->getLocale()}}/technical/index" class="hover:text-orange-500 underline text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('nav.nav_navigation.technical')}}
        </a>
        <svg class="h-7 w-7 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="9 6 15 12 9 18" /></svg>
        <a href="/{{app()->getLocale()}}/technical/docandtool/doc" class="underline hover:text-orange-500 text-green-500 mt-0.5 text-lg leading-8 xl:leading-10 xl:text-xl 2xl:text-2xl">
            {{__('docandtool.doc_link')}}
        </a>
    </div>
    <section class="xl:px-32 lg:px-16 2xl:px-48 px-10 mt-20 mb-32 xl:mb-64" aria-labelledby="doc-and-tool">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="doc-and-tool" role="heading" aria-level="2"
                class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('docandtool.doc_tool_title')}}</h2>
        </div>
        <p class="mb-8 text-lg leading-8 xl:max-w-[55%] xl:text-xl 2xl:text-2xl 2xl:leading-12 xl:leading-10">{{__('docandtool.doc_tool_text')}}</p>
        <article aria-labelledby="list-doc">
            <h3 id="list-doc" role="heading" aria-level="3" class="sr-only">{{__('technicals.doc_title')}}</h3>
            <div class="flex flex-col md:flex-row justify-between md:justify-start md:gap-x-10 xl:justify-start mb-12">
                <a class="text-xl 2xl:text-2xl rounded-lg underline text-green-700 font-semibold font-sans xl:mr-36 bg-orange-100 px-5 py-2"
                   href="/{{app()->getLocale()}}/technical/docandtool/doc">{{__('docandtool.doc_link')}}</a>
                <a class="text-xl 2xl:text-2xl underline text-green-700 font-semibold font-sans px-5 py-2"
                   href="/{{app()->getLocale()}}/technical/docandtool/tool">{{__('docandtool.tool_link')}}</a>
            </div>
            <div class="mt-12 lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
                @foreach($docs as $doc_ref)
                    <x-technical.doc_single :doc_ref="$doc_ref"/>
                @endforeach
            </div>
        </article>
    </section>
    <article class="bg-yellow-600 px-10 xl:px-32 lg:px-16 2xl:px-48 pb-36 pt-20" aria-labelledby="books">
        <h2 id="books" aria-level="2" role="heading"
            class="xl:text-4xl 2xl:text-5xl md:text-3xl text-2xl uppercase font-extrabold font-sans mb-20">{{__('docandtool.book_title')}}</h2>
        <div class="mt-12 lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($books as $book_ref)
                <x-technical.book_single class="bg-white-100" :book_ref="$book_ref"/>
            @endforeach
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
