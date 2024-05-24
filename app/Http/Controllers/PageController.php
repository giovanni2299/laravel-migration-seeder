<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function train(){

        $trains = Trains::where('departure_time','like','2024-05-24%')->get();
        

        return view('welcome', compact('trains'));
    }
}
