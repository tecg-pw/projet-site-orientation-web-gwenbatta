<div {{ $attributes }}>
    <p class="text-green-500 text-xl xl:text-3xl font-medium mb-2 xl:mb-4">{{__('Trier par')}}</p>
    <form action="/"
          method="get" class="flex flex-col gap-4" >
        <div class="flex flex-1 justify-between xl:justify-start">
            <fieldset class="flex flex-col">
                <label for="status" class="text-lg text-green-500 mb-2">{{__('Status')}}</label>
                <select id="status"
                        name="status"
                        class="appearance-none bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
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
                <select class="appearance-none rounded-lg bg-green-700 text-white-100 font-sans uppercase font-semibold pl-2 pr-8 py-1" id="year"
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
        </div>
        <button type="submit"
                class="hover:text-green-700 hover:bg-white-100 border-2 border-green-700 font-sans text-center text-white-100 bg-green-700 px-6 py-3 rounded-2xl text-xl font-semibold xl:max-w-[27%]">
            {{__('Valider')}}
        </button>
    </form>
</div>
