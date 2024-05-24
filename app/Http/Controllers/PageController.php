<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //   
     public function index() {

        
        $trains = Trains::all();

        return view('home',compact('trains'));
    }
}
