<?php

namespace App\Http\Controllers;

use App\Models\house;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index() {
        $houses = house::all();

        return view('condominio.house', compact('houses'));
    }
}
