<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\email;
class RegisterController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'Tambah User';
        $data['role'] = ['superadmin' => 'Super Admin', 'user' => 'User' , 'operasional'=>'Operasional'];
        return view('auth.register' , $data);
    }

    public function store(Request $request)
    {   
        $validate = $request->validate([
            'name' => 'required|max:255|min:3',
            'email'=> 'required|unique:tb_user',
            'password'=>' required|max:12|min:4',
        ]);
        
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->verified = true;
            $user->save();

            $details = [
                'name'=> $request->name
            ];
             $send_mail = Mail::to($request->email)->send(new email($details));

            $request->session()->flash('success', 'Registration Success Please Login!!');
            return redirect('/login');
    }
}
