<x-commons.navigation></x-commons.navigation>
<main id="content" class="xl:px-32 lg:px-16 2xl:px-48 px-10">
    <section class="mt-20 mb-32 xl:mb-64" aria-labelledby="tutos">
        <div class="flex flex-col md:flex-row justify-between mb-7 xl:items-center">
            <h2 id="tutos" role="heading" aria-level="2" class="mb-4 text-2xl xl:text-4xl md:max-w-xl md:text-3xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('tuto.tuto_title')}}</h2>
            <x-search_bar class="md:min-w-[40%] xl:min-w-[23%]"></x-search_bar>
        </div>
        <p class="mb-7 md:leading-8 xl:max-w-[55%] xl:text-xl xl:leading-10">{{__('tuto.tuto_text')}}</p>
        <x-sort_by_tutos :languages="$languages" :date="$date" class="mb-14"></x-sort_by_tutos>
        <article aria-labelledby="list-tutos">
            <h3 id="list-tutos" role="heading" aria-level="3" class="sr-only">{{__('tuto.tuto_list_title')}}</h3>
            <div class="flex gap-y-4 flex-col lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-24 xl:gap-y-8">
                @foreach($tutos as $tuto_ref)
                    <x-tuto class="bg-yellow-100" :tuto_ref="$tuto_ref->translation->where('locale',app()->getLocale())->first()"/>
                @endforeach
            </div>
            {{$tutos->links()}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
