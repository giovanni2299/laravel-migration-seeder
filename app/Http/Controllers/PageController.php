<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function train(){

        $trains = Trains::all();

        return view('welcome', compact('trains'));
    }
}
