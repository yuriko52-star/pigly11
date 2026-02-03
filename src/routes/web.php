<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeightController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisterStepController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/login',[UserController::class,'index']);
Route::get('/admin',[WeightController::class,'admin']);
*/
Route::middleware('web','guest')->group(function () {
     // 1画面目
     Route::get('/register/step1', function () {
        return view('auth.register1');
     })->name('register.step1');

     Route::post('/register/step1', [RegisterStepController::class,'storeStep1'])->name('register.step1.store');

      // 2画面目
      Route::get('/register/step2', function () {
        return view('auth/register2');
      })->name('register.step2');

      Route::post('/register/step2',[RegisterStepController::class,'storeStep2'])->name('register.step2.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', function () {
        return view('admin');
    })->name('admin');
});

// logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');
