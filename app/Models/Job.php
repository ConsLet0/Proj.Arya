<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function specializations(){
        return $this->belongsToMany(Specialization::class, 'job_specialization', 'job_id', 'specialization_id');
    }
}
