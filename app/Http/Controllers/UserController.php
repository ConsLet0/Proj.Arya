<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function store(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $birthdate = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('birthdate'))->format('Y-m-d');
        $user->birthdate = $birthdate;
        $user->education_qualification = $request->input('education_qualification');
        $user->major = $request->input('major');

        // $specializationIds = $request->input('specializations');
        // $specializations = Specialization::find($specializationIds);
        // $user->specializations()->saveMany($specializations);

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
    }
}
