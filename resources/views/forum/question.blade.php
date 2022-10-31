<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('TecWeb')}}</title>
</head>
<body>
<header>
    <h1>{{__('TecWeb, le site de l\'option Web de la HEPL')}}</h1>
    <x-commons.navigation></x-commons.navigation>
</header>
<main>
    <section class="mt-20 mb-36 flex justify-center">
        <div class="px-36">
            <div class="flex flex-col mb-28">
                <div class="flex order-1">
                    <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-12 font-sans mt-6">
                        {{__('Poser une question')}}
                    </h2>
                    <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1"
                       href="/forum/index">{{__('Retour au forum')}}</a>
                </div>
                <a class="text-green-500 font-sans font-light underline mt-8"
                   href="/">{{__('Techniques > Forum > Poser une question')}}</a>
            </div>
            <div class="flex mt-14">
                <form action="/" method="post" class="min-w-full">
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questions">{{__('Question')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="questions" id="questions" type="text" placeholder="Comment vole les oiseaux ?">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="questionsDescription">{{__('Description')}}</label>
                        <textarea
                            cols="30" rows="10"
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="questionsDescription" id="questionsDescription"
                            placeholder="Je décris ma question"></textarea>
                    </fieldset>
                    <div class="flex flex-1 justify-end">
                        <input
                            class="mt-16 font-sans text-center text-white-100 bg-green-700 px-16 py-3 rounded-2xl text-xl font-semibold"
                            type="submit" value="{{__('Poser ma question')}}">
                    </div>
                </form>
            </div>
        </div>
        <x-login.commons.aside></x-login.commons.aside>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
