@component('mail::message')
# Introduction

Thank You For Subscribing to Anuj.
We hope you will put us to contact list so the informative email we sent does not fall to the Spam Folder.

@component('mail::button', ['url' => '/home'])
VISIT THE SITE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
