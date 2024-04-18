<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginPage() {
        return view('pages.loginPage');
    }

    public function loginPost(Request $request) {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            // 'role'=>'required'
        ]);

        $credential = $request->only('username', 'password');

        if(Auth::attempt($credential)) {
            return redirect()->intended(route('mainPage'))->with('success', 'login berhasil');
        }

        return redirect(route('loginPage'))->with("error", "login gagal");
    }

    public function loginSanctum(Request $request) {

        $request->validate([
            // 'email' => 'required|email',
            'username'=>'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        dd($user);
    }
}
