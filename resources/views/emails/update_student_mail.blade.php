@component('mail::message')
# Account Update Notification

Dear {{$student->email_address}},

Your data was updated in our administration system at {{$student->created_at}}.

Name: {{$student->name}}

Sex: {{$student->sex}}

Birth Place: {{$student->place_of_birth}}

Birth Date: {{$student->date_of_birth}}

E-mail: {{$student->email_address}}

Groups:<br>

@foreach ($student->course as $group)
    {{$group->name_of_the_group}}<br>
@endforeach

Thanks,<br>
{{ 'School Name' }}
@endcomponent
