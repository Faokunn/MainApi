<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\User;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //
    public function adding (Request $request)
    {
        $items = new Accounts();
        $items->name = $request->name;
        $items->save();
        // return response()->json($items);
    }

    public function add (Request $request)
    {
        $items = new User();
        $items->name = $request->name;   
        $items->password = $request->password;
        $items->email = $request->email;
        $items->save();
        // return response()->json($items);
    }

    public function updating (Request $request)
    {
        $items = User::findorfail($request->id);
        $items->name = $request->name;
        $items->password = $request->password;
        $items->email = $request->email;
        $items->update();
        // return response()->json($items);
    }

    public function deleting(Request $request){
        $items = User::findorfail($request->id)->delete();
    }

    public function viewing(){

        $items = User::all();
        return response()->json($items);
    }
}
