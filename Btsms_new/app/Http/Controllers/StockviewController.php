<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bluethink;
use App\Models\Stock;
use App\Models\Allotmentrecord;
use Illuminate\Support\Facades\DB;

class StockviewController extends Controller
{
    /**
     * Display a Record of the All System.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewallot()
    {
         $detail1 = DB::table('stocks')->select('*')->JOIN('allotmentrecords', 'allotmentrecords.stock_id', '=', 'stocks.id')->where('allotmentrecords.current_status', '=', 1)->JOIN('bluethinks', 'bluethinks.emp_id', '=', 'allotmentrecords.emp_id')->get();

         $detail2 = DB::table('stocks')->select('*')->whereIn('current_status', array('0','2'))->get();

        $details = $detail1->concat($detail2);

    //    $details= DB::table('stocks')
    //    ->select('*')
    //    ->leftJoin('allotmentrecords','allotmentrecords.stock_id','=','stocks.id')
    //    ->leftJoin('bluethinks','bluethinks.emp_id','=','allotmentrecords.emp_id')
    //    ->groupBy('stocks.asset_sr_no')
    //    ->orderBy('allotmentrecords.current_status','asc')
    //    ->get();

        return view('table.viewallot', compact('details'));
    }

    /**
     * Show the Record for Particular system alloted .
     *
     * @return \Illuminate\Http\Response
     */
    public function viewonerecord()
    {
        $id = $_GET['id'];

        $viewonerecord = DB::table('allotmentrecords')->select('*')->where('stock_id', '=', $id)->get();
        if (count($viewonerecord) > 0) {
            $viewonerecord = DB::table('stocks')->select('*')->where('allotmentrecords.stock_id', '=', $id)->JOIN('allotmentrecords', 'allotmentrecords.stock_id', '=', 'stocks.id')->JOIN('bluethinks', 'bluethinks.emp_id', '=', 'allotmentrecords.emp_id')->get();
            return view('table.viewonerecord', compact('viewonerecord'));
        }else{
            $viewonerecord = DB::table('stocks')->select('*')->where('id', '=', $id)->get();
        return view('table.viewonerecord', compact('viewonerecord'));
        } 
    }

    
}
