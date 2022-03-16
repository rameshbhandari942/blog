<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles=Profile::all();
        return view ('back.pages.Profile.table',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back.pages.Profile.profile');
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
            'name'=> 'required',
            'address'=> 'required',
            'pan_vat_no'=> 'required',
            'contact'=> 'required',
            'email'=> 'required',
            'description'=> 'required',
           ]);
           $imageName = time().'.'.$request->image->extension();  
     
           $request->image->move(public_path('images'), $imageName);
           Profile::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'pan_vat_no'=>$request->pan_vat_no,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'description'=>$request->description,
            'image'=>$imageName,
           ]);
            return redirect('profile-index')->with('success','Record added successfully');
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
        $profile=Profile::find($id);
        return view('back.pages.Profile.edit',compact('profile'));
        return $profile;
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
        $profile=Profile::find($id);
        $name=$request->name;
        $address=$request->address;
        $pan_vat_no=$request->pan_vat_no;
        $contact=$request->contact;
        $email=$request->email;
        $description= $request->description;
        if($request->has('image')){
       $imageName = time().'.'.$request->image->extension();  
      $request->image->move(public_path('images'), $imageName);
        }else{
      $profile->update([
        'name'=>$name,
        'address'=>$address,
        'pan_vat_no'=>$pan_vat_no,
        'contact'=>$contact,
        'email'=>$email,
        'description'=>$description,

                ]);
            }
                return redirect('profile-index')->with('success','update added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile =Profile::where('id', $id)->firstorfail()->delete();
      return redirect('profile-index')->with('success','Delete successfully');
    }
}
