<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Fortify\Contracts\LoginResponse; 
use App\Http\Responses\LogoutResponse as CustomLogoutResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
// use App\Http\Requests\CustomLoginRequest;
use Laravel\Fortify\Http\Requests\LoginRequest as FortifyLoginRequest;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(LogoutResponse::class, CustomLogoutResponse::class);
        // Fortify::createUsersUsing(CreateNewUser::class);
        
        Fortify::authenticateUsing(function (Request $request) {
            $request->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required',
                ],
                [
                     'email.required' => 'メールアドレスを入力してください',
                    'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
                    'password.required' => 'パスワードを入力してください',
                ]
            );
            $user = User::where('email', $request->email)->first();
            if($user && \Hash::check($request->password, $user->password)) {
                return $user;
            }
            return null;
        });
        /*Fortify::registerView(function () {
            return view('auth.register1');
        });
        */
        /*Fortify::loginView(function () {
            if(auth()->check()) {
                return redirect('admin');
            }
            return view('auth.login');
        });
        */
          Fortify::loginView(fn () => view('auth.login'));

           $this->app->singleton(LoginResponse::class, function () {
        return new class implements LoginResponse {
            public function toResponse($request)
            {
                return redirect()->route('admin');
            }
        };
    });

        RateLimiter::for('login', function(Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(10)->by($email . $request->ip());
        });
        
    }
}
