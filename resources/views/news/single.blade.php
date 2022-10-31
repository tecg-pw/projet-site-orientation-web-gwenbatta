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
    <a href="/">{{__('Actualités >> Single event')}}'</a>
</header>
<main>
    <h2>{{__('Nom de Event')}}</h2>
    <p>Date de l'évènement</p>
    <p>Lieu</p>
    <a href="/news/index">{{__('Retour aux actualités')}}</a>
    <section>
        <h3>{{__('Description')}}</h3>
        <p>Description</p>
        <a href="Lien de l'évènement">{{__('En savoir plus')}}</a>
    </section>
    <figure>
        <img src="../../../public/img/christopher-gower-m_HRfLhgABo-unsplash.jpeg" width="300" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </figure>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
