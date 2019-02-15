<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\department;
use App\level;
use App\actor;
use App\subject;
use App\Msisdn;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $actors=actor::where('user_id',Auth::user()->id)->first();
        if ($actors==null){
          $departments = department::all();
          $levels= level::all();
          return view('home',['departments'=>$departments,'levels'=>$levels]);
        }

        else{
          #here will chose if admin or no
          if($actors->admin)
           return view('admin');
           elseif ($actors->admin!=1) {
             // here is page that redirect to exam  perperstions
             $subjects=subject::all();
            
             return view('PrepareExam',['subjects'=>$subjects]);
           }
        }


    }


    public function ActorsRecorde(Request $request)
    {

      $actors= new actor;
      $user_msisdn=new Msisdn;
      $actors->admin=0;
      $actors->user_id=Auth::user()->id;
      $actors->department_id=$request->department;
      $actors->level_id=$request->level;
      $actors->save();
      $user_msisdn->user_id=Auth::user()->id;
      $user_msisdn->msisdns=$request->msisdns;
      $user_msisdn->save();
      return redirect()->back();

    }



}
