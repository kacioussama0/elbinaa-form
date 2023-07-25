<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'dob',
        'level',
        'course_id',
        'email',
        'url',
        'state',
        'job',
        'phone',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
