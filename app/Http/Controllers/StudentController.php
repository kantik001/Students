<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store()
    {
        $str = 'Boris';

        Student::create([
            'name' => $str
        ]);

       return 'Created';

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

    public function delete()
    {
        $id = 1;
        $student = Student::find($id);

        $student->delete();

        return 'deleted';

    }


}
