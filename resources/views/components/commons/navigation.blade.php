<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{__('TecWeb')}}</title>
</head>
<body class="bg-white-100" aria-labelledby="body">
<header>
    <h1 class="sr-only" aria-level="1" role="heading"
        id="body">{{__('TecWeb, le site de l\'option Web de la HEPL')}}</h1>
    <nav class="flex flex-col relative" aria-labelledby="navigation">
        <h2 class="sr-only" id="navigation" role="heading" aria-level="2">{{__('Navigation de TecWeb')}}</h2>
        <div class="relative z-30 bg-green-700 text-white-100 order-1 font-sans flex gap-x-10 justify-end px-36 py-4 font-semibold text-xl">
            <ul class="flex gap-x-1">
                <li class="border-r-2 border-white-100 pr-1.5">{{__('FR')}}</li>
                <li class="border-r-2 border-white-100 pr-1.5">{{__('NL')}}</li>
                <li class="border-r-2 border-white-100 pr-1.5">{{__('DE')}}</li>
                <li>{{__('EN')}}</li>
            </ul>
            @guest()
                <a href="/user/login">{{__('Connexion')}}</a>
            @endguest
            @auth()
                <a href="/user/profil">{{__('Gwenaëlle')}}</a>
            @endauth
        </div>
        <div class="relative z-30 flex flex-1 items-center order-2 bg-yellow-100 px-36 gap-x-10 py-10">
            <div class="relative">
                <label class="sr-only" for="burger">{{__('Checkbox Burger Menu')}}</label>
                <input class="absolute z-30 -top-2 w-8 h-8 opacity-0" type="checkbox" name="burger" id="burger">
                <div class="space-y-2 absolute -top-2">
                    <div class="w-8 h-0.5 bg-green-700"></div>
                    <div class="w-8 h-0.5 bg-green-700"></div>
                    <div class="w-8 h-0.5 bg-green-700"></div>
                </div>
            </div>
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="55" viewBox="0 0 242.72 55">
                    <g id="Groupe_251" data-name="Groupe 251" transform="translate(-250.28 -33)">
                        <g id="Groupe_145" data-name="Groupe 145" transform="translate(109 0.844)">
                            <path id="logo-projet-web"
                                  d="M76.279,4.843A2.842,2.842,0,0,0,73.436,2H4.843A2.842,2.842,0,0,0,2,4.843v.235A2.842,2.842,0,0,0,4.843,7.921H19.934V45.385a2.344,2.344,0,1,0,4.688,0V7.914h.42l9.7,37.271a3.365,3.365,0,0,0,3.242,2.544h.05a3.365,3.365,0,0,0,3.263-2.451l8.928-30.659,7.866,30.538a3.372,3.372,0,0,0,3.242,2.551,3.463,3.463,0,0,0,3.313-2.451L76.051,6.41a5.328,5.328,0,0,0,.228-1.332ZM38.117,38.3l-7.9-30.388H46.966L38.117,38.3Zm23.356-.064L53.664,7.921H70.258Z"
                                  transform="translate(140.78 35.156)" fill="none" stroke="#da953a"
                                  stroke-miterlimit="10" stroke-width="3"/>
                        </g>
                        <text id="TecWeb_" data-name="TecWeb " transform="translate(336 67)" fill="#da953a"
                              font-size="35" font-family="Montserrat-Bold, Montserrat" font-weight="700">
                            <tspan x="0" y="0">TecWeb</tspan>
                        </text>
                        <text id="Le_site_de_l_option_web_de_la_HEPL" data-name="Le site de l’option web de la HEPL"
                              transform="translate(325 84)" fill="#da953a" font-size="11"
                              font-family="Hind-Regular, Hind">
                            <tspan x="0" y="0">Le site de l’option web de la HEPL</tspan>
                        </text>
                    </g>
                </svg>
                <a href="/" class="linkcard">{{__('Acceuil de TecWeb')}}</a>
            </div>
            <ul class="flex gap-x-5 text-green-700 text-xl flex-1 font-sans font-semibold">
                <li><a href="/bottin/alumni"> {{__('Alumni')}}</a></li>
                <li><a href="/project/index"> {{__('Projets')}}</a></li>
                <li><a href="/forum/index"> {{__('Forum')}}</a></li>
                <li><a href="/about"> {{__('À propos')}}</a></li>
                <li><a href="/news/index"> {{__('Actualité')}}</a></li>
                <li><a href="/contact/student"> {{__('Contact')}}</a></li>
            </ul>
            <x-search_bar></x-search_bar>
        </div>
        <div class="hidden burger_position bg-green-200 min-w-full min-h-full z-20">
            <ul class="max-w-[30%] bg-green-700 font-sans text-xl text-white-100 font-semibold flex flex-col justify-between gap-6 py-10 px-5">
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/"> {{__('Accueil')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/project/index"> {{__('Projets')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/contact/student"> {{__('Contact')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/about"> {{__('À propos')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/news/index"> {{__('Actualité')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/technical/index"> {{__('Technique')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/forum/index"> {{__('Forum')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/bottin"> {{__('Bottin')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href="/bottin/alumni"> {{__('Alumni')}}</a></li>
                <li class="border-b-2 border-b-white-100 pb-2"><a href=""> {{__('Partenaires')}}</a></li>
                <li><a href=""> {{__('Tutoriels')}}</a></li>
            </ul>
        </div>
    </nav>
    <div class="px-36">
        <a href="">Fil d'arianne</a>
    </div>
</header>
