@props([
    'i'
])

<article {{ $attributes->class(['bg-yellow-100 py-6 px-8 rounded-3xl']) }} aria-labelledby="{{'slug'.$i}}">
    <h3 id="{{'slug'.$i}}" aria-level="3" role="heading" class="font-medium text-lg xl:text-2xl mb-3">Accessibilité</h3>
    <p class="xl:text-lg">1. Caractère de quelque chose, d’un lieu qui est accessibles : L’accessibilité
        d’un bus, d’un immeuble aux handicapés.<br>2. Droit, possibilité qu’a quelqu’un d’avoir accès à
        quelque chose : L’accessibilité à un emploi.</p>
</article>
