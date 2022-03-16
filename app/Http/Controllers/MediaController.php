<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias=Media::all();
        return view ('back.pages.Media.table',compact('medias')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back.pages.Media.media');
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
            'title'=> 'required',
            'image'=>'required',
            'description'=>'required',
            ]);
               $title=$request->title;
           
            $imageName = time().'.'.$request->image->extension();  
         
            $request->image->move(public_path('images'), $imageName);
            $type=$request->type;
              $description= $request->description;
              
               Media::create([
               'title'=>$title,
               'image'=>$imageName,
               'type'=>$type,
               'description'=>$description,
              
                  ]);
    
            return redirect('media-index')->with('success','Record added successfully');
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
         $media=Media::find($id);
        return view('back.pages.Media.edit',compact('media'));
        return $media;
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
        $media=Media::find($id);
        $title=$request->title;
       $imageName = time().'.'.$request->image->extension();  
     
   
      $request->image->move(public_path('images'), $imageName);
      $type= $request->type;
       $description= $request->description;
        
    $media->update([
         'title'=>$title,
         'image'=>$imageName,
         'type'=>$type,
         'description'=>$description,
            ]);


    return redirect('media-index')->with('success','update added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media =Media::where('id', $id)->firstorfail()->delete();
        return redirect('media-index')->with('success','Delete successfully');
    }
}
