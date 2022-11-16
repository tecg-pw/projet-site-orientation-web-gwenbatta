<x-commons.navigation></x-commons.navigation>
<main class="flex flex-col xl:flex-row gap-x-20 mb-60">
    <section class="bg-yellow-600 xl:mt-20 py-20 px-10 xl:px-36" aria-labelledby="informations">
        <h2 class="xl:text-4xl text-2xl uppercase font-extrabold font-sans mb-11" role="heading" aria-level="2"
            id="informations">{{__('Informations générales')}}</h2>
        <section class="mb-5 xl:mb-14 " aria-labelledby="company" itemscope itemtype="https://schema.org/Organization">
            <h3 class="xl:text-2xl text-xl font-semibold" role="heading" aria-level="3"
                id="company">{{__('Société')}}</h3>
            <p class="xl:text-xl text-lg" itemprop="streetAddress">{{__('Haute école de la province de Liège')}}</p>
        </section>
        <section class="mb-5 xl:mb-14 " aria-labelledby="social">
            <h3 class="xl:text-2xl text-xl font-semibold" role="heading" aria-level="3"
                id="social">{{__('Siège social')}}</h3>
            <div itemscope itemtype="https://schema.org/PostalAddress">
                <p class="xl:text-xl text-lg" itemprop="streetAddress">{{('Rue Peetermans, 80')}}</p>
                <p class="xl:text-xl text-lg" itemprop="postalCode">{{__('4100, Seraing')}}</p>
            </div>
        </section>
        <section class="mb-5 xl:mb-14 " aria-labelledby="email" itemscope itemtype="https://schema.org/Organization">
            <h3 class="xl:text-2xl text-xl font-semibold" role="heading" aria-level="3" id="email">{{__('Email')}}</h3>
            <p class="xl:text-xl text-lg" itemprop="email">{{__('tech.secretariat@hepl.be')}}</p>
        </section>
    </section>
    <div class="">
        <section class="mt-20 px-10 xl:pr-36" aria-labelledby="confidential">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11" role="heading" aria-level="2"
                id="confidential">{{__('Clauses de confidentialités')}}</h2>
            <p class="text-lg leading-8">{{__('TecWeb traitera avec le plus grand soin les données personnelles qui lui ont été communiquées. TecWeb les traitera en toute confidentialité et ne les utilisera qu’aux fins pour lesquelles elles lui ont été communiquées. Ces données peuvent être enregistrées dans une ou plusieurs bases de données de TecWeb et ne seront pas communiquées à des tiers sans le consentement de la personne concernée. Cette dernière peut en outre toujours réclamer la communication de ses données en notre possession, et en demander rectification et suppression.')}}</p>
        </section>
        <section class="mt-20 px-10 xl:pr-36" aria-labelledby="cookies">
            <h2 class="xl:text-4xl text-2xl uppercase font-extrabold text-yellow-800 font-sans mb-6 xl:mb-11" role="heading" aria-level="2"
                id="cookies">{{__('Utilisations de cookies')}}</h2>
            <p class="text-lg leading-8 mb-6">{{__('Nous souhaitons informer les utilisateurs de ce site Internet au sujet de l’utilisation de cookies. Les cookies sont des petits fichiers-textes placés sur le disque dur de l’ordinateur des visiteurs d’un site Internet. Ils contiennent des informations, telles que les préférences linguistiques du visiteur, afin que ce dernier ne doive plus les saisir lors de sa prochaine visite. Certains cookies veillent à ce qu’un site Internet s’affiche de manière soignée d’un point de vue graphique, d’autres à ce qu’une application du site fonctionne correctement. D’autres cookies encore sont utilisés pour collecter des statistiques relatives à nos visiteurs et ainsi nous permettre d’améliorer notre site Internet à l’avenir.  ')}}</p>
            <p class="text-lg leading-8 mb-6">{{__('Pour bloquer les cookies, il vous suffit de régler les paramètres de votre navigateur. Pour ce faire, consultez la fonction d’aide de votre navigateur. Sachez toutefois que si vous désactivez les cookies, certains éléments graphiques n’apparaîtront peut-être plus de manière esthétique ou que vous ne pourrez plus utiliser certaines applications.')}}</p>
            <p class="text-lg leading-8 mb-6">{{__('En continuant d’utiliser ce site Internet sans bloquer les cookies dans les paramètres de son navigateur, le visiteur accepte leur utilisation.')}}</p>
            <p class="text-lg leading-8 mb-6">{{__('Vous pouvez retirer à tout moment les cookies installés sur votre ordinateur ou appareil mobile')}}</p>

        </section>
    </div>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
