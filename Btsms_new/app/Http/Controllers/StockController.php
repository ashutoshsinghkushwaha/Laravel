<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bluethink;
use App\Models\Stock;
use App\Models\Allotmentrecord;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock()
    {
        return view('forms/stock');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $emp_id
     * @return \Illuminate\Http\Response
     */
    public function emp_detail_find(Request $request) 
    {
        return Bluethink::where('emp_id', '=', $request->input('emp_id'))->first();
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function asset_detail_find(Request $request) 
    {
        $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->first();
        if ($data->current_status == 1) 
        {
            return $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->JOIN('allotmentrecords', 'allotmentrecords.stock_id', '=', 'stocks.id')->where('allotmentrecords.current_status', '=', 1)->JOIN('bluethinks', 'bluethinks.emp_id', '=', 'allotmentrecords.emp_id')->first();
        } else 
        {
            return $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->first();
        }
        $emp_id = $data->emp_id;
        return $emp_detail = Bluethink::where('emp_id', '=', $emp_id = $data->emp_id)->first();
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function SaveSystemRecord(Request $request) 
    {
        $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->first();
        if (empty($data))
         {
            $request->validate([
                'asset_sr_no' => 'required|min:5|max:15|unique:stocks',
               
                'model_no' => 'required', 
                'brand_name' => 'required',
                'processor' => 'required',
                'storage' => 'required',
                'current_status' => 'required',
                'storage' => 'required',
                'memory' => 'required'
            
             ]);
            $stock = new Stock();
            $stock->asset_sr_no = $request->asset_sr_no;
            $stock->model_no = $request->model_no;
            $stock->brand_name = $request->brand_name;
            $stock->processor = $request->processor;
            $stock->storage = $request->storage;
            $stock->memory = $request->memory;
            $stock->host_name = $request->host_name;
            $stock->office_address = $request->office_address;
            $stock->asset_type = $request->asset_type;
           
            $stock->owned_by = $request->owned_by;
            $stock->company_name = $request->company_name;
            $stock->reporting_manag_detail = $request->reporting_manag_detail;
            $stock->current_status = $request->current_status;
            $stock->remark = $request->remark;
            $stock->start_warranty = $request->start_warranty;
            $stock->end_warranty = $request->end_warranty;
            $stock->save();
            $stock_id = $stock->id;
        } else 
        {
            $stock_id = $data->id;
        }
        if ($request->current_status == 1) 
        {
            $request->validate(['asset_sr_no' => 'required', 'current_status' => 'required', 'emp_id' => 'required', ]);
            $update_currenstatus = Stock::where('asset_sr_no', $request->input('asset_sr_no'))->update(['current_status' => $request->current_status]);
            $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->first();
            $stock_id = $data->id;
            $update_currenstatus1 = Allotmentrecord::where('stock_id', $stock_id)->update(['current_status' => 0]);
            $SaveSystemRecord = new Allotmentrecord();
            $SaveSystemRecord->stock_id = $stock_id;
            $SaveSystemRecord->current_status = $request->current_status;
            $SaveSystemRecord->emp_id = $request->emp_id;
            $data = $SaveSystemRecord->save();
            if ($data) 
            {
                $name_get = Bluethink::where('emp_id', '=', $request->input('emp_id'))->first();
                $name = $name_get->name;
                return back()->with('success', 'System Allotment Succefully To ' . $name);
            } else
            {
                return back()->with('fail', 'something wents wrong');
            }
        }
        if ($request->current_status == 0) 
        {
            $update_currenstatus = Stock::where('asset_sr_no', $request->input('asset_sr_no'))->update(['current_status' => $request->current_status]);
            $data = Stock::where('asset_sr_no', '=', $request->input('asset_sr_no'))->first();
            $stock_id = $data->id;
            $update_currenstatus1 = Allotmentrecord::where('stock_id', $stock_id)->update(['current_status' => $request->current_status]);
            if ($data) 
            {
                return back()->with('success', 'System is Decommission Mode');
            } else 
            {
                return back()->with('fail', 'something wents wrong');
            }
        }

        if ($request->current_status == 2) 
        {
            
            $update_currenstatus = Stock::where('asset_sr_no', $request->input('asset_sr_no'))->update(['current_status' => $request->current_status]);
            
            if ($update_currenstatus) 
            {
                return back()->with('success', 'System is Retired');
            } else 
            {
                return back()->with('fail', 'something wents wrong');
            }
            
        }
    }
    
}
