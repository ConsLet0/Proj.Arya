<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Major;
use App\Models\Language;
use App\Models\WorkingHours;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\YearExperience;
use App\Http\Controllers\Controller;
use App\Models\EducationQualification;

class ViewController extends Controller
{
    public function home(){
        return view('homepage');
    }

    public function form(){
        $education_qualifications = EducationQualification::all();
        $majors = Major::all();
        $year_experiences = YearExperience::all();
        $languages = Language::all();
        $specializations = Specialization::all();
        $preferred_working_hours = WorkingHours::all();
        $desired_fields = Field::all();
        
        return view('form_fill', compact('education_qualifications', 'majors', 'year_experiences', 'languages', 'specializations', 'preferred_working_hours', 'desired_fields'));
    }
}
