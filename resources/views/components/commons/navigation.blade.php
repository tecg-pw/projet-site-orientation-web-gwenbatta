<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Site de l'option web infographie de la HEPL (Haute École de la province de Liège) ">
    <meta name="keywords"
          content="web, HEPL, infographie, HTML, CSS, Javascript, PHP, Tailwind, Multimédia, design web, front-end, back-end, développement web">
    <meta name="author" content="Gwenaëlle Batta">
    <title>{{__('TecWeb')}}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.ts')
</head>
<body class="bg-white-100" aria-labelledby="body">
<header>
    <h1 class="sr-only" aria-level="1" role="heading"
        id="body">{{__('TecWeb, le site de l\'option Web de la HEPL')}}</h1>
    <nav class="flex flex-col relative fixed" aria-labelledby="navigation">
        <h2 class="sr-only" id="navigation" role="heading" aria-level="2">{{__('Navigation de TecWeb')}}</h2>
        <div class="relative z-30 bg-green-700 text-white-100 order-1 font-sans flex gap-x-10 justify-between xl:justify-end xl:px-36 px-2.5 py-2 xl:py-4 font-semibold text-lg xl:text-xl">
            <ul class="flex gap-x-1">
                <li class="hover:text-orange-500 border-r-2 border-white-100/40 pr-1.5">{{__('FR')}}</li>
                <li class="hover:text-orange-500 border-r-2 border-white-100/40 pr-1.5">{{__('NL')}}</li>
                <li class="hover:text-orange-500 border-r-2 border-white-100/40 pr-1.5">{{__('DE')}}</li>
                <li class="hover:text-orange-500">{{__('EN')}}</li>
            </ul>
            @guest()
                <a class="hover:text-orange-500" href="/user/login">{{__('Connexion')}}</a>
            @endguest
            @auth()
                <a class="hover:text-orange-500" href="/user/profil">{{__('Gwenaëlle')}}</a>
            @endauth
        </div>
        <div class="relative z-30 flex flex-1 items-center justify-between order-2 bg-yellow-100 py-2.5 xl:px-36 px-5 gap-x-10 xl:py-10">
            <input class="absolute cursor-pointer opacity-0 z-30 w-8 h-8 " type="checkbox" name="burger" id="burger">
            <div class="relative">
                <label class="sr-only" for="burger">{{__('Checkbox Burger Menu')}}</label>
                <div class="cursor-pointer space-y-2 absolute -top-2.5 xl:-top-2">
                    <div class="w-8 h-0.5 bg-green-700"></div>
                    <div class="w-8 h-0.5 bg-green-700"></div>
                    <div class="w-8 h-0.5 bg-green-700"></div>
                </div>
            </div>
            <div class="burger_position bg-green-200 min-w-full min-h-full z-20 ">
                <ul class="xl:max-w-[30%] flex-1 bg-green-700 font-sans text-lg xl:text-xl text-white-100 font-semibold flex flex-col justify-between py-6 gap-4 xl:gap-6 xl:py-10 px-5 h-full">
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2">
                        <a class="group flex flex-1 justify-between" href="/project/index">
                            <span>
                                {{__('Projets')}}
                            </span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a>
                    </li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/contact/student">
                            <span>
                                {{__('Contact')}}
                            </span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a>
                    </li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/about">
                            <span>{{__('À propos')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/news/index">
                            <span>{{__('Actualité')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/technical/index">
                            <span>{{__('Technique')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a>
                    </li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/forum/index">
                            <span>{{__('Forum')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/bottin">
                            <span>{{__('Bottin')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/bottin/alumni">
                            <span>{{__('Alumni')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <li class="border-b-2 border-b-white-100/40 pb-0.5 xl:pb-2"><a class="group flex flex-1 justify-between" href="/entreprise/partner">
                            <span>{{__('Partenaires')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <li><a class="group flex flex-1 justify-between border-b-2 border-b-white-100/40 pb-0.5 xl:border-b-0 xl:pb-0" href="/technical/tuto">
                            <span>{{__('Tutoriels')}}</span>
                            <svg class="group-hover:mr-0 group-hover:opacity-100 opacity-0 mr-3 self-end " xmlns="http://www.w3.org/2000/svg" width="32"
                                 height="27.417"
                                 viewBox="0 0 32 27.417">
                                <path
                                    d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                    transform="translate(-19 -8.001)" fill="#ffffff"/>
                            </svg>
                        </a></li>
                    <span><x-search_bar class="text-sm font-medium font-body xl:justify-self-end xl:sr-only"></x-search_bar></span>
                </ul>
            </div>
            <div class="group ml-4 group relative">
                <svg class="xl:not-sr-only sr-only" xmlns="http://www.w3.org/2000/svg" width="170.001" height="77.656" viewBox="0 0 170.001 77.656">
                    <g  id="Groupe_284" data-name="Groupe 284" transform="translate(-230.999 -70.345)">
                        <path class="group-hover:fill-orange-500" id="Soustraction_1" data-name="Soustraction 1" d="M4116.213,11516.657h-48.141a12.468,12.468,0,0,1-4.4-.723,3.3,3.3,0,0,1-2.414-3.093,2.349,2.349,0,0,1,.648-1.733c.956-.958,2.789-1.09,4.628-1.09.287,0,.581,0,.818.006l.208,0,.513,0h20.255v-6.63h-29.886a14.443,14.443,0,0,1-14.443-14.443v-35.513a14.443,14.443,0,0,1,14.443-14.442h67.4a14.33,14.33,0,0,1,8.646,2.871,14.562,14.562,0,0,1,5.151,7.285h-6.012a9.381,9.381,0,0,0-7.784-4.529h-67.4a9.642,9.642,0,0,0-5.324,1.756,7.99,7.99,0,0,0-2.4,2.7,9.666,9.666,0,0,0-1.092,4.361v35.513a8.727,8.727,0,0,0,2.232,6.449,9.375,9.375,0,0,0,6.58,2.366h67.4a10.458,10.458,0,0,0,3.925-.761,7.37,7.37,0,0,0,3.823-3.493h5.96a14.449,14.449,0,0,1-13.708,9.882h-29.885v6.63h20.255a17.816,17.816,0,0,1,4.405.409c1.6.432,2.41,1.24,2.41,2.4,0,1.5-1.311,2.407-2.411,2.905A11.38,11.38,0,0,1,4116.213,11516.657Z" transform="translate(-3813 -11368.656)" fill="#6f704d"/>
                        <g id="Groupe_251" data-name="Groupe 251" transform="translate(0 63)">
                            <text class="group-hover:fill-green-700" id="TecWeb_" data-name="TecWeb " transform="translate(242 47)" fill="#da953a" font-size="35" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">TecWeb </tspan></text>
                            <text class="group-hover:fill-green-700" id="Le_site_de_l_option_web_de_la_HEPL" data-name="Le site de l’option web de la HEPL" transform="translate(242 58)" fill="#da953a" font-size="11" font-family="Hind-Regular, Hind"><tspan x="0" y="0">Le site de l’option web de la HEPL</tspan></text>
                        </g>
                    </g>
                </svg>
                <svg class="xl:sr-only" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 170.001 77.656">
                    <g  id="Groupe_284" data-name="Groupe 284" transform="translate(-230.999 -70.345)">
                        <path class="group-hover:fill-orange-500" id="Soustraction_1" data-name="Soustraction 1" d="M4116.213,11516.657h-48.141a12.468,12.468,0,0,1-4.4-.723,3.3,3.3,0,0,1-2.414-3.093,2.349,2.349,0,0,1,.648-1.733c.956-.958,2.789-1.09,4.628-1.09.287,0,.581,0,.818.006l.208,0,.513,0h20.255v-6.63h-29.886a14.443,14.443,0,0,1-14.443-14.443v-35.513a14.443,14.443,0,0,1,14.443-14.442h67.4a14.33,14.33,0,0,1,8.646,2.871,14.562,14.562,0,0,1,5.151,7.285h-6.012a9.381,9.381,0,0,0-7.784-4.529h-67.4a9.642,9.642,0,0,0-5.324,1.756,7.99,7.99,0,0,0-2.4,2.7,9.666,9.666,0,0,0-1.092,4.361v35.513a8.727,8.727,0,0,0,2.232,6.449,9.375,9.375,0,0,0,6.58,2.366h67.4a10.458,10.458,0,0,0,3.925-.761,7.37,7.37,0,0,0,3.823-3.493h5.96a14.449,14.449,0,0,1-13.708,9.882h-29.885v6.63h20.255a17.816,17.816,0,0,1,4.405.409c1.6.432,2.41,1.24,2.41,2.4,0,1.5-1.311,2.407-2.411,2.905A11.38,11.38,0,0,1,4116.213,11516.657Z" transform="translate(-3813 -11368.656)" fill="#6f704d"/>
                        <g id="Groupe_251" data-name="Groupe 251" transform="translate(0 63)">
                            <text class="group-hover:fill-green-700" id="TecWeb_" data-name="TecWeb " transform="translate(242 47)" fill="#da953a" font-size="35" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">TecWeb </tspan></text>
                            <text class="group-hover:fill-green-700" id="Le_site_de_l_option_web_de_la_HEPL" data-name="Le site de l’option web de la HEPL" transform="translate(242 58)" fill="#da953a" font-size="11" font-family="Hind-Regular, Hind"><tspan x="0" y="0">Le site de l’option web de la HEPL</tspan></text>
                        </g>
                    </g>
                </svg>
                <a href="/" class="linkcard">{{__('Acceuil de TecWeb')}}</a>
            </div>
            <ul class="sr-only xl:not-sr-only flex gap-x-5 text-green-700 text-xl flex-1 font-sans font-semibold">
                <li><a class="hover:text-orange-500" href="/bottin/alumni"> {{__('Alumni')}}</a></li>
                <li><a class="hover:text-orange-500" href="/project/index"> {{__('Projets')}}</a></li>
                <li><a class="hover:text-orange-500" href="/forum/index"> {{__('Forum')}}</a></li>
                <li><a class="hover:text-orange-500" href="/about"> {{__('À propos')}}</a></li>
                <li><a class="hover:text-orange-500" href="/news/index"> {{__('Actualité')}}</a></li>
                <li><a class="hover:text-orange-500" href="/contact/student"> {{__('Contact')}}</a></li>
            </ul>
            <x-search_bar class="xl:min-w-[23%] xl:not-sr-only sr-only"></x-search_bar>
        </div>
    </nav>
</header>
