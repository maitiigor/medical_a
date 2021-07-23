<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\HealthWorkers;
use App\Models\Patience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //
    public function index(){
        $doctors=HealthWorkers::all();
        return view('/chat');
    }
    public function getDoctors(){
        $doctors=HealthWorkers::all();
        return $doctors;
    }
    public function getPatience(){
        $patiences = Patience::all();
        return $patiences;
    }
    public function submitMessage(Request $request){
        Chat::create([
            'message' => $request->message,
            'health_worker_id' => $request->id,
            'patience_id' => Auth::guard('patience')->id(),
        ]);
       $chat = Chat::all()->where('health_worker_id','=',$request->id,'and','patience_id','=', Auth::guard('patience')->id());
       return $chat;
    }
}
