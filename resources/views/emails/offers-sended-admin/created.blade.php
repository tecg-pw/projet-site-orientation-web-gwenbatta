<?php
    $escapeCharaters = ['"','[',']']
?>
<x-mail::message>
# Offre de stage envoyée

Une nouvelle offre de stage vient d'être envoyée via {{ config('app.name') }}.<br>

## Voici le récapitulatif de l'offre de stage proposée par: {{$offer->name}}

Nom de l'entreprise : {{$offer->name}} ;<br>
Nom du superviseur : {{$offer->name_supervisor}} ;<br>
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

En attente de votre réponse


Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
