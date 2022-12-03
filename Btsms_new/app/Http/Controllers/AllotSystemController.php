<?php

namespace App\Http\Controllers;
use App\Models\AllotSystemRecord;
use App\Models\Bluethink;

use Illuminate\Http\Request;

class AllotSystemController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function allotSystem()
    {  
        return view('forms/allotSystem');  
    }

    public function checkId(Request $request)
    {  
        $emp_detail = (Bluethink::where('emp_id', '=', $request->input('emp_id'))->first());
             return view('forms.allotSystem',compact('emp_detail'));
           
    }

    public function saveAllotrecord(Request $request)
    {
        $request->validate([
            // 'emp_id'=>'required|min:5|max:15|unique:allotsystemrecords',
            // 'name'=>'required',
            // 'email'=> 'required|email|unique:allotsystemrecords',
            // 'mobile'=>'required|min:10|max:10',

            'asset_sr_no'=>'required|min:5|max:15|unique:allotsystemrecords',
            'current_status'=>'required',
            'host_name'=> 'required',
            'host_name'=> 'required',
            'host_name'=> 'required',
            
           
        ]);
        $allotsystemrecord = new AllotSystemRecord();
        $allotsystemrecord->emp_id = $request->emp_id;
        $allotsystemrecord->name = $request->name;
        $allotsystemrecord->technology = $request->technology;
        $allotsystemrecord->email = $request->email;
        $allotsystemrecord->mobile = $request->mobile;

        $allotsystemrecord->asset_sr_no = $request->asset_sr_no;
        $allotsystemrecord->model_no = $request->model_no;
        $allotsystemrecord->actual_user = $request->actual_user;
        $allotsystemrecord->current_status = $request->current_status;
        $allotsystemrecord->host_name = $request->host_name;
        $allotsystemrecord->office_address = $request->office_address;
        $allotsystemrecord->asset_type = $request->asset_type;

        $allotsystemrecord->owned_by = $request->owned_by;
        $allotsystemrecord->reporting_manag_detail = $request->reporting_manag_detail;
        $allotsystemrecord->company_name = $request->company_name;

    //     $data=$allotsystemrecord ;
    //   echo "<pre>";
    //   print_r($data);
    //   die ;

        $data=$allotsystemrecord->save();
        if ($data){
            return back()->with('success','data submit successfuly');
        } else {
            return back()->with('fail','something wents wrong');
        }
    }

    
}
