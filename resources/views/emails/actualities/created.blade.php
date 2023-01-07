<x-mail::message>
# News Letter

Une nouvelle actualité vient d'être publiée «{{$actuality->name}}».

<x-mail::button :url="'http://tecweb.test/'. app()->getLocale().'/news/'.$actuality->slug">
    Aller voir l'actualité  {{'« '.$actuality->name.' »'}}
</x-mail::button>

Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
