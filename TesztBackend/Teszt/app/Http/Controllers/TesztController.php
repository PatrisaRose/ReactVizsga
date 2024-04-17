<?php

namespace App\Http\Controllers;

use App\Models\teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index(){
        $teszts = response()->json(teszt::all());
        return $teszts;
    }

    public function show($id){
        $teszt = response()->json(teszt::find($id));
        return $teszt;
    }
}
