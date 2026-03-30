<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code',
        'name',
        'phase',
        'date',
        'grade',
        'ec',
        'status',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'grade' => 'decimal:1',
        'ec' => 'decimal:2',
    ];
}
