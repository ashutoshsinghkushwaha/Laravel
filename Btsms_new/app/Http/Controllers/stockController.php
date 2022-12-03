<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bluethink;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class stockController extends Controller
{
    public function stock()   
    {  
       
        return view('forms/stock');  
    }


    public function emp_detail_find(Request $request)
    {  
        return Bluethink::where('emp_id', '=', $request->input('emp_id'))->first();
          
    }

    public function asset_detail_find(Request $request)
    {  
       
        
        return $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->first();
        $emp_id=$data->emp_id ;
        return $emp_detail = Bluethink::where('emp_id', '=', $emp_id=$data->emp_id )->first();

        
          
    }

    
    public function allotment(Request $request){
        $request->validate([
        'asset_sr_no'=>'required|min:5|max:15|unique:stocks',
        'current_status'=>'required',
        'host_name'=> 'required', 
        ]);
            $Stock = new Stock();
            $Stock->asset_sr_no = $request->asset_sr_no;
            $Stock->model_no = $request->model_no;
            $Stock->brand_name = $request->brand_name;
            $Stock->processor = $request->processor;
            $Stock->storage = $request->storage;
            $Stock->memory = $request->memory;
            $Stock->host_name = $request->host_name;
            $Stock->office_address=$request->office_address;
            $Stock->asset_type = $request->asset_type;
            $Stock->owned_by = $request->owned_by;
            $Stock->company_name = $request->company_name;
            $Stock->reporting_manag_detail = $request->reporting_manag_detail;
            $Stock->current_status = $request->current_status;
            $Stock->remark = $request->remark;
            $Stock->emp_id = $request->emp_id;
          

        $data=$Stock->save();
        if ($data){
        return back()->with('success','System Allotment Succefully To -> '. $request->name . "||" . 'System Serila No ->' . $request->asset_sr_no);
        } else {
        return back()->with('fail','something wents wrong');
        }

       }
 
    public function allotDisplay(){
        $details = DB::table('stocks')->select('*') ->join('bluethinks', 'bluethinks.emp_id', '=', 'stocks.emp_id')  ->get();
         return view('table.viewallot', compact('details'));
     }


     public function viewonerecord(){
         $id = $_GET['id'];
         $viewonerecord = Stock::where('id', '=',$id)->first();
        //  echo "<pre>";
        //  print_r($viewonerecord);
        //  die;
         return view('table.viewonerecord', compact('viewonerecord'));
     }

    //  public function allotDisplay(){
    //     $details = Stock::all();
    //     // print_r($products);
    //     // die;
    //     return view('table.viewallot',compact('details'));
    // }
   

}
