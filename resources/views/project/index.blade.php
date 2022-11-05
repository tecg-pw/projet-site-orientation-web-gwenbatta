<x-commons.navigation></x-commons.navigation>
<main>
    <article class="px-36 mb-64" aria-labelledby="projects">
        <div class="flex justify-between mb-12 mt-36">
            <h2 class="text-4xl uppercase font-bold text-yellow-800  font-sans" role="heading" aria-level="2" id="projects">
                {{__('Projets de nos étudiants')}}
            </h2>
            <x-search_bar></x-search_bar>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-center">
            @for($i=1; $i<10;$i++)
                <x-project></x-project>
            @endfor
        </div>
    </article>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
