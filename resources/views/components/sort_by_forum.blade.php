<div {{ $attributes }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('Trier par')}}</p>
    <form action="/"
          method="get"class="flex flex-col gap-6 xl:gap-4" >
        <div class="flex xl:flex-row flex-col gap-2">
        <fieldset class="flex flex-col">
            <label for="status" class="xl:text-lg text-green-500 xl:mb-2">{{__('Status')}}</label>
            <select id="status"
                    name="status"
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1">
                <option value="all">
                    {{__('Tous')}}
                </option>
                <option value="resolved">
                    {{__('Résolu')}}
                </option>
                <option value="unresolved">
                    {{__('Non résolu')}}
                </option>
            </select>
        </fieldset>
        <fieldset class="flex flex-col xl:ml-16">
            <label for="tags" class="xl:text-lg text-green-500 xl:mb-2">{{__('Tags')}}</label>
            <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="tags"
                    name="tags">
                <option value="all">
                    {{__('Tous')}}
                </option>
                <option value="générales">
                    {{__('générales')}}
                </option>
                <option value="mmi">
                    {{__('Multimédia')}}
                </option>
                <option value="php">
                    {{__('php')}}
                </option>
                <option value="html">
                    {{__('HTML')}}
                </option>
                <option value="css">
                    {{__('CSS')}}
                </option>
                <option value="js">
                    {{__('Javascript')}}
                </option>
            </select >
        </fieldset>
        <fieldset class="flex flex-col xl:ml-16">
            <label for="year" class="xl:text-lg text-green-500 xl:mb-2">{{__('Date')}}</label>
            <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="year"
                    name="year">
                <option value="all">
                    {{__('Toutes les dates')}}
                </option>
                <option value="2022">
                    {{__('2022')}}
                </option>
                <option value="2021">
                    {{__('2021')}}
                </option>
                <option value="2022">
                    {{__('2019')}}
                </option>
            </select >
        </fieldset>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold xl:max-w-[27%]">
            {{__('Valider')}}
        </button>
    </form>
</div>
