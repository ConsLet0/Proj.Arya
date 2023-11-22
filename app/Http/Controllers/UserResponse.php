<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserResponse extends Controller
{
    public function storeUserResponse(Request $request){
        $validateData = $request->validate([
            'question_id' => 'required',
            'answer' => 'required',
        ]);
        $userResponses = $request->session()->get('user_responses', []);
        $userResponses[$validateData['question_id']] = $validateData['answer'];
        $request->session()->put('user_responses', $userResponses);
    }

    // ====================================TESTER====================================
    public function showPrediction(Request $request){
        $userResponses = $request->session()->get('user_responses');
        $predictedJob = $this->predictedJob($userResponses);
        if(
            $userResponses[8] === 'Akutansi/Keuangan' &&
            $userResponses[9] === 'IT-Perangkat Lunak' &&
            $userResponses[10] === 'Sains' &&
            $userResponses[11] === 'Digital Marketing'
        ){
            $predictedJob = 'Data Science';
        }
        return view('prediction', compact('predictedJob'));
    }
}
