<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;

class ServicePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $service = Service::all();
        return view('pages.service.list',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.service.create');
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
          'icon' => 'required|string',
          'title' => 'required|string',
          'description' => 'required|string',
        ]);

            $services = new Service; 
            $services->icon = $request->icon;
            $services->title = $request->title;
            $services->description = $request->description;
            $services->save();

            return redirect()->route('services.create')->with('success', 'Data Create Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $service = Service::find($id);
        return view('pages.service.edit',compact('service'));
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
          'icon' => 'required|string',
          'title' => 'required|string',
          'description' => 'required|string',
        ]);

            $services = Service::find($id); 
            $services->icon = $request->icon;
            $services->title = $request->title;
            $services->description = $request->description;
            $services->save();

            return redirect()->route('services.list')->with('Success','Service Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
         return redirect()->route('services.list')->with('Success','Service Delete Successfuly');
    }
}
