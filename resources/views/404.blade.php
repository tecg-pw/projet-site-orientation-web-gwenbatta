<x-commons.navigation></x-commons.navigation>
<main class="flex min-h-full gap-x-20 mb-60">
        <section class="min-w-full mt-20 px-36 flex flex-col items-center justify-center" aria-labelledby="404">
            <h2 class="text-4xl uppercase font-extrabold text-yellow-800 font-sans mt-20 mb-11" role="heading" aria-level="2"
                id="404">{{__('Erreur 404')}}</h2>
            <p class="font-sans text-2xl">{{__('Page non trouvée')}}</p>
            <p class="text-xl mt-2">{{__('Retourner à')}} <a class="text-green-700 underline" href="/">{{__('l\'acceuil')}}</a> </p>
        </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
