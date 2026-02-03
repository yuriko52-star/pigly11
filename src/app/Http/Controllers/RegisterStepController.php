<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterStepController extends Controller
{
    public function storeStep1(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ]);
       // セッションに保存
       session(['register' => $validated]);
       return redirect()->route('register.step2'); 
    }

    public function storeStep2(Request $request)
    {
        $validated = $request->validate([
            // バリデーション設定時に追加する予定"weightも変える予定
            
            'weight' => 'required',
            'target_weight' => 'required',
        ]);
        $data = session('register');
        if(!$data) {
            return redirect()->route('register.step1');
        } 
DB::transaction(function () use ($data, $validated, &$user) {
    $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
    ]);
    WeightTarget::create([
        'user_id' => $user->id,
        'target_weight' => $validated['target_weight'],
    ]);

    WeightLog::create([
        'user_id' => $user->id,
        'date' => now()->toDateString(),
        'weight' => $validated['weight'],
    ]);
});
        
            


        Auth::login($user);

        session()->forget('register');

        return redirect()->route('admin');
    }
}
