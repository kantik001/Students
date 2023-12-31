<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surname extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
