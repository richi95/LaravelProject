@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ url('/css/studygroup.css') }}">
@endsection

@section('content')
    <header class="listHead">
        <h2></h2>
        
    </header>
    <h3>{{ $course->subject }}</h3>
    <table>
        <caption><-Enrolled students</caption>
        <thead>
                          
            <tr>
                <th></th>
                <th>NAME</th>
                <th>SEX</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($course->students as $student)
                <tr>
                    <td></td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->sex}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
