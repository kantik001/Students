<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Resources\Student\StudentResource;
use App\Models\Student;
use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $student = StudentService::store($data);

        $student = StudentResource::make($student)->resolve();

        dd($student);

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
        $students = Student::all();
        dd($students);

    }

    public function show()
    {
        $id = 1;
        $student = Student::find($id);
        dd($student);

    }

    public function update()
    {
        $id = 1;
        $student = Student::find($id);
        $anotherStudent = 'Ruslan';

        $student->update([
            'name' => $anotherStudent
        ]);

        return 'updated';

    }

    public function destroy()
    {
        $id = 1;
        $student = Student::find($id);

        $student->delete();

        return 'deleted';

    }


}
