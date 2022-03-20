@extends('layouts.main')
@section('style')
    @include('style.paginator')
    <link rel="stylesheet" href="{{ url('/css/studygroups.css') }}">
@endsection

@section('content')
<table class="table">
        {{ $course->links('includes.paginator') }}
        <thead>
            <tr>
                <th>NAME</th>
                <th>LEADER</th>
                <th>SUBJECT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($course as $course)
                <tr>
                    <td><a class="badge-info" href="{{route('studygroup.details', ['course'=> $course])}}">{{ $course->name_of_the_group }}</a></td>
                    <td>{{ $course->leader_of_the_group }}</td>
                    <td>{{ $course->subject }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
