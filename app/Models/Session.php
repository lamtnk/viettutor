<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'date',
        'start_time',
        'end_time',
        'status',
        'feedback'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
