<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="xl:px-36 px-10 mt-20 mb-32 xl:mb-64" aria-labelledby="doc-and-tool">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="doc-and-tool" role="heading" aria-level="2"
                class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans xl:text-center">{{__('docandtool.doc_tool_title')}}</h2>
        </div>
        <p class="mb-8 text-lg leading-8 xl:max-w-[55%] xl:text-xl xl:leading-10">{{__('')}}</p>
        <article aria-labelledby="list-tools">
            <h3 id="list-tools" role="heading" aria-level="3" class="sr-only">{{__('Liste d\'outils')}}</h3>
            <div class="flex justify-between xl:justify-start mb-12">
                <a class="text-xl underline text-green-700 font-semibold font-sans xl:mr-36 px-5 py-2" href="/technical/docandtool/doc">{{__('docandtool.doc_link')}}</a>
                <a class="rounded-lg text-xl underline text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2" href="/technical/docandtool/tool">{{__('docandtool.tool_link')}}</a>
            </div>
            <div class="mt-12 xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="opquast">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="opquast" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Règle Opquast')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Liste des règles Opquast pour créer un bon site web')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="wcag">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="wcag" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Checklist WCAG')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Lien vers la check-list, afin de vous aider à améliorer l’accessibilité de votre site.')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="gtmetrix">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="gtmetrix" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('GTMetrix')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Lien vers le site de GTMetrix qui évaluera votre site et vous aidera à l’améliorer')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="html-validator">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="html-validator" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('HTML Validator')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Vérifie votre structure HTML et vous notifie les erreurs dans votre fichier.')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="css-validator">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="css-validator" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('CSS Validator')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Vérifie votre structure CSS et vous notifie les erreurs dans votre fichier.')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="css-stats">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="css-stats" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('CSS Stats')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('CSS Stats fournit des analyses et des visualisations pour vos feuilles de style. ')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="dash">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="dash" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Dash')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Application qui vous permet d’avoir toutes la documentation sur votre Mac')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Pour tous les cours')}}
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="zeel">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="zeel" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Zeel')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Application qui vous permet d’avoir toutes la documentation sur votre Windows')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="headings-map">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="headings-map" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Headings Map')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Vérifie l’arborescence de votre sites, la présence des titres et leurs validité')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="contrast-checker">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="contrast-checker" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Contrast Checker')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Vérifie les contrates de couleurs présentent dans votre site')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="imagoptim">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="imagoptim" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('ImagOptim')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('Application qui vous permet d’optimiser vos images (Disponible sous Mac)')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
                <article class="hover:bg-orange-100 relative group bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="lighthouse">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="lighthouse" role="heading" aria-level="4" class="font-medium text-lg xl:text-2xl mb-2">{{__('Lighthouse')}}</h4>
                        </div>
                    </div>
                    <p class="mb-4 xl:mb-10 xl:text-lgg">{{__('AOnglet présent dans l’inspecteur, permet d’optimiser votre site.')}}</p>
                    <div class="flex justify-between">
                        <p class="xl:text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans linkcard"
                           href="">{{__('Voir la doc')}}</a>
                        <svg class="group-hover:mr-0 mr-4 self-end " xmlns="http://www.w3.org/2000/svg" width="25"
                             viewBox="0 0 32 27.417">
                            <path
                                d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <x-books></x-books>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
