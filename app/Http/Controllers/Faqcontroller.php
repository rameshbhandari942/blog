<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Http\Request;

class Faqcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $faqs=Faq::all();
      return view ('back.pages.FAQ.table',compact('faqs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('back.pages.FAQ.faq');
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
        'description'=> 'required',
       ]);
       Faq::create($request->all());
        return redirect('faq-index')->with('success','Record added successfully');
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
      $faq=Faq::find($id);
        return view('back.pages.FAQ.edit',compact('faq'));
        return $faq;
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
        $faq=Faq::find($id);
        $faq->update($request->all());
         return redirect('faq-index')->with('success','Records update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq =Faq::where('id', $id)->firstorfail()->delete();
      return redirect('faq-index')->with('success','Delete successfully');
    }
     public function changestatus($id,$status)
       {

         $faq=Faq::find($id); 
      $faq->update([
        'status'=>$status,
              ]);
      return redirect('faq-index')->with('success',' successfully');
       }
}
