<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $portfolio = Portfolio::all();
        return view('pages.portfolio.list',compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.portfolio.create');
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
          'big_img' => 'required|image',
          'small_img' => 'required|image',
          'description' => 'required|string',
          'client' => 'required|string',
          'category' => 'required|string',
        ]);

            $portfolios = new Portfolio; 
            $portfolios->title = $request->title;
            $portfolios->sub_title = $request->sub_title;
            $portfolios->description = $request->description;
            $portfolios->client = $request->client;
            $portfolios->category = $request->category;

            $big_file = $request->file('big_img');
            Storage::putFile('public/img/', $big_file);
            $portfolios->big_img = 'storage/img/'.$big_file->hashName();


            $small_file = $request->file('small_img');
            Storage::putFile('public/img/', $small_file);
            $portfolios->small_img = 'storage/img/'.$small_file->hashName();
            $portfolios->save();

            return redirect()->route('portfolios.create')->with('success', 'Data Create Successfuly');
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
        $portfolios = Portfolio::find($id);
         return view('pages.portfolio.edit',compact('portfolios'));
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
          'client' => 'required|string',
          'category' => 'required|string',
        ]);

            $portfolios = Portfolio::find($id); 
            $portfolios->title = $request->title;
            $portfolios->sub_title = $request->sub_title;
            $portfolios->description = $request->description;
            $portfolios->client = $request->client;
            $portfolios->category = $request->category;


            if($request->file('big_img')){
             $big_file = $request->file('big_img');
             Storage::putFile('public/img/', $big_file);
             $portfolios->big_img = 'storage/img/'.$big_file->hashName();
            }
           

            if($request->file('small_img')){
             $small_file = $request->file('small_img');
             Storage::putFile('public/img/', $small_file);
             $portfolios->small_img = 'storage/img/'.$small_file->hashName();
            }
            
            $portfolios->save();

            return redirect()->route('portfolios.list')->with('success', 'Data Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolios = Portfolio::find($id);
        @unlink(public_path($portfolios->big_img));
        @unlink(public_path($portfolios->small_img));
        $portfolios->delete();
        return redirect()->route('portfolios.list')->with('Success','Portfolio Delete Successfuly');
    }
}
