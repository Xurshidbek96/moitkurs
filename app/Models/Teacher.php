<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'img',
        'course_id',
        'status',
        'phone',
        'adress',
        'level_edu',
        'positsion',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
