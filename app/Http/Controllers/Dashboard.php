<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
        $costumerAllCount = Costumer::count();
        $newCostumerCount = Costumer::where('status', 'NEW COSTUMER')->count();
        $loyalCostumerCount = Costumer::where('status', 'LOYAL COSTUMER')->count();

        $result = DB::select(DB::raw("select count(*) as total_costumer, status from costumers group by status"));

        $chartData= "";
        foreach($result as $list){
            $chartData.="['".$list->status."',          ".$list->total_costumer."],";
        }
        $arr = $chartData;

        return view('dashboard',compact('arr', 'costumerAllCount', 'newCostumerCount', 'loyalCostumerCount'));
    }
}
