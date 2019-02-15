<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\actor;
use App\User;
use App\Msisdn;
use Nexmo\Laravel\Facade\Nexmo;


class ExamResultControllre extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){

$actors=DB::select('select us.name,us.id from actors as ac
INNER JOIN users AS us on us.id=ac.user_id
where ac.admin=0');

$truns = DB::select('select  COUNT(TT.id) result ,DD.name from transactions as TT
INNER JOIN exzams AS EX ON EX.exzams_section=TT.section_id
INNER JOIN actors AS ACT on ACT.user_id=TT.user_id
INNER JOIN departments AS DD ON DD.id=ACT.department_id
WHERE (EX.id=TT.question_id AND EX.CorrectAnswer=TT.userAnswer)
GROUP BY DD.name');

return view("res",["truns"=>$truns,"actors"=>$actors]);
}

public function Student_result(Request $request){

//"dd($request);
$de=$request->actor;
//$request->actor;

$user=User::findOrFail($request->actor)->name;

$STS=DB::select('select  COUNT(TT.id) result ,SS.subname from transactions as TT
INNER JOIN exzams AS EX ON EX.exzams_section=TT.section_id
INNER JOIN actors AS ACT on ACT.user_id=TT.user_id
INNER JOIN departments AS DD ON DD.id=ACT.department_id
INNER JOIN subjects AS SS on SS.id=EX.exzams_section
WHERE (EX.id=TT.question_id AND EX.CorrectAnswer=TT.userAnswer)
and TT.user_id='.$de.'
group by SS.subname');


    $Msisdn=Msisdn::where('user_id',$request->actor)->get();

$str="";

$total=0;
    foreach ($STS as $ST){

        $str=$str."," .$ST->subname.",".$ST->result;
        $total=$total+$ST->result;

    }

    $ss="النهائي".(string)$total;

    $str2=$str.$ss;

    Nexmo::message()->send([
        'to'   => $Msisdn[0]->msisdns,
        'from' => 'Exminer',
        'type' => 'unicode',
        'text' => $str2
    ]);
return view('studentresult',["STS"=>$STS,
"user"=>$user]);


}

}
