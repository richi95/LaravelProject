@extends('layouts.main')
@section('content')
    <aside>
        <form method="get" id="students">
            
            <input type="search" id="nsearch" name="name" placeholder="Search for name">
            <button id="nsearchb"><i class="fa fa-search"></i></button>
            <ul id="namelist">
                
            </ul>
        </form>

        <form method="get" id="groups">

            <fieldset>
                <legend>FILTERS FOR STUDY GROUPS</legend>
                <table>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr id="check">
                                <td><input type="checkbox" name="group_id[]" value="{{$subject->id}}"
                                     {{ in_array ($subject->id, (array)Request::get('group_id')) ? 'checked' : ''}}></td>
                                <td><span>{{ $subject->name_of_the_group }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <input type="submit" id="choose" value="Choose groups">
            </fieldset>
        </form>
    </aside>
    <section class="studentlist">
        <header class="listHead">
            <div id="studentDiv">
                <h2><i class="fa fa-user-o"></i>&nbsp;{{$members->total()}}&nbsp;STUDENTS</h2>
                <div id="listCreate"><i class="fa fa-edit"></i><a href="/createstudent">New</a></div>
            </div>
            <div class="listButton">
                {{$members->links('includes.paginator')}}
                {{-- <button>1</button>
                <button>2</button>
                <button>3</button> --}}
            </div>
        </header>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>NAME</th>
                    <th>SEX</th>
                    <th>PLACE AND DATE OF BIRTH</th>
                    <th>GROUPS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><a href="students/{{$member->id}}"><i class="fa fa-user-o"></i></a></td>
                        <td><a href="students/{{$member->id}}">{{ $member->name }}</a></td>
                        <td>{{ $member->sex }}</td>
                        <td>{{ $member->place_of_birth }},{{ ' ' . $member->date_of_birth }}</td>
                        <td>@foreach ($member->course()->take(2)->get() as $course)                            
                            {{$course->name_of_the_group}},                   
                        @endforeach
                        <span class="text-orange">{{$member->course()->count() > 2 ? 
                        ($member->course()->count()-2).' more' : ''}}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
