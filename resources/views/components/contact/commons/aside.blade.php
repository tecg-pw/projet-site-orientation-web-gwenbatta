<div class="flex flex-col mt-16">
    <figure class="grid grid-rows-1 grid-cols-3 gap-8 pr-36">
        <img class="rounded-3xl row-span-5 order-2" src="https://placehold.jp/216x526.png" alt="">
        <img class="rounded-3xl col-span-2 order-1" src=" https://placehold.jp/468x239.png" alt="">
        <img class="rounded-3xl order-2" src="https://placehold.jp/216x256.png" alt="">
        <img class="rounded-3xl order-3" src="https://placehold.jp/216x256.png" alt="">
    </figure>
    <section class="bg-yellow-600 mb-36 px-36" aria-labelledby="coordinate">
        <h3 class="font-sans text-xl mt-16 mb-12" role="heading" aria-level="3" id="coordinate">{{__('Coordonnées')}}</h3>
        <div class="flex justify-between mb-24">
            <div itemscope itemtype="https://schema.org/Organization" class="border-r border-orange-500 pr-32 mr-36">
                <p itemprop="legalName" class="mb-5 uppercase font-sans">{{__('HEPL')}}</p>
                <p itemprop="employee" class="mb-2">{{__('Sophie Paggen')}}</p>
                <p>{{__('Secrétaire de la HEPL')}}</p>
                <a class="text-green-700 underline" href="mailto:tech.secretariat@hepl.be" itemprop="email">{{__('tech.secretariat@hepl.be')}}</a>
                <p itemprop="telephone">{{__('04 279 55 20')}}</p>
            </div>
            <div itemscope itemtype="https://schema.org/Person">
                <p itemprop="jobTitle" class="uppercase mb-5 font-sans">{{__('Administrateur')}}</p>
                <a href="" class="text-green-700 underline" class="mb-2" itemprop="name">{{__('Domique Vilain')}}</a>
                <p itemprop="jobTitle">{{__('Professeur de l\'option web')}}</p>
                <a class="text-green-700 underline" href="mailto:dominique.vilaint@hepl.be" itemprop="email">{{__('dominique.vilaint@hepl.be')}}</a>
                <p itemprop="telephone">{{__('04 279 55 20')}}</p>
            </div>
        </div>
    </section>
</div>

