<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Specialization;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function store(Request $request){
        $specializations = [
            $request->input('specialization_1'),
            $request->input('specialization_2'),
            $request->input('specialization_3'),
            $request->input('specialization_4'),
        ];
    
        $matchingJobs = Job::select('jobs.name')
        ->join('job_specialization', 'jobs.id', '=', 'job_specialization.job_id')
        ->join('specializations', 'job_specialization.specialization_id', '=', 'specializations.id')
        ->whereIn('specializations.id', $specializations)
        ->groupBy('jobs.id', 'jobs.name')
        ->havingRaw('COUNT(DISTINCT specializations.id) = ' . count($specializations))
        ->get();
    
        $user = new User();
        $user->name = $request->input('name');
        $birthdate = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('birthdate'))->format('Y-m-d');
        $user->birthdate = $birthdate;
        $user->education_qualification = $request->input('education_qualification');
        $user->major = $request->input('major');
        $user->year_experience = $request->input('year_experience');
        $user->languages = $request->input('languages');
        $user->primary_language = $request->input('primary_language');
        $user->specialization_1 = $request->input('specialization_1');
        $user->specialization_2 = $request->input('specialization_2');
        $user->specialization_3 = $request->input('specialization_3');
        $user->specialization_4 = $request->input('specialization_4');
        $user->preferred_working_hours = $request->input('preferred_working_hours');
        $user->desired_field = $request->input('desired_field');
        $user->save();
    
        $matchedJobNames = $matchingJobs->pluck('name')->implode(', ');

        return view('output', ['matchedJobs' => $matchingJobs]);
    }
}
