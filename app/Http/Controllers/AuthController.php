<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Psy\CodeCleaner\FunctionContextPass;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function handleRegister(RegisterRequest $request)
    {
        $data = $request->except('_token');
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        // login
        Auth::login($user);
        return redirect()->route('home');
    }

    public function login()
    {
        return view('login');
    }

    public function handleLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])); {
            return redirect()->route('home');
        }
        FacadesSession::flash('login', 'this data don\'t meet our data');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
