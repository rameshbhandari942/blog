<?php
namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogs=Blog::all();
      return view ('back.pages.blogtable',compact('blogs')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back.pages.blog');
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

          $description= $request->description;
       
           Blog::create([
           'title'=>$title,
           'image'=>$imageName,
           'description'=>$description,
           'user_id'=>Auth::id(),
              ]);

        return redirect('blog-index')->with('success','Record added successfully');
   
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
         $blog=Blog::find($id);
        return view('back.pages.blogedit',compact('blog'));
        return $blog;
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
         $blog=Blog::find($id);
          $title=$request->title;
          $description= $request->description;
          if($request->has('image')){


         $imageName = time().'.'.$request->image->extension();  
       
     
        $request->image->move(public_path('images'), $imageName);
        $blog->update([
          'title'=>$title,
          'image'=>$imageName,
          'description'=>$description,
             ]);

      }else{
        $blog->update([
          'title'=>$title,
           'description'=>$description,
             ]);
      }
        

          
     

      return redirect('blog-index')->with('success','update added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =Blog::where('id', $id)->firstorfail()->delete();
      return redirect('blog-index')->with('success','Delete successfully');
    } 
   public function changestatus($id,$status)
       {

         $blog=Blog::find($id);
      $blog->update([
        'status'=>$status,
              ]);
      return redirect('blog-index')->with('success',' successfully');
       }
    
}
