<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('back.auth.changepassword');
    }
    public function checkPassword(Request $request)
    {
        if (empty($request->oldpassword)) {
            return redirect()->back()->with('message', 'old password can not be empty');
        } else if (empty($request->newpassword)) {
            return redirect()->back()->with('message', 'new password can not be empty');
        } else if (empty($request->confirmpassword)) {
            return redirect()->back()->with('message', 'confirm password can not be empty');
        }
        $user = Auth::user();
        $checkpassword = Hash::check($request->oldpassword, $user->password);
        if ($checkpassword) {

            $newpassword = $request->newpassword;
            $confirmpassword = $request->confirmpassword;
            if ($newpassword == $confirmpassword) {

                $user->update([
                    'password' => bcrypt($newpassword),
                    
                ]);
                return redirect('/');
            } else {
                return redirect()->back()->with('message', 'newpassword and confirmpassword doesnot match');
            }
        } else {
            return redirect()->back()->with('message', 'password doesnot match');
        }
    }
}
