<?php
    $escapeCharaters = ['"','[',']']
?>
<x-mail::message>
# Message de contact envoyé

Un nouveau message vient d'être envoyé via {{ config('app.name') }}.<br>

## Voici le récapitulatif du message envoyé par: {{$contact->name}}

Nom : {{$contact->name}} ;<br>
Prénom : {{$contact->name_supervisor}} ;<br>
Email renseigné : {{$contact->email}} ;<br>
Objet du message : {{$contact->subject}} ;<br>
Description du message : {{$contact->message}} ;<br>

En attente de votre réponse

Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
