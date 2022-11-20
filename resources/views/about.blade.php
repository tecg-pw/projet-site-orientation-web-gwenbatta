<x-commons.navigation></x-commons.navigation>
<main>
    <section class="px-10 xl:px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="about">
        <div class="flex-1 ">
            <h2 class="text-2xl leading-8 mb-6 xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-16 font-sans"
                role="heading" aria-level="2"
                id="about">
                {{__('about.about_title')}}
            </h2>
            <p class="text-lg xl:leading-10 xl:text-xl">
                {{__('about.about_text')}}
            </p>
        </div>
        <div class="sr-only xl:not-sr-only flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
    <section class="bg-yellow-600 mt-20 px-10 py-14 xl:py-20 xl:px-36" aria-labelledby="course">
        <h2 id="course" aria-level="2" role="heading"
            class="text-2xl mb-10 xl:text-4xl uppercase font-extrabold font-sans xl:mb-20">{{__('about.course_title')}}</h2>
        <div class="flex flex-col gap-y-12 xl:flex-row justify-between">
            <section
                class="border-b-2 border-b-orange-500/40 pb-10 xl:border-b-0 xl:border-r-2 xl:pr-10 xl:border-r-orange-500/40"
                aria-labelledby="first-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="first-year" aria-level="3"
                    role="heading">{{__('about.course_first')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="web">
                    <h4 class="font-semibold" id="web" aria-level="4" role="heading">{{__('about.course_web_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <a class="hover:text-orange-500 underline" href="/cours/show">{{__('about.course_CSS')}}</a>
                            <a class="hover:text-orange-500 underline" href="/cours/show">{{__('about.course_HTML')}}</a>
                            <a class="hover:text-orange-500 underline" href="/cours/show">{{__('about.course_design_web')}}</a>
                            <a class="hover:text-orange-500 underline"
                               href="/cours/show">{{__('course_programming')}}</a>
                        </div>
                        <div class="flex flex-col ml-8 xl:gap-2">
                            <p>{{__('60H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="3D">
                    <h4 class="font-semibold" id="3D" aria-level="4" role="heading">{{__('about.course_3D_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('about.course_video')}}</p>
                            <p>{{__('about.course_photo')}}</p>
                            <p>{{__('about.course_creation_3d')}}</p>
                            <p>{{__('about.course_creation_animation_3d')}}</p>
                        </div>
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('75H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="graphic-design">
                    <h4 class="font-semibold" id="graphic-design" aria-level="4"
                        role="heading">{{__('about.course_design_graphique_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('about.course_creation_2d')}}</p>
                            <p>{{__('about.course_image_argumentation')}}</p>
                            <p>{{__('about.course_numeric_image')}}</p>
                        </div>
                        <div class="flex flex-col xl:gap-2">
                            <p>{{__('60H')}}</p>
                            <p>{{__('30H')}}</p>
                            <p>{{__('30H')}}</p>
                        </div>
                    </div>
                </section>
            </section>
            <section
                class="border-b-2 border-b-orange-500/40 pb-10 xl:border-b-0 xl:border-r-2 xl:pr-10 xl:border-r-orange-500/40"
                aria-labelledby="second-year">
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="second-year" aria-level="3"
                    role="heading">{{__('about.course_second')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="second-web">
                    <h4 class="sr-only font-semibold" id="second-web" aria-level="3"
                        role="heading">{{__('about.course_web_title')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <a class="underline hover:text-orange-500" href="/cours/show">{{__('Design Web')}}</a>
                            <a class="underline hover:text-orange-500"
                               href="/cours/show">{{__('Design d\'application mobile')}}</a>
                            <a class="underline hover:text-orange-500"
                               href="/cours/show">{{__('Développement côté serveur')}}</a>
                            <a class="underline hover:text-orange-500"
                               href="/cours/show">{{__('Développement côté client')}}</a>
                            <a class="underline hover:text-orange-500" href="/cours/show">{{__('Multimédia')}}</a>
                            <a class="underline hover:text-orange-500"
                               href="/cours/show">{{__('Système de gestion de base de données')}}</a>
                        </div>
                        <div class="flex flex-col ml-8 xl:gap-2">
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
                <h3 class="text-xl mb-7 xl:text-2xl uppercase font-medium xl:mb-14" id="third-year" aria-level="3"
                    role="heading">{{__('about.course_third')}}</h3>
                <p class="xl:text-lg">{{__('about.course_commons')}}</p>
                <section class="xl:text-lg xl:mt-8 gap-2 mt-4" aria-labelledby="third-web">
                    <h4 class="sr-only font-semibold" id="third-web" aria-level="3"
                        role="heading">{{__('Cours de web')}}</h4>
                    <div class="flex justify-between">
                        <div class="flex flex-col xl:gap-2">
                            <a class="underline hover:text-orange-500" href="/cours/show">{{__('Projet Web')}}</a>
                            <a class="underline hover:text-orange-500"
                               href="/cours/show">{{__('Développement d\'application mobile')}}</a>
                            <a class="underline hover:text-orange-500"
                               href="/cours/show">{{__('Projet de fin d\'étude')}}</a>
                            <a class="underline hover:text-orange-500" href="/cours/show">{{__('Stage')}}</a>
                        </div>
                        <div class="flex flex-col ml-8 xl:gap-2">
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
    <section class="px-10 xl:px-36 mt-14 mb-36 gap-24 items-center" aria-labelledby="profs">
        <div class="flex-1 flex flex-col xl:flex-row mt-36 xl:justify-between">
            <h2 class="text-2xl mb-6 xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-20 font-sans" role="heading"
                aria-level="2"
                id="profs">
                {{__('about.teacher_title')}}
            </h2>
            <div
                class="hover:text-orange-500 flex xl:justify-end text-green-700 underline font-sans text-lg xl:text-2xl font-semibold">
                <a href="/bottin/alumni">{{__('about.teacher_button')}}</a>
            </div>
        </div>
        <div class="xl:grid xl:grid-cols-2 flex flex-col gap-y-60 xl:mt-60 xl:gap-y-40 xl:gap-x-60">
            @foreach($teachers as $teacher)
                <article class="even:mt-36 relative group" aria-labelledby="{{$teacher->slug}}">
                    <img class="rounded-lg absolute -z-10 -top-[70%] group-even:-top-[120%]" src="{{$teacher->avatar}}"
                         alt="avatar">
                    <div class="relative bg-yellow-100 rounded-xl px-4 py-8 left-10">
                        <h3 class="font-medium text-2xl mb-5" id="{{$teacher->slug}}" aria-level="3" role="heading">
                            <a class="hover:text-orange-500" href="/bottin/{{$teacher->status === 'teachalumni'? 'teachalumni':'teacher'}}/{{$teacher->slug}}">{{$teacher->firstname}} {{$teacher->name}}</a>
                        </h3>
                        <a class="hover:text-orange-500 text-xl underline text-green-700" href="mailto:{{$teacher->mail}}">{{$teacher->mail}}</a>
                        <div class="flex gap-60 items-center mt-4 ">
                            <div class="flex gap-3">
                                <div class="relative group">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="25"
                                         viewBox="0 0 38.97 38.005">
                                        <path id="_08774047e75405e5723edc2388e9bc78"
                                              data-name="08774047e75405e5723edc2388e9bc78"
                                              d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                                              transform="translate(-1.999 -2.247)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$teacher->link_github}}">Aller sur github de {{$teacher->name}}</a>
                                </div>
                                <div class="relative group">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="25"
                                         viewBox="0 0 41.079 41.079">
                                        <path id="af2da8f3726c5aa836b9ea2eeab70e0c"
                                              d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                                              transform="translate(-2 -2)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$teacher->instagram}}">Aller sur instagram de {{$teacher->name}}</a>
                                </div>
                                <div class="group relative">
                                    <svg class="group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="25"
                                         viewBox="0 0 37.777 38.005">
                                        <path id="e42de672acac05e6c1484ce6eac8627f"
                                              d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                                              transform="translate(-2.06 -2)" fill="#da953a"/>
                                    </svg>
                                    <a class="linkcard" href="{{$teacher->linkedin}}">Aller sur le
                                        linkedin de {{$teacher->name}}</a>
                                </div>
                            </div>
                            <p class="text-green-500 text-lg items-end uppercase">{{__('Professeur')}}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <article class="bg-yellow-600 px-10 xl:px-36 pb-36 pt-20" aria-labelledby="jobs">
        <h2 id="jobs" aria-level="2" role="heading"
            class="text-2xl mb-10 xl:text-4xl uppercase font-extrabold font-sans xl:mb-20">{{__('about.job_title')}}</h2>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            <article aria-labelledby="ux" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="ux" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer d\'expérience utilisateur (UX Designer)')}}</h3>
                <p class="xl:text-lg">{{__('L’UX design (pour design d’expérience utilisateur en français) est le processus de conception de produits utiles, faciles et agréables à utiliser. Prenant racine dans le design d’expérience, il s’agit d’améliorer l’expérience des utilisateurs qui interagissent avec votre produit (numérique ou physique)')}}</p>
                <a class="linkcard"
                   href="/about/job/single">{{__('Voir plus sur Designer d\'expérience utilisateur (UX Designer)')}}</a>
            </article>
            <article aria-labelledby="dev-back" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-back" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Web Back-End')}}</h3>
                <p class="xl:text-lg">{{__('Le développeur back-end programme la partie cachée d’une solution web, le côté serveur, administrateur d’une app ou d’un site web, contrairement au développeur front-end qui s’occupe de la partie visible.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web Back-End')}}</a>
            </article>
            <article aria-labelledby="des-mmi" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-mmi" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer Multimédia')}}</h3>
                <p class="xl:text-lg">{{__('Le designer graphique et multimédia (également appelé webdesigner) est un dessinateur-maquettiste travaillant sur des supports électroniques : pages web, cédéroms, habillage TV ou vidéo. Sa mission ? Donner une identité forte à ces différents supports.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer Multimédia')}}</a>
            </article>
            <article aria-labelledby="dev-mmi" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-mmi" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Multimédia')}}</h3>
                <p class="xl:text-lg">{{__('Le Développeur Multimédia assure la conduite technique du projet c’est à dire l’ application du scénario, la manipulation d’outils graphiques, la mise en œuvre internet. Son métier se positionne au croisement de trois domaines, infographie, interface web et multimédia dont il manipule à la perfection.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Multimédia')}}</a>
            </article>
            <article aria-labelledby="ui" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="ui" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer d\'interface (UI Designer)')}}</h3>
                <p class="xl:text-lg">{{__('UI est l’abréviation d’user interface ou interface utilisateur. L’UI design se rapporte donc à l’environnement graphique dans lequel évolue l’utilisateur d’un logiciel, d’un site web ou d’une application. La mission de l’UI designer consiste à créer une interface agréable et pratique, facile à prendre en main.')}}</p>
                <a class="linkcard"
                   href="/about/job/single">{{__('Voir plus sur Designer d\'interface (UI Designer)')}}</a>
            </article>
            <article aria-labelledby="dev-front" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-front" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Web Front-End')}}</h3>
                <p class="xl:text-lg">{{__('Le développeur front end programme la partie visible, l’interface utilisateur d’une app ou d’un site web à l’inverse du développeur back-end qui travaille dans l’ombre. Son métier ressemble à celui d’un intégrateur web, mais il a un rôle plus important dans la création d’une solution web.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web Front-End')}}</a>
            </article>
            <article aria-labelledby="des-web" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-web" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer Web')}}</h3>
                <p class="xl:text-lg">{{__('Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s’occupe de tout l’aspect graphique d’un site Internet (illustrations, animations, typographie…). Il choisit la place des photos, la taille des caractères et les couleurs qui rendront la consultation agréable pour l’utilisateur.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer Web')}}</a>
            </article>
            <article aria-labelledby="dev-web" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-web" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Web')}}</h3>
                <p class="xl:text-lg">{{__('Il s’occupe de la partie technique des sites. A la demande d’un client ou d’une entreprise et sur base d’un cahier des charges. Spécialiste des langages informatiques, il prend en charge l’ensemble des fonctionnalités du site, son architecture, l’accès aux données ainsi que l’écriture des lignes de codes .')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web')}}</a>
            </article>
            <article aria-labelledby="des-mobile" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-mobile" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer Mobile')}}</h3>
                <p class="xl:text-lg">{{__('Le designer mobile est le créateur et le développeur des applications mobiles et des interfaces des entreprises. Il met sa créativité et ses connaissances au service de ses clients. Il crée des designs, des vidéos ou encore des sons pour mettre en valeur les produits et les services de ses clients.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer mobile')}}</a>
            </article>
            <article aria-labelledby="dev-mobile" class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-mobile" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Mobile')}}</h3>
                <p class="xl:text-lg">{{__('Le développeur mobile iOS/ Android se consacre à la création ou à la mise à jour d’applications destinées à fonctionner sur des appareils mobiles embarquant l’un ou l’autre de ces systèmes d’exploitation.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur mobile')}}</a>
            </article>
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
