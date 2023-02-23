<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->morphedByMany(Student::class,'courseable');
    }

    public function teacher()
    {
        return $this->morphedByMany(Teacher::class,'courseable');
    }
}
