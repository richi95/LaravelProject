@component('mail::message')
# Account Creation Notification

Kedves {{$student->email_address}},

Your data was entered into our administration system at {{$student->created_at}}.

Name: {{$student->name}}

Sex: {{$student->sex}}

Birth Place: {{$student->place_of_birth}}

Birth Date: {{$student->date_of_birth}}

E-mail: {{$student->email_address}}


Thanks,<br>
{{ 'School Name' }}
@endcomponent
