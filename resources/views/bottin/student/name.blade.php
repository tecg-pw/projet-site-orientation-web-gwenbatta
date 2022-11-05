<x-commons.navigation></x-commons.navigation>
<main class="">
    <div class="px-36 flex justify-end text-green-700 underline font-sans text-2xl font-semibold">
        <a href="/bottin">{{__('Voir d\'autres étudiants')}}</a>
    </div>
    <section class="mt-20 px-36 flex mb-36 gap-x-11" aria-labelledby="name">
        <div class="mb-7 order-2">
            <h2 id="name" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mb-11">{{__('Nom de l\'étudiant')}}</h2>
            <div class="flex gap-x-10 text-lg mb-8">
                <p class="uppercase">étudiant</p>
                <p>Métier</p>
                <p>Date de scolarité</p>
            </div>
            <div class="flex flex-col gap-y-2.5 mb-20">
                <a class="text-green-700 underline text-lg" href="">adresse mail</a>
                <a class="text-green-700 underline text-lg" href="">adresse portfolio</a>
            </div>
            <p class="text-lg leading-10 max-w-[65%]">{{__('Ancien étudiant de la HEPL, il est aujourd’hui employer et associer pour l’agence KNOK, l’une de nos entreprises partenaires. Parcours brillant, il a notamment pour son projet de fin d’étude obtenu une note maximal. Il nous avait présenter un site web comme celui sur lequel vous êtes. Aujourd’hui, Jimmy a même son projet personnel en cours de développement : Breedy, ce projet vise à aider les éleveur de chiens à gérer leurs portées.')}}</p>
        </div>
        <div class="min-w-[313px]">
            <img class="mb-16 rounded-3xl" src="https://via.placeholder.com/313" alt="avatar">
            <div class="flex flex-col">
                <a href="/"
                   class="font-sans text-center text-white-100 bg-green-700 px-4 py-4 rounded-2xl text-2xl font-semibold ">{{__('Voir le portfolio')}}</a>
                <a class=" self-center flex font-sans text-end text-green-700 text-2xl font-semibold underline px-4 py-6 self-end"
                   href="/">
                <span class="mr-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 38.97 38.005">
                        <path data-name="08774047e75405e5723edc2388e9bc78"
                              d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                              transform="translate(-1.999 -2.247)" fill="#4e6458"/>
                        </svg>
                    </span>
                    <span>{{__('Voir le Github')}}</span>
                </a>
            </div>
        </div>
    </section>
    <article class="bg-yellow-600 px-36 pb-40 pt-20" aria-labelledby="projects">
        <div class="justify-between flex">
        <h2 id="projects" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Quelques projets')}}</h2>
        <a class="text-green-700 underline font-sans text-2xl font-semibold" href="/project/index">{{__('Voir tous les projets')}}</a>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-center">
            @for($i=1; $i<7;$i++)
                <x-project :i="$i"></x-project>
            @endfor
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
