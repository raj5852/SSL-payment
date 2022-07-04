<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class EditdeleteControler extends Controller
{
    //
    function edit(Request $request){
        $id  = $request->id;
        $find = Order::find($id);

        return view('edit',compact('find'));
    }
    function update(Request $request){
        $find = Order::find($request->id);
        $find->name = $request->name;
        $find->email = $request->email;
        $find->phone = $request->phone;
        $find->address = $request->address;
        $find->status = $request->status;
        $find->transaction_id = $request->transaction_id;
        $find->packagename = $request->packagename;
        $find->packvalue = $request->packvalue;
        $find->amount = $request->amount;

        $find->save();
        return redirect()->route('dashboard')->with('success','Edit Successfully!');

    }
    function delete(Request $request){
        Order::find($request->id)->delete();

        return redirect()->route('dashboard')->with('success','Deleted Successfully!');

    }
}
