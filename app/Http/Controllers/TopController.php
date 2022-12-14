<?php

namespace App\Http\Controllers;

use App\Models\Zoo;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function show_place(Zoo $zoo) {
    
        return view('top.top_place')->with(['zoo' => $zoo]);
    }
    
    public function show_animals() {
        return view('top.top_animals');
    }
    
    public function show_price() {
        return view('top.top_price');
    }
    
}
