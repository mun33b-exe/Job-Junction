<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job_action extends Model
{
    protected $fillable = [
        'job_id',
        'profile_id',
    ];
    public function profile()
    {
        return $this->belongsTo(profile::class, 'profile_id');
    }
    public function job()
    {
        return $this->belongsTo(job::class, 'job_id');
    }
}
