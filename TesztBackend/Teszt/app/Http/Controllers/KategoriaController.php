<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index(){
        $kategoriak = response()->json(kategoria::all());
        return $kategoriak;
    }

    public function show($id){
        $kategoria = response()->json(kategoria::find($id));
        return $kategoria;
    }
}
