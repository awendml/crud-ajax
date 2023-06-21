<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balanja;

class BalanjaController extends Controller
{
    public function index()
    {
        return view('balanja');
    }

    public function read()
    {
        $data = Balanja::all();
        return view('balanja_read')->with([
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('balanja_create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('desc')
        ];
    
        Balanja::insert($data);
    
        return redirect('/');
    }
    
    public function show($id)
    {
        $data = Balanja::findOrFail($id);
        return view('balanja_edit')->with([
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Balanja::findOrFail($id);
    
        if ($request->has('name')) {
            $data->name = $request->input('name');
        }
    
        if ($request->has('price')) {
            $data->price = $request->input('price');
        }
    
        if ($request->has('desc')) {
            $data->description = $request->input('desc');
        }
    
        $data->save();
    
        return redirect('/');
    }

    public function destroy($id)
    {
        $data = Balanja::findOrFail($id);
        $data->delete();
        
        return redirect('/');   
    }    
    
    
}
