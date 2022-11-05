<x-commons.navigation></x-commons.navigation>
<main>
    <section class="flex flex-col py-12 mb-40 mt-40 relative">
        <div class="flex items-center relative -top-10 px-36">
            <div class="order-2 flex-1 ml-8 mt-32">
                <div>
                    <h2 class="text-4xl text-yellow-800 font-extrabold font-sans ">{{__('Gwenaëlle BATTA')}}</h2>
                    <p class="uppercase text-2xl">{{__('Étudiante')}}</p>
                </div>
                <div class="text-end">
                    <a href="/user/profile/modify"
                       class="font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-2xl font-semibold mb-32">{{__('Modifier le profil')}}</a>
                </div>
            </div>
            <img class="rounded-full" src="https://placehold.jp/276x276.png" alt="">
        </div>
    </section>
    <section class="px-36 mb-32">
        <h2 class="text-4xl text-yellow-800 font-extrabold font-sans uppercase">{{__('Modifier le profil')}}</h2>
        <div class="flex  mt-14">
            <form action="/" method="post" enctype="multipart/form-data" class="flex-1 flex gap-24">
                <div class="flex-1">
                    <div class="flex flex-1">
                        <fieldset class="flex flex-col flex-1 mr-10 mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('Nom')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Caron" name="name" id="name" type="text">
                        </fieldset>
                        <fieldset class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-2xl" for="surname">{{__('Prénom')}}</label>
                            <input
                                class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="surname" id="surname" type="text" placeholder="Jordan">
                        </fieldset>
                    </div>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('Email')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="email" id="email" type="email" placeholder="email@example.be">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8 mt-16">
                        <label class="text-green-500 text-2xl" for="profil">{{__('Votre Photo')}}</label>
                        <div class="flex gap-4 items-center">
                            <label for="dropzone-file" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <div class="flex flex-col justify-center items-center py-5 px-32">
                                    <p class="text-xl text-gray-500">{{__('Glisser un JPG')}} </p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                                <img class="rounded-full -order-2" src="https://placehold.jp/108x108.png" alt="">
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col mb-8 mt-4">
                        <label class="text-green-500 text-2xl" for="profil">{{__('Votre Bannière')}}</label>
                        <div class="flex gap-4 items-center">
                            <label for="dropzone-file" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <div class="flex flex-col justify-center items-center py-5 px-32">
                                    <p class="text-xl text-gray-500">{{__('Glisser un JPG')}} </p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                                <img class="rounded-full -order-2" src="https://placehold.jp/108x108.png" alt="">
                        </div>
                    </fieldset>
                </div>
                <div class="flex-1">
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="status">{{__('Status')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="status" id="status" type="text" placeholder="{{__('Étudiant')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="status">{{__('Année académique')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="status" id="status" type="text" placeholder="{{__('2020-2023')}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8 mt-16">
                        <label class="text-green-500 text-2xl" for="description">{{__('Description')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="description" id="description" cols="30" rows="10"
                            placeholder="{{__('Description')}}"></textarea>
                    </fieldset>
                </div>
            </form>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
