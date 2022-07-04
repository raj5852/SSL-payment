<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
        $datas = Order::orderBy('id','desc')->paginate(10);
        return view('admin',compact('datas'))->with('i',(request()->input('page',1)-1)*10);
    }
}
