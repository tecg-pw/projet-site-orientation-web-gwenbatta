<div {{ $attributes }}>
    <p class="text-green-500 text-3xl font-medium mb-4">{{__('Trier par')}}</p>
    <form action="/"
          method="get"class="flex" >
        <fieldset class="flex flex-col">
            <label for="status" class="text-lg text-green-500 mb-2">{{__('Status')}}</label>
            <select id="status"
                    name="status"
                    class="bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1">
                <option value="nothings">
                    {{__('Aucun')}}
                </option>
                <option value="student">
                    {{__('Étudiant')}}
                </option>
                <option value="alumni">
                    {{__('Ancien')}}
                </option>
                <option value="teacher">
                    {{__('Professeur')}}
                </option>
            </select>
        </fieldset>
        <fieldset class="flex flex-col ml-16">
            <label for="year" class="text-lg text-green-500 mb-2">{{__('Année de sortie')}}</label>
            <select class="bg-green-700 text-white-100 font-sans uppercase font-semibold px-2 py-1" id="year"
                    name="year">
                <option value="all">
                    {{__('Toutes')}}
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
        <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md ml-1">Change
        </button>
    </form>
</div>
