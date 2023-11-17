<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\StudentFilter;
use App\Http\Requests\Api\IndexRequest;
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
        //dd($data);
        $student = StudentService::store($data);
        $student = StudentMapper::storeMap($student);
        $student = StudentResource::make($student)->resolve();
        $students = Student::all();
        $students = StudentResource::collection($students)->resolve();
        return 'Created';
    }

    public function create(Student $student)
    {
        return view('student.create');
    }

    public function edit()
    {
    }

    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 3;

        $filter = app()->make(StudentFilter::class, ['queryParams' => array_filter($data)]);

        $students = Student::filter($filter)->paginate($perPage, ['*'], 'page', $page);

        $students = StudentResource::collection($students)->resolve();
        return $students;

    }

    public function show(Student $student)
    {

        $student = Student::find(1);
        dd($student);
    }

    public function update(Student $student)
    {
        $id = 2;
        $student = Student::find($id);
        $anotherStudent = 'Ruslan';

        $student->update([
            'name' => $anotherStudent
        ]);

        return 'updated';
    }

    public function destroy(Student $student)
    {
        $id = 1;
        $student = Student::find($id);
        $student->delete();
        return 'deleted';
    }

}
