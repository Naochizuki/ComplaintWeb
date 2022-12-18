<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function show_welcome_page() {
        return view('welcome');
    }

    public function auth(Request $request) {
        $request->validate([
            'email' => 'required|email|string|max:255',
            'password' => 'required|min:8|string'
        ]);
        
        if ($request->input('button') == 'login') {
            $credentials = $request->only('email', 'password');

            $token = Auth::attempt($credentials);
            if (!$token) {
                return redirect()->route('welcome.page')->withErrors(['msg' => 'Email/Password tidak tepat']);
            } else {
                return redirect()->route('home.page');
            }
        } else {
            User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('home.page');
        }
    }
}
