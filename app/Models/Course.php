<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function textbooks()
    {
        return $this->hasMany(Textbook::class);
    }

    public function members()
    {
        return $this->hasMany(Members::class);
    }
}
