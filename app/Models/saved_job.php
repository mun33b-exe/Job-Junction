<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class saved_job extends Model
{
    protected $fillable = [
        'job_id',
        'profile_id',
    ];

    public function job()
    {
        return $this->belongsTo(job::class);
    }
}
