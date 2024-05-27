<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //   
     public function index() {

        
        $trains = Trains::whereDate('departure_time',today())->get();

        //dd(date("Y m d"));
        // dd(Trains::where(date("Y m d",departure_time),date("Y m d")));

        return view('home',compact('trains'));
    }
}
