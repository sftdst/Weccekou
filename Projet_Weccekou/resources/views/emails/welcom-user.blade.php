@component('mail::message')
# Introduction

Bienvenu et merci d'inscrire

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
