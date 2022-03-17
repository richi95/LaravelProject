@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ url('/css/studygroup.css') }}">
@endsection

@section('content')
    <header class="listHead">
        <h2></h2>
        <ul>
            <li><a href="/studygroup/edit"><i class="fa fa-edit"></i>Edit</a></li>
            <li><a href="/studygroup/{{ '$group->id'}}/delete"><i class="fa fa-trash"></i>Delete</a></li>
        </ul>
    </header>
    <h3>{{ '$group->subject' }}</h3>
    <table>
        <caption>Enrolled students</caption>
        <thead>
                          
            <tr>
                <th></th>
                <th>NAME</th>
                <th>SEX</th>
            </tr>
            
        </thead>
        <tbody>
            
        </tbody>
    </table>
@endsection
