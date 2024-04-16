<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function authenticated()
    {
        if (Auth::user()->role_as == '1') {
            return redirect('admin/dashboard')->with('message', 'Welcome to Dashboard');
        } else {
            return redirect('/home')->with('status', 'Logged In Successfully');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home')->with('status', 'Logged In Successfully');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => '',
                    'role_as' => 0,
                    'google_id' => $user->id
                ]);
                Auth::login($newUser);
                return redirect('/home')->with('status', 'Logged In Successfully');
            }
        } catch (Exception $e) {

            return redirect('auth/google');
        }
    }
}
