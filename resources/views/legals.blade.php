<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('TecWeb')}}</title>
</head>
<body>
<header>
    <h1>{{__('TecWeb, le site de l\'option Web de la HEPL')}}</h1>
    <x-commons.navigation></x-commons.navigation>
    <a href="/">{{__('Mentions légales')}}</a>
</header>
<main>
    <section>
        <h2>{{__('Informations générales')}}</h2>
        <section itemscope itemtype="https://schema.org/Organization">
            <h3>{{__('Société')}}</h3>
            <p itemprop="streetAddress">{{__('Haute école de la province de Liège')}}</p>
        </section>
        <section>
            <h3>{{__('Siège social')}}</h3>
            <div itemscope itemtype="https://schema.org/PostalAddress">
                <p itemprop="streetAddress">{{('Rue Peetermans, 80')}}</p>
                <p itemprop="postalCode">{{__('4100, Seraing')}}</p>
            </div>
        </section>
        <section itemscope itemtype="https://schema.org/Organization">
            <h3>{{__('Email')}}</h3>
            <p itemprop="email">{{__('tech.secretariat@hepl.be')}}</p>
        </section>
    </section>
    <section>
        <h2>{{__('Clauses de confidentialités')}}</h2>
        <p>{{__('TecWeb traitera avec le plus grand soin les données personnelles qui lui ont été communiquées. TecWeb les traitera en toute confidentialité et ne les utilisera qu’aux fins pour lesquelles elles lui ont été communiquées. Ces données peuvent être enregistrées dans une ou plusieurs bases de données de TecWeb et ne seront pas communiquées à des tiers sans le consentement de la personne concernée. Cette dernière peut en outre toujours réclamer la communication de ses données en notre possession, et en demander rectification et suppression.')}}</p>
    </section>
    <section>
        <h2>{{__('Utilisations de cookies')}}</h2>
        <p>{{__('Nous souhaitons informer les utilisateurs de ce site Internet au sujet de l’utilisation de cookies. Les cookies sont des petits fichiers-textes placés sur le disque dur de l’ordinateur des visiteurs d’un site Internet. Ils contiennent des informations, telles que les préférences linguistiques du visiteur, afin que ce dernier ne doive plus les saisir lors de sa prochaine visite. Certains cookies veillent à ce qu’un site Internet s’affiche de manière soignée d’un point de vue graphique, d’autres à ce qu’une application du site fonctionne correctement. D’autres cookies encore sont utilisés pour collecter des statistiques relatives à nos visiteurs et ainsi nous permettre d’améliorer notre site Internet à l’avenir.

         Pour bloquer les cookies, il vous suffit de régler les paramètres de votre navigateur. Pour ce faire, consultez la fonction d’aide de votre navigateur. Sachez toutefois que si vous désactivez les cookies, certains éléments graphiques n’apparaîtront peut-être plus de manière esthétique ou que vous ne pourrez plus utiliser certaines applications.

        En continuant d’utiliser ce site Internet sans bloquer les cookies dans les paramètres de son navigateur, le visiteur accepte leur utilisation.

        Vous pouvez retirer à tout moment les cookies installés sur votre ordinateur ou appareil mobile')}}</p>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
