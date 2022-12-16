<article {{ $attributes->class(['bg-yellow-600 xl:px-30 lg:px-16 2xl:px-48 px-10 py-20 ']) }} aria-labelledby="recurring-questions">
    <h2 role="heading" aria-level="2" id="recurring-questions"
        class="xl:text-4xl md:text-3xl text-2xl uppercase font-extrabold font-sans mb-8 xl:mb-20">{{__('recurring.recurring_title')}}</h2>
    <div class="lg:grid lg:grid-cols-3 lg:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
        @foreach($recurrings as $recurring_ref)
           <x-recurring_article :recurring_ref="$recurring_ref->translation->where('locale',app()->getLocale())->first()"/>
        @endforeach
    </div>
</article>
