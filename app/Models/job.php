<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $fillable = [
        'job_title',
        'job_type',
        'salary_range',
        'location',
        'job_description',
        'requirements',
        'experience_level',
        'application_deadline',
        'job_image',
        'profile_id', 
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
