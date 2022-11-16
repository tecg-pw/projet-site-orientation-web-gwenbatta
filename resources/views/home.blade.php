<x-commons.navigation></x-commons.navigation>
<main class="xl:text-2xl">
    <section class="relative mt-14 px-10 xl:px-36 xl:flex xl:mt-14 xl:mb-36 xl:gap-24 xl:items-center" aria-labelledby="intro">
        <div class="xl:flex-1">
            <h2 class="text-2xl leading-8 mb-6 uppercase font-bold text-yellow-800 font-sans xl:text-4xl xl:mb-16  xl:leading-12" role="heading" aria-level="2"
                id="intro">
                {{__('Un choix à faire ? Choisis le web !')}}
            </h2>
            <p class="text-lg leading-8 xl:leading-10 xl:text-xl">
                {{__('TecWeb est le site de l’option web de la HEPL (Haute École de la Province de Liège). Nous te proposons ici de découvrir cette merveilleuse option, de voir ce qu’elle a à t’offrir et de te faire une idée sur ce qui t’attends avant de nous rejoindre. Bonne visite et à bientôt dans les couloirs !')}}
            </p>
            <div class="mt-6 flex flex-col xl:justify-between xl:flex-row xl:items-center xl:mt-20 ">
                <a href="/about"
                   class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('En savoir plus')}}</a>
                <a class="text-center rounded-lg px-4 py-2 hover:text-orange-500 font-semibold underline font-sans text-green-700 xl:self-center xl:flex xl:text-end xl:text-2xl  xl:px-4 xl:py-6 xl:self-end"
                   href="/forum/index">{{__('J\'ai des questions')}}
                </a>
            </div>
        </div>
        <div class="xl:flex-1">
            <figure class=" xl:grid xl:grid-rows-2 xl:grid-cols-2 xl:gap-8">
                <img class="sr-only xl:not-sr-only xl:rounded-3xl xl:row-span-2 xl:min-h-full" src="https://placehold.jp/396x584.png" alt="">
                <img class="sr-only xl:not-sr-only xl:rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
                <img class="sr-only xl:not-sr-only xl:rounded-3xl" src="https://placehold.jp/330x278.png" alt="">
            </figure>
        </div>
    </section>
    <section class="px-10 bg-yellow-600 mt-16 xl:mt-40 xl:px-36 xl:grid xl:grid-cols-5 xl:pb-28 xl:gap-20" aria-labelledby="why">
        <div class="border-b-2 pb-14 xl:pb-0 xl:border-b-0 xl:mt-20 xl:border-r-2 border-orange-500/40 xl:col-span-3 xl:pr-14">
            <h2 id="why" aria-level="2" role="heading"
                class="pt-14 leading-8 mb-6 text-2xl uppercase font-bold font-sans xl:mb-12 xl:text-4xl ">{{__('Pourquoi choisir le web ?')}}</h2>
            <p class="text-lg xl:text-xl xl:leading-10 xl:max-w-3xl">{{__('L’ère 2.0 a fait naître tout un nouvel univers, ce qui a généré un business novateur très rentable. Mais les activités et le marché de l’Internet sont encore immatures, ils sont en expansion constante et de nombreuses expérimentations sont encore menées. Ce grand mouvement a fait naitre de nouveaux métiers, et est en train de faire évoluer profondément la communication traditionnelle qui devient une communication qui intègre aujourd’hui obligatoirement le digital. Les métiers du web offrent un éventail très large de compétences regroupant communication, commerce, informatique, graphisme, développement et la liste ne s’arrête pas là … Ces nouveaux métiers sont souvent complémentaires, alliant développement technique et technologique, webmarketing et production de contenus en majeure partie.')}}</p>
        </div>
        <div class=" xl:self-center xl:col-span-2 xl:mt-16">
            <div class="relative group flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500/40">
                <p class="group-hover:text-orange-500 text-2xl font-light text-green-700 underline mb-6">{{__('Des cours de qualité')}}</p>
                <p class="leading-8 text-xl">{{__('L’option web a un excellent cursus d’apprentissage, les entreprises raffolent de nos étudiants.')}}</p>
                <svg class="group-hover:mr-0 self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417"
                     viewBox="0 0 32 27.417">
                    <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/about#course">
                    {{__('En savoir plus sur les cours')}}
                </a>
            </div>
            <div class="group relative flex flex-col pt-7 justify-self-center pb-8 border-b-2 border-orange-500/40">
                <p class="group-hover:text-orange-500 text-2xl font-light text-green-700 underline mb-6">{{__('Une sûreté d\'emploi')}}</p>
                <p class="leading-8 text-xl">{{__('De nombreuses entreprises viennent recruter nos élèves dès leur sortie de l’école.')}}</p>
                <svg class="group-hover:mr-0 self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417"
                     viewBox="0 0 32 27.417">
                    <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/about#jobs">
                    {{__('En savoir plus sur les cours')}}
                </a>
            </div>
            <div class="group relative flex flex-col pt-7 justify-self-center pb-12 ">
                <p class="group-hover:text-orange-500 text-2xl font-light text-green-700 underline mb-6">{{__('Des professeurs passionnés')}}</p>
                <p class="leading-8 text-xl">{{__('Nos professeurs sont de vrais passionnés et ils prennent le temps de nous transmettre leur passion.')}}</p>
                <svg class="group-hover:mr-0  self-end mr-4" xmlns="http://www.w3.org/2000/svg" width="32" height="27.417"
                     viewBox="0 0 32 27.417">
                    <path d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                        transform="translate(-19 -8.001)" fill="#4e6458"/>
                </svg>
                <a class="linkcard" href="/about#profs">
                    {{__('En savoir plus sur les cours')}}
                </a>
            </div>
        </div>
    </section>
    <article class="px-10 mt-16 xl:mt-20 xl:px-36 xl:mb-36" aria-labelledby="projects">
        <div class="flex flex-col mb-14 xl:flex-row xl:mb-28">
            <h2 role="heading" aria-level="2" id="projects"
                class="text-2xl mb-6 xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-12 font-sans">
                {{__('Quelques projets ambitieux')}}
            </h2>
            <a class="hover:text-orange-500 font-sans  text-green-700  font-semibold underline flex-1 xl:text-end xl:text-3xl"
               href="/projet/index">{{__('Voir tous les projets')}}</a>
        </div>
        <div class="flex-wrap flex gap-8 justify-center xl:flex-nowrap">
            @for($i=1; $i<4;$i++)
                <x-project :i="$i"></x-project>
            @endfor
        </div>
    </article>
    <x-questions-forum></x-questions-forum>
    <section class="px-10 xl:px-36 flex mt-14 mb-36 gap-24 items-center" aria-labelledby="interrest">
        <div class="flex-1">
            <h2 class="pt-14 leading-8 mb-6 text-2xl xl:text-4xl uppercase font-bold text-yellow-800 xl:mb-16 font-sans" role="heading" aria-level="2"
                id="interrest">
                {{__('Vous êtes interressé ?')}}
            </h2>
            <p class="text-lg xl:text-xl xl:leading-10">
                {{__('Si ta visite sur ce site t’as convaincu, nous t’invitons à t’inscrire au plus vite chez nous ! Mais si tu es encore hésitant car tu as encore des questions ou que tu souhaite avoir un contact avec quelqu’un, n’hésite pas à te rendre sur notre page de contact. Tu y trouveras forcément de l’aide !')}}
            </p>
            <div class="mt-6 flex flex-col xl:justify-between xl:flex-row xl:items-center xl:mt-20 ">
                <a href="/contact/student"
                   class="hover:text-green-700 hover:bg-white-100 text-center rounded-lg px-4 py-2 mb-3 text-white-100 bg-green-700 font-sans font-semibold xl:border-2 xl:border-green-700 xl:mb-0 xl:text-center xl:px-10 xl:py-3 xl:rounded-2xl xl:text-2xl">{{__('Contactez-nous')}}</a>
                <a class="text-center rounded-lg px-4 py-2 hover:text-orange-500 font-semibold underline font-sans text-green-700 xl:self-center xl:flex xl:text-end xl:text-2xl  xl:px-4 xl:py-6 xl:self-end"
                   href="https://www.hepl.be/fr/inscription">{{__('Je veux m\'inscrire')}}
                </a>
            </div>
        </div>
        <div class="sr-only xl:not-sr-only flex-1">
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
