<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;
use App\Models\Zoo;
use App\Models\Animal_family;
use App\Models\Animal_order;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZooController extends Controller
{
    public function archive(Zoo $zoo)
    {
        $zoo = \Auth::user()->zoos;
        return view('zoos/archive')->with(['zoo' => $zoo]);
    }

 
    public function show(Zoo $zoo)
    {
        return view('zoos/show')
        ->with(['zoo' => $zoo]);
    }
    
    public function create(Zoo $zoo) 
    {
        $animal_family = Animal_family::all();
        $animal_order = Animal_order::all();
        return view('zoos/create')
            ->with([
                'zoo' => $zoo,
                'animal_family' => $animal_family,
                'animal_order' => $animal_order,
            ]);
    }
    
    public function store(PostRequest $request, Zoo $zoo)
    {
        $input = $request['zoo'];
        
        $input->animal_families()->attach(request()->animal_families);
        $input->animal_orders()->attach(request()->animal_orders);
        
        $zoo->fill($input)->save();
        return redirect('/zoos/' . $zoo->id);
    }
    
    public function edit(Zoo $zoo) 
    {
        return view('zoos/edit')->with(['zoo'=>$zoo]);
    }
    
    public function update(Request $request, Zoo $zoo)
    {
        $input_zoo = $request['zoo'];
        $zoo->fill($input_zoo)->save();
        return redirect('/zoos/' . $zoo->id);
    }
    
    public function delete(Zoo $zoo)
    {
        $zoo->delete();
        return redirect('/zoos');
    }
}
