<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'max:11',
            'email' => 'email|unique:users,email,'.$request->user()->id,
            'avatar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $user->password;
        $user->save();

        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $filename=$user->id.'-'.date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
            $user->avatar=$filename;
            $user->save();
        }
 
        return redirect()->route('profile:edit');
    }

    public function password(Request $request)
    {
        $this->validate($request,[
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed|min:8',
        ]);

        $request->user()->update(['password' => bcrypt($request->password)]);

        return redirect()->route('profile:edit');
    }
}
