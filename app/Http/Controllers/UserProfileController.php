<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function userProfile()
    {
        $userProfile = Auth::user();
        return view('back.pages.userProfile', compact('userProfile'));
    }
    public function editProfile()
    {
        $editProfile = Auth::user();
        return view('back.pages.editProfile', compact('editProfile'));
        return $editProfile;
    }
    public function updateProfile(Request $request)
    {
        $editProfile = Auth::user();
        $editProfile->update([
           'firstname'=>$request->firstname,
           'lastname'=>$request->lastname,
           'address'=>$request->address,
           'dob'=>$request->dob,
           'contact'=>$request->contact,
           'email'=>$request->email,
           ]);
        return redirect('userProfile')->with('success', 'update  successfully');
        }

      
           
    
}
