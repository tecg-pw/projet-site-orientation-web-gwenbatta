<x-mail::message>
# News Letter

Une nouvelle offre de stage vient d'être publiée «{{$offer->name}}».

<x-mail::button :url="'http://tecweb.test/'. app()->getLocale().'/entreprise/internship/'.$offer->slug">
    Aller voir l'offre  {{'« '.$offer->name.' »'}}
</x-mail::button>

Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
