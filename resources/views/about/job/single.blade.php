<x-commons.navigation></x-commons.navigation>
<main>
    <section aria-labelledby="dev-front">
        <div class="flex flex-col px-10 xl:px-36 xl:flex-row justify-between mt-20">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11"
                id="dev-front" aria-level="2" role="heading">{{__('Développeur web front-end')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/about#jobs">{{__('Retour à la liste des métiers')}}</a>
        </div>
        <div class="xl:mt-20 mt-10 px-10 xl:px-36 xl:grid xl:grid-cols-10 xl:items-center mb-36 xl:gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section aria-labelledby="description">
                    <h3 class="font-sans text-xl xl:text-2xl font-medium mb-5" id="description" aria-level="2"
                        role="heading">{{__('Description')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl ">{{__('Le développement web frontal (aussi appelé front-end en anglais) correspond aux productions HTML, CSS et JavaScript d’une page internet ou d’une application qu’un utilisateur peut voir et avec lesquelles il peut interagir directement.')}}</p>
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl ">{{__('Le principal défi du développement web frontal est de toujours s’adapter aux dernières évolutions ; les outils et les techniques de développement étant en évolution constante.')}}</p>
                        <p class="text-lg leading-8 xl:leading-10 xl:text-xl ">{{__('La conception des sites internet doit également être capable d’offrir une bonne ergonomie de lecture en facilitant la navigation et l’obtention d’information. Cet objectif est d’autant plus compliqué que les appareils ont des formats et tailles variés. Le développeur doit donc s’assurer que le site internet apparait correctement sur l’ensemble des navigateurs Web et des appareils disponibles.')}}</p>
                    </div>
                </section>
            </div>
            <div class="xl:not-sr-only sr-only col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1"
                         src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg"
                         alt="">
                    <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg"
                         alt="">
                    <img class="col-span-3 rounded-3xl order-4" src="https://placehold.jp/721x239.png" alt="">
                </figure>
            </div>
        </div>

    </section>
    <article class="bg-yellow-600 xl:px-36 px-10 pb-36 pt-20" aria-labelledby="other">
        <div class="flex flex-col xl:flex-row justify-between mb-8">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-4 xl:mb-20" id="other" aria-level="2"
                role="heading">{{__('D\'autres métiers')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="">{{__('Voir tout les métiers')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            <article aria-labelledby="des-web" class="bg-white-100 hover:bg-orange-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-web" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer Web')}}</h3>
                <p class="xl:text-lg">{{__('Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s’occupe de tout l’aspect graphique d’un site Internet (illustrations, animations, typographie…). Il choisit la place des photos, la taille des caractères et les couleurs qui rendront la consultation agréable pour l’utilisateur.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer Web')}}</a>
            </article>
            <article aria-labelledby="dev-web" class="bg-white-100 hover:bg-orange-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-web" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Web')}}</h3>
                <p class="xl:text-lg">{{__('Il s’occupe de la partie technique des sites. A la demande d’un client ou d’une entreprise et sur base d’un cahier des charges. Spécialiste des langages informatiques, il prend en charge l’ensemble des fonctionnalités du site, son architecture, l’accès aux données ainsi que l’écriture des lignes de codes .')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web')}}</a>
            </article>
            <article aria-labelledby="des-mobile"
                     class="bg-white-100 hover:bg-orange-100 py-6 px-8 rounded-3xl relative">
                <h3 id="des-mobile" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Designer Mobile')}}</h3>
                <p class="xl:text-lg">{{__('Le designer mobile est le créateur et le développeur des applications mobiles et des interfaces des entreprises. Il met sa créativité et ses connaissances au service de ses clients. Il crée des designs, des vidéos ou encore des sons pour mettre en valeur les produits et les services de ses clients.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer mobile')}}</a>
            </article>
            <article aria-labelledby="dev-mobile"
                     class="bg-white-100 hover:bg-orange-100 py-6 px-8 rounded-3xl relative">
                <h3 id="dev-mobile" aria-level="3" role="heading"
                    class="font-medium text-xl xl:text-2xl mb-3 font-medium">{{__('Développeur Mobile')}}</h3>
                <p class="xl:text-lg">{{__('Le développeur mobile iOS/ Android se consacre à la création ou à la mise à jour d’applications destinées à fonctionner sur des appareils mobiles embarquant l’un ou l’autre de ces systèmes d’exploitation.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur mobile')}}</a>
            </article>
        </div>
    </article>
    <article class="xl:px-36 px-10 mt-36 mb-36" aria-labelledby="alumnis">
        <div class="flex flex-col xl:flex-row justify-between mb-6">
            <h2 class="xl:text-4xl text-2xl uppercase font-bold text-yellow-800 mb-6 xl:mb-16 font-sans" id="alumnis" aria-level="2"
                role="heading">{{__('Nos alumnis qui font ce métier')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans xl:text-2xl font-semibold"
               href="/bottin/alumni">{{__('Voir plus d\'alumnis')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:gap-x-24 xl:gap-y-8 flex flex-col gap-y-4">
            @for($i=1; $i<5;$i++)
                <article class="hover:bg-orange-100 group relative flex flex-col bg-yellow-100 py-3 px-4 xl:py-6 xl:px-8 rounded-3xl"
                         aria-labelledby="{{'name'.$i}}">
                    <div class="flex flex-1 items-center">
                        <div class="flex-1 order-2 ml-4">
                            <h4 id="{{'name'.$i}}" role="heading" aria-level="4" class="text-xl xl:text-2xl">Gwenaëlle Batta</h4>
                            <div class="mt-1 flex justify-between">
                                <div class="flex flex-col xl:flex-row xl:gap-4">
                                    <p class="uppercase xl:text-lg">Ancien</p>
                                    <p class="uppercase xl:text-lg">2020-2023</p>
                                </div>
                                <svg class="self-end mr-4 group-hover:mr-0" xmlns="http://www.w3.org/2000/svg" width="25"
                                     viewBox="0 0 32 27.417">
                                    <path id="e6c07a72bd494f72e4a4d962e39f725c"
                                          d="M51,21.715a1.956,1.956,0,0,1-.56,1.355l-.012.023-11.75,11.75a1.958,1.958,0,1,1-2.769-2.769l8.405-8.409H20.958a1.958,1.958,0,0,1,0-3.917H44.314l-8.405-8.405a1.958,1.958,0,1,1,2.769-2.769l11.75,11.75.012.02A1.968,1.968,0,0,1,51,21.707Z"
                                          transform="translate(-19 -8.001)" fill="#4e6458"/>
                                </svg>
                            </div>
                        </div>
                        <img class="order-1 rounded-full" src="/img-redimensions/test.jpeg" alt="avatar">
                    </div>
                    <a class="linkcard underline text-green-700 font-sans font-semibold self-end"
                       href="/bottin/alumni/name">{{__('En savoir plus')}}</a>
                </article>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
    <article class="bg-yellow-600 xl:px-36 px-10 pb-40 pt-20" aria-labelledby="projects">
        <div class="justify-between flex flex-col xl:flex-row mb-6">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-6 xl:mb-20" id="projects" aria-level="2"
                role="heading">{{__('Quelques projets')}}</h2>
            <a class="hover:text-orange-500 text-green-700 underline font-sans text-2xl font-semibold"
               href="/project/index">{{__('Voir tous les projets')}}</a>
        </div>
        <div class="xl:grid xl:grid-cols-3 flex flex-col gap-8 justify-center">
{{--            @for($i=1; $i<4;$i++)--}}
{{--                <x-project></x-project>--}}
{{--            @endfor--}}
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
