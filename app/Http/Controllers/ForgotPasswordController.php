<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {

        return  view('back.auth.forgotpassword');
    }
    public function emailCheck(Request $request)
    {

        $registration = User::where('email', $request->email);

        if ($registration->exists()) {
            session(['email' => $request->email]);
            return redirect('resetPassword');
        } else {
            return redirect()->back()->with('message', 'Invalid email');
        }
    }
    public function resetPassword(Request $request)
    {
        return view('back.auth.resetpassword');
    }

    public function confirmPassword(Request $request)
    {
        if (empty($request->password)) {
            return redirect()->back()->with('message', 'new password can not be empty');
        } else if (empty($request->confirmpassword)) {
            return redirect()->back()->with('message', 'confirm password can not be empty');
        }
        $email = Session()->get('email');
        $user = User::where('email', $email)->first();



        $password = $request->password;
        $confirmpassword = $request->confirmpassword;
        if ($password == $confirmpassword) {

            $user->update([
                'password' => bcrypt($password),

            ]);
            return redirect('login');
        } else {
            return redirect()->back()->with('message', 'newpassword and confirmpassword doesnot match');
        }
    }
}
