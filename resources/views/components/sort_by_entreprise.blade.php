<div {{ $attributes }}>
    <p class="text-green-500 text-3xl font-medium mb-4">{{__('Trier par')}}</p>
    <form action="/"
          method="get"class="flex" >
        <fieldset class="flex flex-col">
            <label for="status" class="text-lg text-green-500 mb-2">{{__('Ville')}}</label>
            <select id="status"
                    name="status"
                    class="bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1">
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
            <label for="year" class="text-lg text-green-500 mb-2">{{__('Agence')}}</label>
            <select class="bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="year"
                    name="year">
                <option value="all">
                    {{__('Toutes')}}
                </option>
                <option value="whitecube">
                    {{__('Whitecube')}}
                </option>
                <option value="lws">
                    {{__('Léonard Web Solutions')}}
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
        <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md ml-1">Change
        </button>
    </form>
</div>
