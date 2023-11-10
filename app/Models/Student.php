<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function diary()
    {
        return $this->hasOne(Diary::class);
    }

    public function surname()
    {
        return $this->belongsTo(Surname::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

}
