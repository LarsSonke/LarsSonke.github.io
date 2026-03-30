<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgress extends Model
{
    protected $table = 'study_progress';

    protected $fillable = [
        'propedeuse_ec',
        'bachelor_ec_earned',
        'bachelor_ec_total',
        'total_ec',
        'courses_completed',
        'courses_total',
        'average_grade',
        'last_updated_at',
    ];

    protected $casts = [
        'propedeuse_ec' => 'decimal:2',
        'bachelor_ec_earned' => 'decimal:2',
        'bachelor_ec_total' => 'decimal:2',
        'total_ec' => 'decimal:2',
        'average_grade' => 'decimal:2',
        'last_updated_at' => 'datetime',
    ];
}
