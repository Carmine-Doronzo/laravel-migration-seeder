<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        $trains = Train::where('orario_di_partenza','like','2024-05-24%')->get();

        return view ('home',compact('trains'));
    }
}
