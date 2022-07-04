<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //
    function index()
    {
        return view('admin');
    }
    function ajax()
    {
        if (request()->ajax()) {
            return datatables()->of(Order::select('*'))
                ->addColumn('action', 'action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
