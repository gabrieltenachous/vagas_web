<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPosting extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function job_applies()
    {
        return $this->hasMany(JobPosting::class);
    } 
}
