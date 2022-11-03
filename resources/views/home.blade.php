<x-commons.navigation></x-commons.navigation>
<main class="text-2xl">
    <section class="flex mt-20 px-36 items-center justify-center" aria-labelledby="intro">
        <div class="mr-40">
            <h2 role="heading" id="intro" aria-level="2"
                class="text-4xl uppercase font-extrabold text-yellow-800 mb-12 font-sans">
                {{__('Un choix à faire ? Choisis le web !')}}
            </h2>
            <p class="leading-12 mb-24 max-w-3xl font-thin">{{__('TecWeb est le site de l’option web de la HELP (Haute École de la Province de Liège). Nous te proposons ici de découvrir cette merveilleuse option, de voir ce qu’elle a à t’offrir et de te faire une idée sur ce qui t’attends avant de nous rejoindre. Bonne visite et à bientôt dans les couloirs !')}}</p>
            <div class="flex gap-x-26 justify-center items-center">
                <a href="about.blade.php"
                   class="font-sans text-center flex-1 text-white-100 bg-green-700 px-4 py-6 rounded-3xl text-3xl font-semibold ">{{__('Découvrir davantage')}}</a>
                <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1 px-4 py-6 self-end"
                   href="forum.blade.php">{{__('J\'ai des questions')}}</a>
            </div>
        </div>
        <figure class="grid grid-rows-1 grid-cols-2 gap-8">
            <img class="rounded-3xl row-span-4" src="img-redimensions/pexels-buro-millennial-1438072.jpg" alt="">
            <img class="rounded-3xl" src="img-redimensions/pexels-buro-millennial-1438084.jpg" alt="">
            <img class="rounded-3xl" src="img-redimensions/pexels-buro-millennial-1438081.jpeg" alt="">
        </figure>
    </section>
    <section class="mt-40 bg-yellow-600 px-36 grid grid-cols-3 pb-28" aria-labelledby="why">
        <div class="mt-20  border-r-2 border-orange-500 pr-32 mr-36 col-span-2">
            <h2 id="why" aria-level="2" role="heading"
                class="text-4xl uppercase font-bold mb-12 font-sans">{{__('Pourquoi choisir le web ?')}}</h2>
            <p class="leading-12 max-w-3xl">{{__('L’ère 2.0 a fait naître tout un nouvel univers, ce qui a généré un business novateur très rentable. Mais les activités et le marché de l’Internet sont encore immatures, ils sont en expansion constante et de nombreuses expérimentations sont encore menées. Ce grand mouvement a fait naitre de nouveaux métiers, et est en train de faire évoluer profondément la communication traditionnelle qui devient une communication qui intègre aujourd’hui obligatoirement le digital. Les métiers du web offrent un éventail très large de compétences regroupant communication, commerce, informatique, graphisme, développement et la liste ne s’arrête pas là … Ces nouveaux métiers sont souvent complémentaires, alliant développement technique et technologique, webmarketing et production de contenus en majeure partie.')}}</p>
        </div>
        <ol class="self-center mt-16">
            <li class="flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500">
                <dt class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Des cours de qualité')}}</dt>
                <dd class="leading-9">{{__('L’option web a un excellent cursus d’apprentissage, les entreprises raffolent de nos étudiants.')}}</dd>
                <a class="self-end" href="about.blade.php">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27.417" viewBox="0 0 32 27.417">
  <path id="e6c07a72bd494f72e4a4d962e39f725c"
        d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
        transform="translate(-19 -8.001)" fill="#4e6458"/>
                        </svg>
                    </span>
                    <span class="more">
                        {{__('En savoir plus sur les cours')}}
                    </span>
                </a>
            </li>
            <li class="flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500">
                <dt class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Une sûreté d\'emploi')}}</dt>
                <dd class="leading-9">{{__('De nombreuses entreprises viennent recruter nos élèves dès leur sortie de l’école.')}}</dd>
                <a class="self-end" href="agency.blade.php">{{__('En savoir plus sur les emploi')}}</a>
            </li>
            <li class="flex flex-col pt-7 justify-self-center pb-12 ">
                <dt class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Des professeurs passionnés')}}</dt>
                <dd class="leading-9">{{__('Nos professeurs sont de vrais passionnés et ils prennent le temps de nous transmettre leur passion.')}}</dd>
                <a class="self-end" href="about.blade.php">{{__('En savoir plus sur les professeur')}}</a>
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
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" id="slug" aria-level="3" role="heading">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" id="slug" aria-level="3" role="heading">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
            <article class="flex-col flex bg-yellow-100 rounded-3xl" aria-labelledby="slug">
                <span class="flex-col flex px-4 mt-6">
                    <h3 class="font-sans text-3xl mb-3" id="slug" aria-level="3" role="heading">{{__('Titre')}}</h3>
                    <a href="user/single.blade.php">{{__('Name')}}</a>
                    <p class="text-xl">Date du projet</p>
                    <a class="self-end" href="projets/single.blade.php">{{__('Voir le projet')}}</a>
                </span>
                <figure class="order-first">
                    <img class="rounded-t-3xl" src="https://placehold.jp/526x526.png" alt="">
                </figure>
            </article>
        </div>
    </article>
    <article class="pt-20  mt-40 bg-yellow-600 px-36 pb-28" aria-labelledby="questions">
        <div class="mt-20 flex">
            <h2 class="text-4xl uppercase font-bold mb-12 font-sans" role="heading" aria-level="2"
                id="questions">{{__('Quelques questions posées sur notre forum')}}</h2>
            <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1"
               href="forum/index.blade.php">{{__('Voir le forum')}}</a>
        </div>
        <div class="grid grid-cols-3">
            <div class="mt-20  border-r-2 border-orange-500 pr-32 mr-36 col-span-2 ">
                <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                    <div class="grid grid-cols-4 grid-rows-3">
                        <h3 class=" self-center order-3 font-sans col-span-2" id="question" role="heading"
                            aria-level="3">Question du forum</h3>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">
                        <div class="order-2 col-span-3 flex">
                            <a class="mr-16" href="/user/single.blade.php">
                                <p>Nom de l'auteur</p>
                            </a>
                            <p class="font-bold text-green-500">Générale</p>
                            <p class="flex-1 text-end text-xl">30 septembre 2022</p>
                        </div>
                        <div class="order-4 col-span-3 flex">
                            <div class="flex flex-1 items-end gap-16 text-xl">
                                {{--                @if(count($post->comments) > 1)--}}
                                <p class="mr-4">{{__('Commentaires : 0')}}</p>

                                {{--                @else--}}
                                {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                {{--                @endif--}}
                                <p class="mr-4">{{__('3/5')}}</p>
                                <a class="flex-1 font-sans font-semibold underline text-green-700 text-end"
                                   href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                    <div class="grid grid-cols-4 grid-rows-3">
                        <h3 class=" self-center order-3 font-sans col-span-2" id="question" role="heading"
                            aria-level="3">Question du forum</h3>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">
                        <div class="order-2 col-span-3 flex">
                            <a class="mr-16" href="/user/single.blade.php">
                                <p>Nom de l'auteur</p>
                            </a>
                            <p class="font-bold text-green-500">Générale</p>
                            <p class="flex-1 text-end text-xl">30 septembre 2022</p>
                        </div>
                        <div class="order-4 col-span-3 flex">
                            <div class="flex flex-1 items-end gap-16 text-xl">
                                {{--                @if(count($post->comments) > 1)--}}
                                <p class="mr-4">{{__('Commentaires : 0')}}</p>

                                {{--                @else--}}
                                {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                {{--                @endif--}}
                                <p class="mr-4">{{__('3/5')}}</p>
                                <a class="flex-1 font-sans font-semibold underline text-green-700 text-end"
                                   href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                    <div class="grid grid-cols-4 grid-rows-3">
                        <h3 class=" self-center order-3 font-sans col-span-2" id="question" role="heading"
                            aria-level="3">Question du forum</h3>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">
                        <div class="order-2 col-span-3 flex">
                            <a class="mr-16" href="/user/single.blade.php">
                                <p>Nom de l'auteur</p>
                            </a>
                            <p class="font-bold text-green-500">Générale</p>
                            <p class="flex-1 text-end text-xl">30 septembre 2022</p>
                        </div>
                        <div class="order-4 col-span-3 flex">
                            <div class="flex flex-1 items-end gap-16 text-xl">
                                {{--                @if(count($post->comments) > 1)--}}
                                <p class="mr-4">{{__('Commentaires : 0')}}</p>

                                {{--                @else--}}
                                {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                {{--                @endif--}}
                                <p class="mr-4">{{__('3/5')}}</p>
                                <a class="flex-1 font-sans font-semibold underline text-green-700 text-end"
                                   href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                    <div class="grid grid-cols-4 grid-rows-3">
                        <h3 class=" self-center order-3 font-sans col-span-2" id="question" role="heading"
                            aria-level="3">Question du forum</h3>
                        <img class="order-1 row-span-3 order-1 justify-self-center row-span-2 rounded-full"
                             src="https://placehold.jp/108x108.png"
                             alt="Nom">
                        <div class="order-2 col-span-3 flex">
                            <a class="mr-16" href="/user/single.blade.php">
                                <p>Nom de l'auteur</p>
                            </a>
                            <p class="font-bold text-green-500">Générale</p>
                            <p class="flex-1 text-end text-xl">30 septembre 2022</p>
                        </div>
                        <div class="order-4 col-span-3 flex">
                            <div class="flex flex-1 items-end gap-16 text-xl">
                                {{--                @if(count($post->comments) > 1)--}}
                                <p class="mr-4">{{__('Commentaires : 0')}}</p>

                                {{--                @else--}}
                                {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                {{--                @endif--}}
                                <p class="mr-4">{{__('3/5')}}</p>
                                <a class="flex-1 font-sans font-semibold underline text-green-700 text-end"
                                   href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            {{--        @endforeach--}}
            <div>
                <article aria-labelledby="last-question">
                    <h3 class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Derniers sujets')}}</h3>
                    {{--        @foreach()--}}
                    <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                        <div class="flex flex-col">
                            <h4 aria-level="4" role="heading" id="question" class="order-2 font-sans">Question du
                                forum</h4>
                            <p class="flex-1 order-1 text-xl">30 septembre 2022</p>
                            <div class="order-4 col-span-3 flex">
                                <div class="flex flex-1 mt-2 justify-between items-end gap-16 text-xl">
                                    {{--                @if(count($post->comments) > 1)--}}
                                    <p>{{__('Commentaires : 0')}}</p>

                                    {{--                @else--}}
                                    {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                    {{--                @endif--}}
                                    <p>{{__('3/5')}}</p>
                                    <a class="flex-1 font-sans text-end font-semibold underline text-green-700 "
                                       href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                        <div class="flex flex-col">
                            <h4 aria-level="4" role="heading" id="question" class="order-2 font-sans">Question du
                                forum</h4>
                            <p class="flex-1 order-1 text-xl">30 septembre 2022</p>
                            <div class="order-4 col-span-3 flex">
                                <div class="flex flex-1 mt-2 justify-between items-end gap-16 text-xl">
                                    {{--                @if(count($post->comments) > 1)--}}
                                    <p>{{__('Commentaires : 0')}}</p>

                                    {{--                @else--}}
                                    {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                    {{--                @endif--}}
                                    <p>{{__('3/5')}}</p>
                                    <a class="flex-1 font-sans text-end font-semibold underline text-green-700 "
                                       href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    {{--        @endforeach--}}
                </article>
                <article aria-labelledby="best-rating">
                    <h3 id="best-rating" aria-level="3" role="heading"
                        class="text-3xl font-sans font-light text-green-700 underline decoration-dashed mb-6">{{__('Sujets populaires')}}</h3>
                    {{--        @foreach()--}}
                    <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                        <div class="flex flex-col">
                            <h4 aria-level="4" role="heading" id="question" class="order-2 font-sans">Question du
                                forum</h4>
                            <p class="flex-1 order-1 text-xl">30 septembre 2022</p>
                            <div class="order-4 col-span-3 flex">
                                <div class="flex flex-1 mt-2 justify-between items-end gap-16 text-xl">
                                    {{--                @if(count($post->comments) > 1)--}}
                                    <p>{{__('Commentaires : 0')}}</p>

                                    {{--                @else--}}
                                    {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                    {{--                @endif--}}
                                    <p>{{__('3/5')}}</p>
                                    <a class="flex-1 font-sans text-end font-semibold underline text-green-700 "
                                       href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white-100 mb-8 rounded-3xl p-5" aria-labelledby="question">
                        <div class="flex flex-col">
                            <h4 aria-level="4" role="heading" id="question" class="order-2 font-sans">Question du
                                forum</h4>
                            <p class="flex-1 order-1 text-xl">30 septembre 2022</p>
                            <div class="order-4 col-span-3 flex">
                                <div class="flex flex-1 mt-2 justify-between items-end gap-16 text-xl">
                                    {{--                @if(count($post->comments) > 1)--}}
                                    <p>{{__('Commentaires : 0')}}</p>

                                    {{--                @else--}}
                                    {{--                    <p class="mr-4">Aucun Commentaire</p>--}}
                                    {{--                @endif--}}
                                    <p>{{__('3/5')}}</p>
                                    <a class="flex-1 font-sans text-end font-semibold underline text-green-700 "
                                       href="forum/single.blade.php">{{__('Voir la conversation')}}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    {{--        @endforeach--}}
                </article>
            </div>
        </div>
    </article>
    <section class="flex my-20 px-36 items-center" aria-labelledby="interrest">
        <div class="mr-40">
            <h2 id="interrest" class="text-4xl uppercase font-bold text-yellow-800 mb-12 font-sans" role="heading"
                aria-level="2">
                {{__('Vous êtes interressé ?')}}
            </h2>
            <p class="leading-12 mb-24 max-w-3xl font-thin">{{__('Si ta visite sur ce site t’as convaincu, nous t’invitons à t’inscrire au plus vite chez nous ! Mais si tu es encore hésitant car tu as encore des questions ou que tu souhaite avoir un contact avec quelqu’un, n’hésite pas à te rendre sur notre page de contact. Tu y trouveras forcément de l’aide !')}}</p>
            <div class="flex gap-x-26 justify-center items-center">
                <a href="about.blade.php"
                   class="font-sans text-center flex-1 text-white-100 bg-green-700 px-4 py-6 rounded-3xl text-3xl font-semibold">{{__('Contactez-nous !')}}</a>
                <a class="font-sans text-end text-green-700 text-3xl font-semibold underline flex-1 px-4 py-6 self-end"
                   href="https://www.hepl.be/fr/inscription">{{__('Je veux m\'inscrire')}}</a>
            </div>
        </div>
        <figure class="grid grid-rows-1 grid-cols-2 gap-8">
            <img class="rounded-3xl row-span-4" src="img-redimensions/windows-VMPhyAoVqqk-unsplash.jpg" alt="">
            <img class="rounded-3xl" src="img-redimensions/student-g0a8698c9e_1920.jpg" alt="">
            <img class="rounded-3xl" src="img-redimensions/pexels-olya-kobruseva-5428836.jpg" alt="">
        </figure>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
