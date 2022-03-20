@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ url('/css/studygroup.css') }}">
    <style>
        .studentData ul li{
            font-size: 1.5rem;
        }
        .studentData ul{
            padding: 0;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <header class="listHead">

            <h4 class="row">{{ $student->name }}'s Personal Datas</h4>

            <ul class="listHead">
                <li><a href="{{route('students.edit', ['student'=> $student])}}"><i class="fa fa-edit"></i>Edit</a></li>
                <li><a href="{{route('student.delete', ['student'=> $student])}}"
                    onclick="return confirm('Tényleg törlöd?')"><i class="fa fa-trash"></i>Delete</a></li>
            </ul>

        </header>
        <div class="studentData d-flex flex-row justify-content-between col-xl-11">

            <ul>
                <li>Name</li>
                <li>Sex</li>
                <li>Birth Place</li>
                <li>Birth Date</li>
                <li>Email</li>
            </ul>

            <ul>
                <li>{{ $student->name }}</li>
                <li>{{ $student->sex }}</li>
                <li>{{ $student->place_of_birth }}</li>
                <li>{{ $student->date_of_birth }}</li>
                <li>{{ $student->email_address }}</li>
            </ul>
        </div>
        <table class="table">

            <tr>
                <th>Groups</th>
                <th>Leader Name</th>
                <th>Subject</th>
            </tr>


            @foreach ($student->course as $course)
                <tr>
                    <td>{{ $course->name_of_the_group }}</td>
                    <td>{{ $course->leader_of_the_group }}</td>
                    <td>{{ $course->subject }}</td>
                </tr>
            @endforeach
    </div>
    </table>
    </div>
@endsection
