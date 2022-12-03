<?php

namespace App\Http\Controllers;
use App\Models\Bluethink;

use Illuminate\Http\Request;

class DisplayEmployeeController extends Controller
{
    //
    public function display(){
        $products = Bluethink::all();
        // print_r($products);
        // die;
        return view('table.viewEmployee',compact('products'));
    }
}
