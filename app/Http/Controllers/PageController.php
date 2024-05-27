<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        //var_dump(date_create());

        $trains = Train::whereDate('orario_di_partenza','<',today())->get();

        

        return view ('home',compact('trains'));
    }
}
