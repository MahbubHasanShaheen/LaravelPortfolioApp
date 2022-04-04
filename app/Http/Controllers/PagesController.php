<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Service;
use App\Portfolio;
use App\About;
class PagesController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

  public function index(){
   
     $main = Main::first();
     $service = Service::all();
     $portfolio = Portfolio::all();
     $about = About::all();
     return view('pages.index',compact('main','service','portfolio','about'));

  }

   public function dashboard(){


    return view('pages.dashboard');
  }

}
