<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{
    public static function store(array $data): Student
    {
        return Student::create($data);

    }

}
