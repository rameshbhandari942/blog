<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view ('back.pages.usertable',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view ('back.pages.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'firstname'=> 'required',
        'lastname'=> 'required',
        'address'=> 'required',
        'dob'=> 'required',
        'contact'=> 'required',
        'country'=> 'required',
        'email'=> 'required',
        'password'=> 'required',
          ]);
        $firstname= $request->firstname;
        $lastname= $request->lastname;
        $address= $request->address;
        $dob= $request->dob;
        $contact= $request->contact;
        $country= $request->country;
        $email= $request->email;
        $password=bcrypt($request->password);

       User::create([
           'firstname'=>$firstname,
           'lastname'=>$lastname,
          'address'=>$address,
            'dob'=>$dob,
           'contact'=>$contact,
           'country'=>$country,
           'email'=>$email,
           'password'=>$password,
            ]);
       return redirect('user-index')->with('success','Record added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=User::find($id);
        return view('back.pages.edit',compact('user'));
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) 
    { 
      $user=User::find($id);
      $user->update($request->all());
      return redirect('user-index')->with('success','update added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::where('id', $id)->firstorfail()->delete();
      return redirect('user-index')->with('success','Delete successfully');
    }
       public function changestatus($id,$status)
       
       {
      $user=User::find($id);
      $user->update([
        'status'=>$status,
              ]);
      return redirect('user-index')->with('success',' successfully');
       }
          
       public function view(Request $request,$id){
      $user=User::find($id);
      $user->update($request->all());
      return view ('back.pages.userview',compact('user'));
          }

          

}
