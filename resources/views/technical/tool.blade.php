<x-commons.navigation></x-commons.navigation>
<main id="content" class="">
    <section class="xl:px-36 px-10 mt-20 mb-32 xl:mb-64" aria-labelledby="doc-and-tool">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="doc-and-tool" role="heading" aria-level="2"
                class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('docandtool.doc_tool_title')}}</h2>
        </div>
        <p class="mb-8 text-lg leading-8 xl:max-w-[55%] xl:text-xl xl:leading-10">{{__('docandtool.doc_tool_text')}}</p>
        <article aria-labelledby="list-tools">
            <h3 id="list-tools" role="heading" aria-level="3" class="sr-only">{{__('docandtool.tool_title')}}</h3>
            <div class="flex justify-between xl:justify-start mb-12">
                <a class="text-xl underline text-green-700 font-semibold font-sans xl:mr-36 px-5 py-2" href="/technical/docandtool/doc">{{__('docandtool.doc_link')}}</a>
                <a class="rounded-lg text-xl underline text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2" href="/technical/docandtool/tool">{{__('docandtool.tool_link')}}</a>
            </div>
            <div class="mt-12 xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
                @foreach($tools as $tool)
                    <x-tool_single :tool="$tool"/>
                @endforeach
            </div>
        </article>
    </section>
    <article class="bg-yellow-600 px-10 xl:px-36 pb-36 pt-20" aria-labelledby="books">
        <h2 id="books" aria-level="2" role="heading"
            class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-20">{{__('docandtool.book_title')}}</h2>
        <div class="mt-12 xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @foreach($books as $book)
                <x-book_single :book="$book"/>
            @endforeach

        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
