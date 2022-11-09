<article {{ $attributes->class(['bg-yellow-600','px-36', 'py-20', 'mt-80']) }}>
    <h3 class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Quelques témoignages de nos alumnis')}}</h3>
    <div class="grid grid-cols-2 gap-x-24 gap-y-8">
        @for($i=1; $i<5;$i++)
            <article class="flex flex-col bg-white-100 py-6 px-8 rounded-3xl">
                <div class="flex items-center">
                    <div class="order-2 ml-6">
                        <h4 class="mt-2 text-2xl">Nom et Prénom</h4>
                        <p class="text-lg">Date du post</p>
                    </div>
                    <img class="order-1 rounded-full" src="https://via.placeholder.com/78" alt="avatar">
                </div>
                <p class="mt-5">{{__('Bonjour, personnellement, je me suis rendue au porte ouverte de la HEPL et j’ai pu discuter avec les professeurs des différentes sections que ce soit web, technique graphique et 3D/vidéo et aucun professeur ne m’a parler de mathématiques ou quoi ce soit. Je ne sais pas où vos sources ont entendu qu’il fallait être bon en math mais ils n’y connaissent rien apparement.')}}</p>
            </article>
        @endfor
    </div>
</article>
