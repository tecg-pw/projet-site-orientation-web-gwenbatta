<x-commons.navigation></x-commons.navigation>
<main>
    <section >
        <div class="flex px-36 justify-between mt-20">
            <h2 class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mb-11">{{__('Développeur web front-end')}}</h2>
            <a class="text-green-700 underline font-sans text-2xl font-semibold"
               href="/about#jobs">{{__('Retour à la liste des métiers')}}</a>
        </div>
        <div class="mt-20 px-36 grid grid-cols-10 items-center mb-36 gap-x-20">
            <div class="mb-7 col-span-5 max-w-full">
                <section>
                    <h3 class="font-sans text-xl font-medium mb-5">{{__('Description')}}</h3>
                    <div class="flex flex-col gap-6">
                        <p class="text-lg leading-10 ">{{__('Le développement web frontal (aussi appelé front-end en anglais) correspond aux productions HTML, CSS et JavaScript d’une page internet ou d’une application qu’un utilisateur peut voir et avec lesquelles il peut interagir directement.')}}</p>
                        <p class="text-lg leading-10 ">{{__('Le développement web frontal (aussi appelé front-end en anglais) correspond aux productions HTML, CSS et JavaScript d’une page internet ou d’une application qu’un utilisateur peut voir et avec lesquelles il peut interagir directement.')}}</p>
                        <p class="text-lg leading-10 ">{{__('Le développement web frontal (aussi appelé front-end en anglais) correspond aux productions HTML, CSS et JavaScript d’une page internet ou d’une application qu’un utilisateur peut voir et avec lesquelles il peut interagir directement.')}}</p>
                    </div>
                </section>
            </div>
            <div class="col-span-5">
                <figure class="grid grid-rows-1 grid-cols-3 gap-6 ">
                    <img class="rounded-3xl row-span-2"
                         src="/img-redimensions/procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg" alt="">
                    <img class="rounded-3xl col-span-2 order-1" src="/img-redimensions/stephen-phillips-hostreviews-co-uk-3Mhgvrk4tjM-unsplash.jpg" alt="">
                    <img class="rounded-3xl order-2" src="/img-redimensions/brett-jordan-LPZy4da9aRo-unsplash.jpg" alt="">
                    <img class="rounded-3xl order-3" src="/img-redimensions/rachel-moenning-zjxYwd4HOu0-unsplash.jpg" alt="">
                    <img class="col-span-3 rounded-3xl order-4" src="https://placehold.jp/721x239.png" alt="">
                </figure>
            </div>
        </div>

    </section>
    <article class="bg-yellow-600 px-36 pb-36 pt-20">
        <h2 class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('D\'autres métiers')}}</h2>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            <article class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h4 class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer Web')}}</h4>
                <p class="text-lg">{{__('Mi-graphiste, mi-informaticien, le web- designer est spécialisé dans la création des pages Web. Il s’occupe de tout l’aspect graphique d’un site Internet (illustrations, animations, typographie…). Il choisit la place des photos, la taille des caractères et les couleurs qui rendront la consultation agréable pour l’utilisateur.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer Web')}}</a>
            </article>
            <article class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h4 class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Web')}}</h4>
                <p class="text-lg">{{__('Il s’occupe de la partie technique des sites. A la demande d’un client ou d’une entreprise et sur base d’un cahier des charges. Spécialiste des langages informatiques, il prend en charge l’ensemble des fonctionnalités du site, son architecture, l’accès aux données ainsi que l’écriture des lignes de codes .')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur Web')}}</a>
            </article>
            <article class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h4 class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Designer Mobile')}}</h4>
                <p class="text-lg">{{__('Le designer mobile est le créateur et le développeur des applications mobiles et des interfaces des entreprises. Il met sa créativité et ses connaissances au service de ses clients. Il crée des designs, des vidéos ou encore des sons pour mettre en valeur les produits et les services de ses clients.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Designer mobile')}}</a>
            </article>
            <article class="bg-white-100 py-6 px-8 rounded-3xl relative">
                <h4 class="font-sans font-medium text-2xl mb-3 font-medium">{{__('Développeur Mobile')}}</h4>
                <p class="text-lg">{{__('Le développeur mobile iOS/ Android se consacre à la création ou à la mise à jour d’applications destinées à fonctionner sur des appareils mobiles embarquant l’un ou l’autre de ces systèmes d’exploitation.')}}</p>
                <a class="linkcard" href="/about/job/single">{{__('Voir plus sur Développeur mobile')}}</a>
            </article>
        </div>
    </article>
    <article class="px-36 mt-36 mb-36">
        <div class="flex justify-between">
            <h2 class="text-4xl uppercase font-bold text-yellow-800 mb-16 font-sans">{{__('Nos alumnis qui font ce métier')}}</h2>
            <a class="text-green-700 underline font-sans text-2xl font-semibold"
               href="/bottin/alumni">{{__('Voir plus d\'alumnis')}}</a>
        </div>
        <div class="grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<5;$i++)
                <article class=" flex flex-col bg-yellow-100 py-6 px-8 rounded-3xl">
                    <div class="flex items-center">
                        <div class="order-2 ml-4">
                            <h4 class="font-sans text-2xl">Nom et Prénom</h4>
                            <p class="uppercase text-xl">Ancien</p>
                            <p>Date de scolarité</p>
                        </div>
                        <img class="order-1 rounded-full" src="https://via.placeholder.com/98" alt="avatar">
                    </div>
                    <a class="underline text-green-700 font-sans font-semibold self-end"
                       href="/bottin/alumni/name">{{__('En savoir plus')}}</a>
                </article>
            @endfor
        </div>
        {{--                {{$posts->links()}}--}}
    </article>
    <article class="bg-yellow-600 px-36 pb-40 pt-20">
        <div class="justify-between flex">
            <h2 class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Quelques projets')}}</h2>
            <a class="text-green-700 underline font-sans text-2xl font-semibold"
               href="/project/index">{{__('Voir tous les projets')}}</a>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-center">
            @for($i=1; $i<4;$i++)
                <x-project/>
            @endfor
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
