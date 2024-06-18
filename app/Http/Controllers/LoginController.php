<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public static function index(): View
    {
        return view('login');
    }

    public static function authenticate(Request $request)
    {
        $request->validate([
            'CIN' => ['required', 'digits:11'],
            'phone' => ['required', 'digits:8'],
        ], attributes: ['CIN' => 'CIN']);

        $user = User::findOrFail($request->input('CIN'));

        if ($user->phone == $request->input('phone')) {

            Auth::loginUsingId($request->input('CIN'));

            $request->session()->regenerate();

            return redirect()->intended('/');

        }

        return back()->withErrors([
            'details' => 'The provided credentials do not match our records.',
        ]);
    }
}
