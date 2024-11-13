<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bio', 'experience_years', 'specialties', 'certificates', 
        'average_rating', 'total_hours_taught', 'min_hourly_rate', 'max_hourly_rate', 'profile_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'tutor_profile_id');
    }
}
