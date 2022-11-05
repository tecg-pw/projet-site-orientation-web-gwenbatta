<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="px-36 mt-20 mb-64" aria-labelledby="doc-and-tool">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="doc-and-tool" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Documentations et outils')}}</h2>
        </div>
        <p class="mb-8 max-w-[40%] text-lg leading-10">{{__('Vous trouverez sur cette page de la documentation et les outils qui vous seront utiles durant votre cursus que ce soit lors de votre première ou au sein de l’option web.')}}</p>
        <article aria-labelledby="list-tools">
            <h3 id="list-tools" role="heading" aria-level="3" class="sr-only">{{__('Liste d\'outils')}}</h3>
            <div class="flex mb-12">
                <a class="text-xl underline text-green-700 font-semibold font-sans mr-36 px-5 py-2" href="/technical/docandtool/doc">{{__('Documentations')}}</a>
                <a class="text-xl underline text-green-700 font-semibold font-sans bg-orange-100 px-5 py-2" href="/technical/docandtool/tool">{{__('Outils')}}</a>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-x-24 gap-y-8">
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="opquast">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="opquast" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Règle Opquast')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Liste des règles Opquast pour créer un bon site web')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="wcag">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="wcag" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Checklist WCAG')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la check-list, afin de vous aider à améliorer l’accessibilité de votre site.')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="gtmetrix">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="gtmetrix" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('GTMetrix')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers le site de GTMetrix qui évaluera votre site et vous aidera à l’améliorer')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="html-validator">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="html-validator" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('HTML Validator')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Vérifie votre structure HTML et vous notifie les erreurs dans votre fichier.')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="css-validator">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="css-validator" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('CSS Validator')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Vérifie votre structure CSS et vous notifie les erreurs dans votre fichier.')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="css-stats">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="css-stats" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('CSS Stats')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('CSS Stats fournit des analyses et des visualisations pour vos feuilles de style. ')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="dash">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="dash" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Dash')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Application qui vous permet d’avoir toutes la documentation sur votre Mac')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Pour tous les cours')}}
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="zeel">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="zeel" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Zeel')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Application qui vous permet d’avoir toutes la documentation sur votre Windows')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="headings-map">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="headings-map" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Headings Map')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Vérifie l’arborescence de votre sites, la présence des titres et leurs validité')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="contrast-checker">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="contrast-checker" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Contrast Checker')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Vérifie les contrates de couleurs présentent dans votre site')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="imagoptim">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="imagoptim" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('ImagOptim')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Application qui vous permet d’optimiser vos images (Disponible sous Mac)')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="lighthouse">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="lighthouse" role="heading" aria-level="4" class="font-sans font-medium text-2xl mb-2">{{__('Lighthouse')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('AOnglet présent dans l’inspecteur, permet d’optimiser votre site.')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a> et <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
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
