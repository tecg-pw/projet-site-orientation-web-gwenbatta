<x-commons.navigation></x-commons.navigation>
<main class="">
    <section class="px-36 mt-20 mb-64" aria-labelledby="doc-and-tool">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="doc-and-tool" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Documentations et outils')}}</h2>
        </div>
        <p class="mb-8 max-w-[40%] text-lg leading-10">{{__('Vous trouverez sur cette page de la documentation et les outils qui vous seront utiles durant votre cursus que ce soit lors de votre première ou au sein de l’option web.')}}</p>
        <article aria-labelledby="list-doc">
            <h3 id="list-doc" role="heading" aria-level="3"  class="sr-only">{{__('Liste de documentations')}}</h3>
            <div class="flex mb-12">
                <a class="text-xl underline text-green-700 font-semibold font-sans mr-36 bg-orange-100 px-5 py-2" href="/technical/docandtool/doc">{{__('Documentations')}}</a>
                <a class="text-xl underline text-green-700 font-semibold font-sans px-5 py-2" href="/technical/docandtool/tool">{{__('Outils')}}</a>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-x-24 gap-y-8">
                <article aria-labelledby="php" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="php" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de PHP')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de PHP')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Développement côté serveur')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="laravel" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="laravel" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de Laravel')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de Laravel traduite en français')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="appart" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="appart" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Liste des livres A Book Appart')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers le site de «A book Appart».')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="wordpress" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="wordpress" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de Wordpress')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de Wordpress')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Design Web B2')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="js" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="js" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de Javascript')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de Javascipt')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Développement côté client')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="flutter" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="flutter" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de Flutter')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de Flutter')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Développement d\'application mobile')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="html" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="html" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de HTML')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de HTML')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('HTML')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="css" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="css" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de CSS')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de CSS')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('CSS')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="mysql" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="mysql" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de MySQL')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de MySQL')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Système de gestion de contenu')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
                <article aria-labelledby="tailwind" class="bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex justify-between">
                        <div>
                            <h4 id="tailwind" aria-level="4" role="heading" class="font-sans font-medium text-2xl mb-2">{{__('Documentation de Tailwind')}}</h4>
                        </div>
                    </div>
                    <p class="mb-10 text-lg">{{__('Lien vers la documentation de Tailwind')}}</p>
                    <div class="flex justify-between">
                        <p class="font-sans text-lg font-medium">
                            {{__('Cours de')}} <a class="underline text-green-700" href="/cours/show">{{__('Projet Web')}}</a>
                        </p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Voir la doc')}}</a>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <x-books/>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
