<?php

namespace App\Http\Controllers;

use App\Models\Patience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatiencePageController extends Controller
{
    //
    public function _construct(){
        $this->middleware('auth:patience');
    }
    public function index(){
        //pacontrols patience page index age
        $id = Auth::guard('patience')->id();
        $patience = Patience::all()->where('id',$id)->first();

        return view('patience',compact( 'patience'));
    }
}
