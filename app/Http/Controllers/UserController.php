<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use App\Http\Requests\Register\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($user) {
            return redirect()->route('login');
        }
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            return redirect()->route('dashboard');
        }
        return response()->json([
            'status' => false,
            'message' => 'Email Or Password Dose Not Match',
        ], 401);
    }

    public function dashboardPage()
    {
        // no need to check if using middleware

        // if (Auth::check()) {
        //     return view('dashborad');
        // } else {
        //     return redirect()->route('login');
        // }

        return view('dashborad');
    }

    public function logout()
    {
        Auth::logout(); //user logout automatically and remove session data
        return view('login');
    }
}
