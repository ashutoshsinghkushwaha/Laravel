<?php

namespace App\Http\Controllers;


use App\Models\Bluethink;
use Illuminate\Http\Request;

class BluethinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addEmployee()
    {  
        return view('forms/addEmployee'); 
    }


    public function saveData(Request $request)
    {

        $request->validate([
            'emp_id'=>'required|min:5|max:15|unique:bluethinks',
            'name'=>'required',
            'email'=> 'required|email|unique:bluethinks',
            'mobile'=>'required|min:10|max:10',
           
        ]);
        $bluethink = new Bluethink();

        $bluethink->emp_id = $request->emp_id;
        $bluethink->name = $request->name;
        $bluethink->technology = $request->technology;
        $bluethink->email = $request->email;
        $bluethink->mobile = $request->mobile;
        $data=$bluethink->save();
       
        if ($data){
           
            return back()->with('success','data submit successfuly');
        } else {
            return back()->with('fail','something wents wrong');
        }
    }


    public function display(){
        $products = Bluethink::all();
        // print_r($products);
        // die;
        return view('table.viewEmployee',compact('products'));
    }


}
