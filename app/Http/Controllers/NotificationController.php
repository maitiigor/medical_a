<?php

namespace App\Http\Controllers;

use App\Models\HealthWorkers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function  _construct(){


        $this->middleware('auth:health_worker');

    }

    public function healthWorkerNotification(){
            //notrify the doctor of a file beebn sent to him by another doctpor
           $user =HealthWorkers::find( Auth::guard('health_worker')->id());
        $notifications =$user->notifications;
        return view('/notification',compact('notifications'));
    }
}
