<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Http\Resources\Student\StudentResource;
use App\Mapper\StudentMapper;
use App\Models\Surname;
use App\Models\Diary;
use App\Models\Student;
use App\Models\Teacher;
use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StoreRequest $request)
    {

        $data = $request->validated();
        dd($data);
        Student::create($data);
        return redirect()->route('students.index');


        // $student = StudentService::store($data);
       // $student = StudentMapper::storeMap($student);
       // $student = StudentResource::make($student)->resolve();
        //$students = Student::all();
        //$students = StudentResource::collection($students)->resolve();
        //return 'Created';
    }

    public function create()
    {
        return inertia('Student/Create');
        //return view('student.create');

    }

    public function edit(Student $student)
    {
        $student = StudentResource::make($student)->resolve();
        return inertia('Student/Edit', compact('student'));
    }

    public function index()
    {
        $students = Student::all();
        $students = StudentResource::collection($students)->resolve();
        return inertia('Student/Index', compact('students'));


        // $student = Student::all();
       //return StudentResource::collection($student)->resolve();

    }

    public function show(Student $student)
    {
        $student = StudentResource::make($student)->resolve();
        return inertia('Student/Show', compact('student'));

    }

    public function update(UpdateRequest $request, Student $student)
    {
        $data = $request->validated();
        $student->update($data);
        return redirect()->route('students.index');


    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
            'message' => 'deleted'
        ]);


    }


}
