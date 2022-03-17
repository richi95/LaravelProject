@extends('layouts.main')
@section('style')
    @include('style.paginator')
    <link rel="stylesheet" href="{{ url('/css/studygroups.css') }}">
@endsection

@section('content')
<table class="table">
        {{ $groups->links('includes.paginator') }}
        <thead>
            <tr>
                <th>NAME</th>
                <th>LEADER</th>
                <th>SUBJECT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
                <tr>
                    <td><a class="badge-info" href="studygroups/{{ $group->id }}">{{ $group->name_of_the_group }}</a></td>
                    <td>{{ $group->leader_of_the_group }}</td>
                    <td>{{ $group->subject }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
