<?php

namespace App\Http\Controllers;

// use App\Http\Controller
use App\Models\gym_members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
Use Mail;
use App\Mail\sendmail;
use PHPMailer\PHPMailer;
use App\Events\notifyevents;
class maincontroller extends Controller
{
    public function index(Request $request)
    {
        if(isset($_GET)){

  $id=5;
        return view('chat',compact('result','id'));
    }
     

}
public function id($id)
    {
       
   
        return $id;
    }
     


public function index1(Request $request)
    {
        if(isset($_GET)){
        if($request->ajax()){
        
              $username=$request->post('name');
               $flight = new  gym_members;
        $flight = gym_members::find(1);

        $flight->gym_names="COBRA";
        
        $flight->save();
        $date = Carbon::now();
        dd($date);
    //           die(var_dump($username)); 
            // gym_members::where('id',1)->update(['gym_names' => $username]);
    // DB::update('update gym_members set gym_names = $username where id = 1');
          
            // dd("sadas");
           
            return  $date;

    }
}

}
}

