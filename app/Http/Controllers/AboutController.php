<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $about = About::all();
        return view('pages.about.list',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
          
          'title' => 'required|string',
          'sub_title' => 'required|string',
          'image' => 'required|image',
          'description' => 'required|string',
          
        ]);

            $abouts = new About; 
            $abouts->title = $request->title;
            $abouts->sub_title = $request->sub_title;
            $abouts->description = $request->description;
            

            $image_file = $request->file('image');
            Storage::putFile('public/img/', $image_file);
            $abouts->image = 'storage/img/'.$image_file->hashName();


            $abouts->save();

            return redirect()->route('abouts.create')->with('success', 'Data Create Successfuly');
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
        $abouts = About::find($id);
         return view('pages.about.edit',compact('abouts'));
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
        
         $this->validate($request, [
          
          'title' => 'required|string',
          'sub_title' => 'required|string',
          'description' => 'required|string',
         
        ]);

           $abouts = About::find($id); 
            $abouts->title = $request->title;
            $abouts->sub_title = $request->sub_title;
            $abouts->description = $request->description;
           


            if($request->file('image')){
             $image_file = $request->file('image');
             Storage::putFile('public/img/', $image_file);
             $abouts->image = 'storage/img/'.$image_file->hashName();
            }
           
            
            $abouts->save();

            return redirect()->route('abouts.list')->with('success', 'Data Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::find($id);
        @unlink(public_path($abouts->image));
        
        $abouts->delete();
        return redirect()->route('abouts.list')->with('Success','About Delete Successfuly');
    }
}

