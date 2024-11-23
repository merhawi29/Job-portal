<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(Request $request){
// dd($request);
        $opp = $request->option1;
        // dd($opp);
        if(isset($opp)){

                if($opp == "mark"){
                    return redirect("register");
                }elseif($opp == "emark"){
                    return redirect("register");
                }else{
                }
                    }
        }
}
//
