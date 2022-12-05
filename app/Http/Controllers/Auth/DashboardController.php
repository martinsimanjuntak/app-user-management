<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('dashboard.index');
    }

     public function profile($id)
     {
        $user = User::where('id',$id)->first();
        return view('dashboard.profile',compact('user'));
       
     }

    public function editProfile(Request $request , $id)
    {
        # code...
        $validate = $request->validate([
            'name' => 'required|max:255|min:3',
            'email'=> 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('post-images');
        }
       
        User::where('id',$id)->update($validate);
         return redirect()->back();
    }
}
