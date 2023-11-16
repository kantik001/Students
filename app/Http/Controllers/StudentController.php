<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
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

        $student = StudentService::store($data);

        $student = StudentMapper::storeMap($student);

        $student = StudentResource::make($student)->resolve();
        $students = Student::all();
        $students = StudentResource::collection($students)->resolve();

        return 'Created';
    }

    public function create()
    {
        return view('student.create');

    }

    public function edit()
    {


    }

    public function index()
    {

       $student = Student::all();
       return StudentResource::collection($student)->resolve();

    }

    public function show()
    {
        $id = 1;
        $student = Student::find($id);
        dd($student);

    }

    public function update()
    {

    }

    public function destroy()
    {
        $id = 1;
        $student = Student::find($id);

        $student->delete();

        return 'deleted';

    }


}
