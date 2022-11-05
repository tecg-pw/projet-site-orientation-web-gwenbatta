<x-commons.navigation></x-commons.navigation>
<main>
    <section class="px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="about">
        <div class="flex-1 ">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans" role="heading" aria-level="2"
                id="about">
                {{__('À propos de la section')}}
            </h2>
            <p class="leading-8">
                {{__('L’option Web forme des spécialistes en design Web, en design d’interaction et en développement d’applications mobiles. Les étudiantes et les étudiants sont formés pour être capables de s’occuper des aspects visuels des interfaces et des expériences d’utilisation qu’en auront les utilisateurs.
    Leur formation leur permet de gérer les deux aspects : technique et visuel.
    Ils donnent donc vie au projet du designer ou du graphiste et le transforme en un produit qui fonctionne dans un environnement technique. ')}}
            </p>
        </div>
        <div class="flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
    <section  class="bg-yellow-600 mt-20 py-20 px-36" aria-labelledby="course" >
        <h2 id="course" aria-level="2" role="heading" class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Description du bachelier option web')}}</h2>
        <div class="flex justify-between">
            <section class="border-r-2 pr-20 border-r-orange-500" aria-labelledby="first-year">
                <h3 class="text-lg uppercase font-sans font-medium mb-14" id="first-year" aria-level="3" role="heading">{{__('1er Année')}}</h3>
                <p>{{__('Cours du tron commun')}}</p>
                <section class="mt-8 gap-2" aria-labelledby="web">
                    <h4 class="font-semibold" id="web" aria-level="4" role="heading">{{__('Cours de web')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col gap-2">
                            <a class="underline" href="/cours/show">{{__('CSS')}}</a>
                            <a class="underline" href="/cours/show">{{__('HTML')}}</a>
                            <a class="underline" href="/cours/show">{{__('Design Web')}}</a>
                            <a class="underline" href="/cours/show">{{__('Initialisation à la programmation')}}</a>
                        </div>
                        <div class="flex flex-col ml-8 gap-2">
                            <p>{{__('60H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
                <section class="mt-8 flex flex-col gap-2" aria-labelledby="3D">
                    <h4 class="font-semibold" id="3D" aria-level="4" role="heading">{{__('Cours de 3D/Vidéo')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col gap-2">
                            <p>{{__('Vidéo')}}</p>
                            <p>{{__('Photo')}}</p>
                            <p>{{__('Création infographique 3D')}}</p>
                            <p>{{__('Introduction à l\'animation 3D')}}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p>{{__('75H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
                <section class="mt-8 flex flex-col gap-2" aria-labelledby="graphic-design">
                    <h4 class="font-semibold" id="graphic-design" aria-level="4" role="heading">{{__('Cours de Design Graphique')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col gap-2">
                            <p>{{__('Création infographique 2D')}}</p>
                            <p>{{__('Image et argumentation')}}</p>
                            <p>{{__('Introduction à l\'image numérique')}}</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
            </section>
            <section class="border-r-2 pr-20 border-r-orange-500" aria-labelledby="second-year">
                <h3 class="text-lg uppercase font-sans font-medium mb-14" id="second-year" aria-level="3" role="heading">{{__('2e Année')}}</h3>
                <p>{{__('Cours du tron commun')}}</p>
                <section class="mt-8 gap-2" aria-labelledby="second-web">
                    <h4 class="sr-only font-semibold" id="second-web" aria-level="3" role="heading">{{__('Cours de web')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col gap-2">
                            <a class="underline" href="/cours/show">{{__('Design Web')}}</a>
                            <a class="underline" href="/cours/show">{{__('Design d\'application mobile')}}</a>
                            <a class="underline" href="/cours/show">{{__('Développement côté serveur')}}</a>
                            <a class="underline" href="/cours/show">{{__('Développement côté client')}}</a>
                            <a class="underline" href="/cours/show">{{__('Multimédia')}}</a>
                            <a class="underline" href="/cours/show">{{__('Système de gestion de base de données')}}</a>
                        </div>
                        <div class="flex flex-col ml-8 gap-2">
                            <p>{{__('165H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('75H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('45H')}}</p>
                        </div>
                    </div>
                </section>
            </section>
            <section aria-labelledby="third-year">
                <h3 class="text-lg uppercase font-sans font-medium mb-14" id="third-year" aria-level="3" role="heading">{{__('3e Année')}}</h3>
                <p>{{__('Cours du tron commun')}}</p>
                <section class="mt-8 gap-2" aria-labelledby="third-web">
                    <h4 class="sr-only font-semibold" id="third-web" aria-level="3" role="heading">{{__('Cours de web')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col gap-2">
                            <a class="underline" href="/cours/show">{{__('Projet Web')}}</a>
                            <a class="underline" href="/cours/show">{{__('Développement d\'application mobile')}}</a>
                            <a class="underline" href="/cours/show">{{__('Projet de fin d\'étude')}}</a>
                            <a class="underline" href="/cours/show">{{__('Stage')}}</a>
                        </div>
                        <div class="flex flex-col ml-8 gap-2">
                            <p>{{__('240H')}}</p>
                            <p>{{__('45H')}}</p>
                            <p>{{__('210H')}}</p>
                            <p>{{__('140H')}}</p>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </section>
    <section class="px-36 mt-14 mb-36 gap-24 items-center" aria-labelledby="profs">
        <div class="flex-1 flex mt-36 justify-between">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-20 font-sans" role="heading" aria-level="2"
                id="profs">
                {{__('Liste des Professeurs de la section')}}
            </h2>
            <div class="flex justify-end text-green-700 underline font-sans text-2xl font-semibold">
                <a href="/bottin/alumni">{{__('Voir le bottin')}}</a>
            </div>
        </div>
        <div class="grid grid-cols-2 mt-36 gap-y-40 gap-x-20">
            @for($i=1; $i<7; $i++)
                <article class="even:mt-36 relative" aria-labelledby="slug">
                    <img class="rounded-lg absolute -z-10 bottom-2/3" src="https://placehold.jp/276x276.png" alt="avatar">
                    <div class="relative bg-yellow-100 rounded-lg px-4 py-8 left-10">
                        <h3 class="font-sans font-medium text-xl mb-5" id="slug" aria-level="3" role="heading">Nom du professeur</h3>
                        <a class="underline text-green-700" href="mailto:@hepl.be">adresse mail</a>
                        <div class="flex justify-center items-center mt-4 ">
                        <div class="flex flex-1 gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38.97" height="38.005"
                                 viewBox="0 0 38.97 38.005">
                                <path id="_08774047e75405e5723edc2388e9bc78"
                                      data-name="08774047e75405e5723edc2388e9bc78"
                                      d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                                      transform="translate(-1.999 -2.247)" fill="#da953a"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="41.079" height="41.079"
                                 viewBox="0 0 41.079 41.079">
                                <path id="af2da8f3726c5aa836b9ea2eeab70e0c"
                                      d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                                      transform="translate(-2 -2)" fill="#da953a"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37.777" height="38.005"
                                 viewBox="0 0 37.777 38.005">
                                <path id="e42de672acac05e6c1484ce6eac8627f"
                                      d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                                      transform="translate(-2.06 -2)" fill="#da953a"/>
                            </svg>

                        </div>
                        <p class="text-green-500 uppercase">professeur</p>
                        </div>
                    </div>
                </article>
            @endfor
        </div>
    </section>
    <article  class="bg-yellow-600 px-36 pb-36 pt-20" aria-labelledby="jobs">
        <h2 id="jobs" aria-level="2" role="heading" class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Débouchées')}}</h2>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            <article aria-labelledby="ux" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="ux" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer d\'expérience utilisateur (UX Designer)')}}</h3>
                <p class="text-lg">{{__('L’UX design (pour design d’expérience utilisateur en français) est le processus de conception de produits utiles, faciles et agréables à utiliser. Prenant racine dans le design d’expérience, il s’agit d’améliorer l’expérience des utilisateurs qui interagissent avec votre produit (numérique ou physique)')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer d\'expérience utilisateur (UX Designer)')}}</a>
            </article>
            <article aria-labelledby="dev-back" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-back" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Web Back-End')}}</h3>
                <p class="text-lg">{{__('Le développeur back-end programme la partie cachée d’une solution web, le côté serveur, administrateur d’une app ou d’un site web, contrairement au développeur front-end qui s’occupe de la partie visible.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web Back-End')}}</a>
            </article>
            <article aria-labelledby="des-mmi" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-mmi" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer Multimédia')}}</h3>
                <p class="text-lg">{{__('Le designer graphique et multimédia (également appelé webdesigner) est un dessinateur-maquettiste travaillant sur des supports électroniques : pages web, cédéroms, habillage TV ou vidéo. Sa mission ? Donner une identité forte à ces différents supports.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer Multimédia')}}</a>
            </article>
            <article aria-labelledby="dev-mmi" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-mmi" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Multimédia')}}</h3>
                <p class="text-lg">{{__('Le Développeur Multimédia assure la conduite technique du projet c’est à dire l’ application du scénario, la manipulation d’outils graphiques, la mise en œuvre internet. Son métier se positionne au croisement de trois domaines, infographie, interface web et multimédia dont il manipule à la perfection.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Multimédia')}}</a>
            </article>
            <article aria-labelledby="ui" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="ui" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer d\'interface (UI Designer)')}}</h3>
                <p class="text-lg">{{__('UI est l’abréviation d’user interface ou interface utilisateur. L’UI design se rapporte donc à l’environnement graphique dans lequel évolue l’utilisateur d’un logiciel, d’un site web ou d’une application. La mission de l’UI designer consiste à créer une interface agréable et pratique, facile à prendre en main.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer d\'interface (UI Designer)')}}</a>
            </article>
            <article aria-labelledby="dev-front" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-front" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Web Front-End')}}</h3>
                <p class="text-lg">{{__('Le développeur front end programme la partie visible, l’interface utilisateur d’une app ou d’un site web à l’inverse du développeur back-end qui travaille dans l’ombre. Son métier ressemble à celui d’un intégrateur web, mais il a un rôle plus important dans la création d’une solution web.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web Front-End')}}</a>
            </article>
            <article aria-labelledby="des-web" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-web" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer Web')}}</h3>
                <p class="text-lg">{{__('Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s’occupe de tout l’aspect graphique d’un site Internet (illustrations, animations, typographie…). Il choisit la place des photos, la taille des caractères et les couleurs qui rendront la consultation agréable pour l’utilisateur.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer Web')}}</a>
            </article>
            <article aria-labelledby="dev-web" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-web" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Web')}}</h3>
                <p class="text-lg">{{__('Il s’occupe de la partie technique des sites. A la demande d’un client ou d’une entreprise et sur base d’un cahier des charges. Spécialiste des langages informatiques, il prend en charge l’ensemble des fonctionnalités du site, son architecture, l’accès aux données ainsi que l’écriture des lignes de codes .')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web')}}</a>
            </article>
            <article aria-labelledby="des-mobile" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-mobile" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer Mobile')}}</h3>
                <p class="text-lg">{{__('Le designer mobile est le créateur et le développeur des applications mobiles et des interfaces des entreprises. Il met sa créativité et ses connaissances au service de ses clients. Il crée des designs, des vidéos ou encore des sons pour mettre en valeur les produits et les services de ses clients.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer mobile')}}</a>
            </article>
            <article aria-labelledby="dev-mobile" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-mobile" aria-level="3" role="heading" class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Mobile')}}</h3>
                <p class="text-lg">{{__('Le développeur mobile iOS/ Android se consacre à la création ou à la mise à jour d’applications destinées à fonctionner sur des appareils mobiles embarquant l’un ou l’autre de ces systèmes d’exploitation.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur mobile')}}</a>
            </article>
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
