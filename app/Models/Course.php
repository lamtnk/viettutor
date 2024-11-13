<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'subject',
        'level',
        'location',
        'num_of_students',
        'gender_preference',
        'start_date',
        'min_rate',
        'max_rate',
        'description'
    ];

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function applications()
    {
        return $this->hasMany(TutorApplication::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function teachingHistory()
{
    return $this->hasMany(TeachingHistory::class, 'course_id');
}
}
