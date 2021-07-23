<?php

namespace App\Http\Controllers;

use App\Models\Patience;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    //getting al l uusers from table to crate a user table in dashboard comonenet
    public function index(){
        $patience = Patience::all();

        return $patience;
    }
    public function filter(Request $request){
        filtering user request based on user secification
        $patience = Patience::orderBy($request->filter,$request->order)->get();

        return $patience;
    }
}
