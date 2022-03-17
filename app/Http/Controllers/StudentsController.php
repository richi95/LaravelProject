<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Models\Student;
use App\Models\Course;
use App\Models\CourseStudent;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentStoreMail;
use Illuminate\Support\Facades\Request as Input;

class StudentsController extends Controller
{


    function list(Request $request) {
        
        
        $dataMembers = Student::where(function($query) use($request){
            if(Input::get('name') != null){
                $query->where('name', 'like', '%'.Input::get('name').'%');
             }elseif($request->has('group_id')){
                $query->whereIn('id', CourseStudent::wherein('course_id', $request->group_id)->select('student_id')->get()->pluck('student_id')->toArray());
            }
        })->paginate(4);

        $dataSubjects = Course::all();


        return view('students')->with('members', $dataMembers)->with('subjects', $dataSubjects);
    }

    function listgroup(){
        $dataSubjects = Course::paginate(5);
        
        return view('studygroups')->with('groups', $dataSubjects);
    }

    function student(Student $student){
        return view('student', ['student' => $student]);
    }


    function createList() {
        $dataSubjects = Course::all();

        return view('createstudent')->with('subjects', $dataSubjects);
    }

    function add(UserStoreRequest $request) {
        $validated = $request->validated();
        $student = Student::create($validated);


        foreach ($request->subject as $id) {
            CourseStudent::create(["student_id" => $student->id, "course_id" => $id]);
        }

        Mail::to($student->email_address)->send(new StudentStoreMail($student, $student->course));
        return redirect()->back()->with('message', [
            'type' => 'success',
            'content' => 'Sikeres mentés!'
        ]);
    }


    function studentsEdit(Student $student){

        return view('edit')->with('student', $student);
    }

    function studentsUpdate(Student $student, UserStoreRequest $request){
        $validated = $request->validated();
        $student->update($validated);
    }

    

}
