<x-commons.navigation></x-commons.navigation>
<main>
    <section class="flex flex-col py-12 mb-40 mt-40 relative" aria-labelledby="name">
        <div class="flex items-center relative -top-10 px-36">
            <div class="order-2 flex-1 ml-8 mt-32">
                <div>
                    <h2 role="heading" id="name" aria-level="2" class="text-4xl text-yellow-800 font-extrabold font-sans ">{{__('Gwenaëlle BATTA')}}</h2>
                    <p class="uppercase text-2xl">{{__('Étudiante')}}</p>
                </div>
                <div class="text-end">
                    <a href="/user/profile/modify"
                       class="font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-2xl font-semibold mb-32">{{__('Modifier le profil')}}</a>
                </div>
            </div>
            <img class="rounded-full" src="https://placehold.jp/276x276.png" alt="">
        </div>
    </section>
    <article class="bg-yellow-600 px-36 pb-36 pt-20" aria-labelledby="tutos">
        <h2 role="heading" id="tutos" aria-level="2" class="text-4xl uppercase font-extrabold font-sans mb-20">{{__('Tutos Favoris')}}</h2>
        <div class="mt-12 grid grid-cols-2 gap-x-24 gap-y-8">
            @for($i=1; $i<5;$i++)
                <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="slug">
                    <div class="flex justify-between">
                        <div>
                            <h3 role="heading" id="slug" aria-level="3" class="font-sans font-medium text-2xl mb-2">Froggy</h3>
                            <p class="mb-3">Date de publication</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20.996 30">
                            <path id="c839c07daa330db315a65863143c41b9"
                                  d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"
                                  transform="translate(-5 -2)" fill="#da953a"/>
                            <path id="c839c07daa330db315a65863143c41b9-2" data-name="c839c07daa330db315a65863143c41b9"
                                  d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z"
                                  transform="translate(-5 -2)" fill="#da953a"/>
                        </svg>
                    </div>
                    <p class="mb-10 text-lg">Exercice d’introduction à Flexbox, une technique CSS </p>
                    <div class="flex justify-between">
                        <p class="text-orange-500 font-sans text-lg font-medium">CSS</p>
                        <a class="text-xl underline text-green-700 font-semibold font-sans"
                           href="">{{__('Faire l\'exercices')}}</a>
                    </div>
                </article>
            @endfor
        </div>
    </article>
    <section class="px-36 mt-36 mb-36" aria-labelledby="questions">
        <h2 role="heading" id="questiions" aria-level="2" class="text-4xl text-yellow-800 uppercase font-extrabold font-sans mb-20">{{__('Vos questions')}}</h2>
        <p>Vous n'avez posé aucune question</p>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
