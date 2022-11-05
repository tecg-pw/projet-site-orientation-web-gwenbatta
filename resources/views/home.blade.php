<x-commons.navigation></x-commons.navigation>
<main class="text-2xl">
    <section class="px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="intro">
        <div class="flex-1 ">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans" role="heading" aria-level="2"
                id="intro">
                {{__('UN CHOIX À FAIRE ? CHOISIS LE WEB !')}}
            </h2>
            <p class="leading-10">
                {{__('TecWeb est le site de l’option web de la HELP (Haute École de la Province de Liège). Nous te proposons ici de découvrir cette merveilleuse option, de voir ce qu’elle a à t’offrir et de te faire une idée sur ce qui t’attends avant de nous rejoindre. Bonne visite et à bientôt dans les couloirs !')}}
            </p>
            <div class="mt-20 flex items-center justify-between">
                <a href="/about"
                   class="font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-2xl font-semibold ">{{__('En savoir plus')}}</a>
                <a class=" self-center flex font-sans text-end text-green-700 text-2xl font-semibold underline px-4 py-6 self-end"
                   href="/forum/index">{{__('J\'ai des questions')}}
                </a>
            </div>
        </div>
        <div class="flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
    <section class="mt-40 bg-yellow-600 px-36 grid grid-cols-5 pb-28 gap-20" aria-labelledby="why">
        <div class="mt-20  border-r-2 border-orange-500 col-span-3 pr-14">
            <h2 id="why" aria-level="2" role="heading"
                class="text-4xl uppercase font-bold mb-12 font-sans">{{__('Pourquoi choisir le web ?')}}</h2>
            <p class="leading-10 max-w-3xl">{{__('L’ère 2.0 a fait naître tout un nouvel univers, ce qui a généré un business novateur très rentable. Mais les activités et le marché de l’Internet sont encore immatures, ils sont en expansion constante et de nombreuses expérimentations sont encore menées. Ce grand mouvement a fait naitre de nouveaux métiers, et est en train de faire évoluer profondément la communication traditionnelle qui devient une communication qui intègre aujourd’hui obligatoirement le digital. Les métiers du web offrent un éventail très large de compétences regroupant communication, commerce, informatique, graphisme, développement et la liste ne s’arrête pas là … Ces nouveaux métiers sont souvent complémentaires, alliant développement technique et technologique, webmarketing et production de contenus en majeure partie.')}}</p>
        </div>
        <ol class="self-center col-span-2 mt-16">
            <li class="flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500">
                <dt class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Des cours de qualité')}}</dt>
                <dd class="leading-9">{{__('L’option web a un excellent cursus d’apprentissage, les entreprises raffolent de nos étudiants.')}}</dd>
                <svg class="self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417" viewBox="0 0 32 27.417">
                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/about#course">
                        {{__('En savoir plus sur les cours')}}
                </a>
            </li>
            <li class="flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500">
                <dt class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Une sûreté d\'emploi')}}</dt>
                <dd class="leading-9">{{__('De nombreuses entreprises viennent recruter nos élèves dès leur sortie de l’école.')}}</dd>
                <svg class="self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417" viewBox="0 0 32 27.417">
                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/about#jobs">
                    {{__('En savoir plus sur les cours')}}
                </a>
            </li>
            <li class="flex flex-col pt-7 justify-self-center pb-12 ">
                <dt class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Des professeurs passionnés')}}</dt>
                <dd class="leading-9">{{__('Nos professeurs sont de vrais passionnés et ils prennent le temps de nous transmettre leur passion.')}}</dd>
                <svg class="self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417" viewBox="0 0 32 27.417">
                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/about#profs">
                    {{__('En savoir plus sur les cours')}}
                </a>
            </li>
        </ol>
    </section>
    <article class="mt-20 px-36 mb-36" aria-labelledby="projects">
        <div class="flex mb-28">
            <h2 role="heading" aria-level="2" id="projects"
                class="text-4xl uppercase font-bold text-yellow-800 mb-12 font-sans">
                {{__('Quelques projets ambitieux')}}
            </h2>
            <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1"
               href="/projet/index">{{__('Voir tous les projets')}}</a>
        </div>
        <div class="flex gap-8 justify-center">
            @for($i=1; $i<4;$i++)
                <x-project/>
            @endfor
        </div>
    </article>
    <article class="pt-20  mt-40 bg-yellow-600 px-36 pb-28" aria-labelledby="questions">
        <div class="mt-20 flex mb-24">
            <h2 class="text-4xl uppercase font-bold mb-12 font-sans" role="heading" aria-level="2"
                id="questions">{{__('Quelques questions posées sur notre forum')}}</h2>
            <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1"
               href="forum/index">{{__('Voir le forum')}}</a>
        </div>
        <div class="grid grid-cols-5 justify-between">
            <div class="col-span-3 flex flex-col gap-y-8 pr-14 border-r-2 border-r-orange-500">
                @for($i=1;$i<6;$i++)
                    <article class="bg-white-100 flex p-6 rounded-xl" aria-labelledby="question">
                        <div class="order-2 flex-1 flex flex-col ml-4">
                            <h3 class="order-2 font-medium font-sans text-2xl mb-4" id="question" role="heading"
                                aria-level="3">Question du forum</h3>
                            <div class="flex justify-between">
                                <p class="text-xl mb-2">Nom de l'auteur</p>
                                <p class="font-bold text-lg text-green-500">Général</p>
                                <p>03 novembre 2022</p>
                            </div>
                            <div class="order-3 flex justify-between">
                                <div class="flex gap-10">
                                    <p>Comment:5</p>
                                    <p>3/5</p>
                                </div>
                                <a class="underline text-green-700 font-sans font-semibold" href="">Voir la
                                    conversation</a>
                            </div>
                        </div>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">


                    </article>
                @endfor
            </div>
            <div class="col-span-2 flex flex-col gap-y-6 pl-14">
                <article class="border-b-orange-500 border-b-2 pb-10" aria-labelledby="latest">
                    <h3 id="latest" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Derniers sujet')}}</h3>
                    <div class="flex flex-col gap-y-8">
                        @for($i=1;$i<3;$i++)
                            <article class="bg-white-100 flex p-6 rounded-xl" aria-labelledby="question">
                                <div class="order-2 flex-1 flex flex-col ml-4">
                                    <h4 class="order-2 font-medium font-sans text-2xl mb-4" id="question" role="heading"
                                        aria-level="3">Question du forum</h4>
                                    <div class="flex justify-between">
                                        <p class="text-xl mb-2">Nom de l'auteur</p>
                                        <p>03 novembre 2022</p>
                                    </div>
                                    <div class="order-3 flex justify-between">
                                        <div class="flex gap-10">
                                            <p>Comment:5</p>
                                            <p>3/5</p>
                                        </div>
                                        <a class="underline text-green-700 font-sans font-semibold" href="">Voir la
                                            conversation</a>
                                    </div>
                                </div>
                            </article>
                        @endfor
                    </div>
                </article>
                <article class="flex flex-col gap-y-8 " aria-labelledby="best-rating">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Sujets populaires')}}</h3>
                    <div class="flex flex-col gap-y-8">
                        @for($i=1;$i<3;$i++)
                            <article class="bg-white-100 flex p-6 rounded-xl" aria-labelledby="question">
                                <div class="order-2 flex-1 flex flex-col ml-4">
                                    <h4 class="order-2 font-medium font-sans text-2xl mb-4" id="question" role="heading"
                                        aria-level="3">Question du forum</h4>
                                    <div class="flex justify-between">
                                        <p class="text-xl mb-2">Nom de l'auteur</p>
                                        <p>03 novembre 2022</p>
                                    </div>
                                    <div class="order-3 flex justify-between">
                                        <div class="flex gap-10">
                                            <p>Comment:5</p>
                                            <p>3/5</p>
                                        </div>
                                        <a class="underline text-green-700 font-sans font-semibold" href="">Voir la
                                            conversation</a>
                                    </div>
                                </div>
                            </article>
                        @endfor
                    </div>
                </article>
            </div>
        </div>

    </article>
    <section class="px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="interrest">
        <div class="flex-1 ">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans" role="heading" aria-level="2"
                id="interrest">
                {{__('Vous êtes interressé ?')}}
            </h2>
            <p class="leading-10">
                {{__('Si ta visite sur ce site t’as convaincu, nous t’invitons à t’inscrire au plus vite chez nous ! Mais si tu es encore hésitant car tu as encore des questions ou que tu souhaite avoir un contact avec quelqu’un, n’hésite pas à te rendre sur notre page de contact. Tu y trouveras forcément de l’aide !')}}
            </p>
            <div class="mt-20 flex items-center justify-between">
                <a href="/contact/student"
                   class="font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-2xl font-semibold ">{{__('Contactez-nous')}}</a>
                <a class=" self-center flex font-sans text-end text-green-700 text-2xl font-semibold underline px-4 py-6 self-end"
                   href="https://www.hepl.be/fr/inscription">{{__('Je veux m\'inscrire')}}
                </a>
            </div>
        </div>
        <div class="flex-1">
            <figure class="grid grid-rows-2 grid-cols-2 gap-8">
                <img class="rounded-3xl row-span-2 min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
