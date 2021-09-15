<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class JobApply extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','job_posting_id','curriculum','challenge_date','salary_chaim'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
    public function job_posting()
    {
        return $this->belongsTo(JobPosting::class);
    } 

}
