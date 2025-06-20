<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone',
        'role',
    ];

    public function jobs()
    {
        return $this->hasMany(job::class);
    }
    public function jobActions()
    {
        return $this->hasMany(job_action::class);
    }
    

}
