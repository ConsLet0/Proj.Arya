<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name', 'birthdate', 'education_qualification', 'major', 'year_experience', 'languages', 'primary_language', 'specialization_1', 'specialization_2', 'specialization_3', 'specialization_4', 'preferred_working_hours', 'desired_field'
    // ];

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }

    public function specialization(){
        return $this->hasMany(Specialization::class);
    }

    public function educationQualification(){
        return $this->belongsTo(EducationQualification::class);
    }

    public function major(){
        return $this->belongsTo(Major::class);
    }

    public function yearExperience(){
        return $this->belongsTo(YearExperience::class);
    }
}
