<?php

namespace App\Mapper;

use App\Models\Student;

class StudentMapper
{
    public static function storeMap(Student $student)
    {
        $student->new_attr = 'new_attr';

        return $student;
    }

}
