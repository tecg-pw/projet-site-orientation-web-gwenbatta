<?php
    $escapeCharaters = ['"','[',']']
?>
<x-mail::message>
# Offre de stage envoyée

Nous avons bien reçu votre offre de stage et nous vous en remercions.<br>

#Voici le récapitulatif de votre offre de stage :

Nom de l'entreprise : {{$offer->name}} ;<br>
Nom du maître de stage : {{$offer->name_supervisor}} ;<br>
Email renseigné : {{$offer->email}} ;<br>
Titre de l'offre : {{$offer->subject}} ;<br>
Description de l'offre : {{$offer->message}} ;<br>
@if($offer->pdf)
Votre PDF : {{$offer->pdf}}<br>
@endif
@if($offer->softwares)
Les logiciels requis : {{str_replace($escapeCharaters," ",$offer->softwares)}}<br>
@endif
@if($offer->softwares)
Les langages requis : {{str_replace($escapeCharaters," ",$offer->languages)}}<br>
@endif

Nous la traiterons le plus vite possible


Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
