@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ url('/css/edit.css') }}">
@endsection
@section('content')
    <form method="post" novalidate id="data" action="{{ route('students.edit.update', ['student' => $student]) }}">
        <input type="hidden" name="id" value="{{ $student->id }}">
        @csrf
        <fieldset id="groups">
            
            <legend>Editing {{ $student->name }}'s studygroups</legend>
            @foreach ($student->course as $group)
                <input type="checkbox" name="courseDel[]" value="{{$group->id}}" checked>{{ $group->name_of_the_group }}<br>
            @endforeach
            @foreach ($available_courses as $course)
                <input type="checkbox" name="courseAdd[]" value="{{$group->id}}">{{ $course->name_of_the_group }}<br>
            @endforeach

        </fieldset id="message">
        {{-- <fieldset id="image">
            <legend>Editing {{ $student->name }}'s avatar</legend>
            <img src="{{ '$student->avatar' }}" alt="{{ $student->avatar }}" class="avatar">
        </fieldset> --}}
        @if (Session::has('message'))
            <div class="text-center">
                <div class="alert alert-{{ Session::get('message.type') }}" id="sc-mes">
                    {{ Session::get('message.content') }}</div>
            </div>
        @endif
        <fieldset id="personal">
            <legend>Editing {{ $student->name }}'s personal datas</legend>
            <ul>
                <li>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}">
                </li>
                @error('name')
                    <span id="error">{{ $message }}</span>
                @enderror


                <li>
                    <label for="sex">Sex:</label>
                    <select name="sex" id="sex">

                        <option @if (old('sex', $student->sex) == 'Male') selected @endif>Male</option>
                        <option {{ old('sex', $student->sex) == 'Female' ? 'selected' : '' }}>Female</option>
                        <option {{ old('sex', $student->sex) == 'Other' ? 'selected' : '' }}>Other</option>

                    </select>
                </li>
                <li>
                    <label for="place_of_birth">Birth place:</label>
                    <input type="text" id="birth_place" name="place_of_birth"
                        value="{{ old('place_of_birth', $student->place_of_birth) }}">
                </li>
                @error('place_of_birth')
                    <span id="error">{{ $message }}</span>
                @enderror
                <li>
                    <label for="date_of_birth">Birth date:</label>
                    <input type="date" id="birth_date" name="date_of_birth"
                        value="{{ old('date_of_birth', $student->date_of_birth) }}">
                </li>
                @error('date_of_birth')
                    <span id="error">{{ $message }}</span>
                @enderror
                <li>
                    <label for="email_address">E-mail:</label>
                    <input type="email" id="email" name="email_address"
                        value="{{ old('email_address', $student->email_address) }}">
                </li>
                @error('email_address')
                    <span id="error">{{ $message }}</span>
                @enderror
            </ul>
        </fieldset>

        <div id="button">
            <input type="submit" id="submit" value="Save changes">
        </div>
    </form>
@endsection
