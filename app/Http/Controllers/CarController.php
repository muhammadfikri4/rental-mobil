<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'type' => 'required',
            'color' => 'required',
            'plat' => 'required'
        ]);
        if ($validate) {
            transaction::create($validate);
            return redirect('/');
        } else {
            return redirect('/add-car');
        }
    }
    public function edit(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'type' => 'required',
            'color' => 'required',
            'plat' => 'required'
        ]);
        if ($validate) {
            transaction::where('id', $id)->update($validate);
            return redirect('/');
        } else {
            return redirect('/edit-car');
        }
    }
}
