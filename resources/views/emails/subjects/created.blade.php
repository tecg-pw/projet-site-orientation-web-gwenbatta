<x-mail::message>
# Message du Forum

Un nouveau sujet a été créer par {{$subjectObject->user->firstname}} {{$subjectObject->user->name}} .

<x-mail::button :url="'http://tecweb.test/'. app()->getLocale().'/forum/show/'.$subjectObject->slug">
Voir le sujet  {{'« '.$subjectObject->subject.' »'}} sur le forum
</x-mail::button>

Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
