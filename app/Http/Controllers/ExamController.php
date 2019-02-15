<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\exzam;
use App\transaction;
class ExamController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

     public function index(Request $request)
    {
        $transaction=transaction::where([
          ['section_id',$request->id],
          ['user_id',Auth::user()->id]
          ])->max('question_id');
#dd($transaction);
if($transaction==null){

$ID=exzam::where('exzams_section',$request->id)->first()->id;
$locations=$ID;
}
else{
$locations=$transaction+1;
}


        $exames=exzam::where([
          ['exzams_section',$request->id],
          ['id',$locations]
          ])->first();
          #dd($exames);
          if($exames!=null){
          return view("examiner",['exames'=>$exames]);
          }
          else{


              return redirect("home");


          }

    }

    public function EnsureAnswers(Request $request){

      $transaction= new transaction;
      $transaction->user_id=Auth::user()->id;
      $transaction->section_id=$request->exzams_section;
      $transaction->question_id=$request->question_id;
      $transaction->userAnswer=$request->exampleRadios;
      $transaction->save();

      return redirect()->back();

    }
}
