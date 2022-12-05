<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
       $credential =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $user = User::where('email',$request->email)->first();
         if (Auth::attempt($credential)) { 
            $request->session()->regenerate();
                return redirect()->intended('/dashboard');
         }else{
            return back()->with('loginError','Login Failed');
         }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
