<?php
    $escapeCharaters = ['"','[',']']
?>
<x-mail::message>
# Offre de stage envoyée

Nous avons bien reçu votre message et nous vous en remercions.<br>

#Voici le récapitulatif de votre message :

Nom : {{$contact->name}} ;<br>
Prénom : {{$contact->name_supervisor}} ;<br>
Email renseigné : {{$contact->email}} ;<br>
Objet du message : {{$contact->subject}} ;<br>
Description du message : {{$contact->message}} ;<br>


Nous la traiterons le plus vite possible


Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
