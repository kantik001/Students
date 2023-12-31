<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
