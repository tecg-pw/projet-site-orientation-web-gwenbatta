<x-mail::message>
# News Letter

Un nouveau projet vient d'être publié «{{$project->name}}» .

<x-mail::button :url="'http://tecweb.test/'. app()->getLocale().'/project/'.$project->slug">
    Aller voir le projet  {{'« '.$project->name.' »'}}
</x-mail::button>

Bien à vous,<br>
{{ config('app.name') }}
</x-mail::message>
