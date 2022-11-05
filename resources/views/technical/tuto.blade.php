<x-commons.navigation></x-commons.navigation>
<main class="px-36">
    <section class="mt-20 mb-64" aria-labelledby="tutos">
        <div class="flex justify-between mb-7 items-center">
            <h2 id="tutos" role="heading" aria-level="2" class="text-4xl uppercase font-extrabold text-yellow-800 font-sans text-center">{{__('Liste des tutos')}}</h2>
            <x-search_bar></x-search_bar>
        </div>
        <p class="mb-7 max-w-[40%] text-lg leading-10">{{__('Vous trouverez sur cette page une liste de tutoriels qui vous sont proposés afin de vous introduire certains langages que vous découvrirez au sein de notre orientation')}}</p>
        <x-sort_by class="mb-14"/>
        <article aria-labelledby="list-tutos">
            <h3 id="list-tutos" role="heading" aria-level="3" class="sr-only">{{__('Liste de tutos')}}</h3>
            <div class="grid grid-cols-2 gap-x-24 gap-y-8">
                @for($i=1; $i<11;$i++)
                    <article class="bg-yellow-100 py-6 px-8 rounded-3xl" aria-labelledby="slug">
                        <div class="flex justify-between">
                            <div>
                                <h4 id="slug" role="heading" aria-level="3-4" class="font-sans font-medium text-2xl mb-2">Froggy</h4>
                                <p class="mb-3">Date de publication</p>
                            </div>
                            @auth()
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20.996 30">
                                <path id="c839c07daa330db315a65863143c41b9" d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z" transform="translate(-5 -2)" fill="#da953a"/>
                                <path id="c839c07daa330db315a65863143c41b9-2" data-name="c839c07daa330db315a65863143c41b9" d="M21.5,2H9.5A4.5,4.5,0,0,0,5,6.5v24a1.5,1.5,0,0,0,2.25,1.3L15.5,27.03,23.746,31.8a1.5,1.5,0,0,0,2.25-1.3V6.5A4.5,4.5,0,0,0,21.5,2ZM23,27.9,16.248,24a1.5,1.5,0,0,0-1.5,0L8,27.9V6.5A1.5,1.5,0,0,1,9.5,5h12A1.5,1.5,0,0,1,23,6.5Z" transform="translate(-5 -2)" fill="#da953a"/>
                            </svg>
                            @endauth
                        </div>
                        <p class="mb-10 text-lg">Exercice d’introduction à Flexbox, une technique CSS </p>
                        <div class="flex justify-between">
                            <p class="text-orange-500 font-sans text-lg font-medium">CSS</p>
                            <a class="text-xl underline text-green-700 font-semibold font-sans" href="">{{__('Faire l\'exercices')}}</a>
                        </div>
                    </article>
                @endfor
            </div>
            {{--                {{$posts->links()}}--}}
        </article>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
