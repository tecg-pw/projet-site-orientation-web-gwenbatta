<div {{ $attributes }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('Trier par')}}</p>
    <form action="/"
          method="get" class="flex flex-col gap-4" >
        <div class="flex justify-between xl:justify-start">
        <fieldset class="flex flex-col">
            <label for="status" class="xl:text-lg text-green-500 mb-2">{{__('Ville')}}</label>
            <select id="status"
                    name="status"
                    class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1">
                <option value="all">
                    {{__('Toutes')}}
                </option>
                <option value="verviers">
                    {{__('Verviers')}}
                </option>
                <option value="liege">
                    {{__('Liège')}}
                </option>
                <option value="nandrin">
                    {{__('Nandrin')}}
                </option>
                <option value="chenee">
                    {{__('Chênée')}}
                </option>
            </select>
        </fieldset>
        <fieldset class="flex flex-col ml-16">
            <label for="year" class="xl:text-lg text-green-500 mb-2">{{__('Agence')}}</label>
            <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="year"
                    name="year">
                <option value="all">
                    {{__('Toutes')}}
                </option>
                <option value="whitecube">
                    {{__('Whitecube')}}
                </option>
                <option value="lws">
                    {{__('LWS')}}
                </option>
                <option value="epic">
                    {{__('Epic Agency')}}
                </option>
                <option value="knok">
                    {{__('Knok')}}
                </option>
                <option value="gaming1">
                    {{__('Gaming 1')}}
                </option>
                <option value="oanna">
                    {{__('Oanna')}}
                </option>
            </select >
        </fieldset>
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 py-3 rounded-2xl text-xl font-semibold xl:max-w-[25%]">
            {{__('Valider')}}
        </button>
    </form>
</div>
