<?php

namespace App\Http\Controllers;

use App\Event\PatienceEncounter;
use App\Models\HealthWorkers;
use App\Models\Patience;
use App\Models\PatienceEncounter as Vistitaion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/welcome');
    }
    public function healthWorkerIndex(){
        return view('health_worker');
    }
    public function submitPatienceEncounter(Request $request,$id){
        try {
           $val = $this->validate($request, [
                'blood_pressure' => 'required',
                'diagnosis' => 'required',
                'treatment_plan' => 'required',
                'visit_type' => 'required',
                'temperature' => 'required',
                'bmi' => 'required',
                'weight' => 'required',
                'height' => 'required',
                'respiratory_rate' => 'required',

            ]);
        } catch (ValidationException $e) {

        }
        $patience = Patience::find($id);

        Vistitaion::create([
            'blood_pressure' => $request->blood_pressure,
            'diagnosis' => $request->diagnosis,
            'treatment' => $request->treatment_plan,
            'visit_type' => $request->visit_type,
            'temperature' => $request->temperature,
            'bmi' => $request->bmi,
            'complaint'=>$request->complaint,
            'weight' => $request->weight,
            'height' => $request->height,
            'respiratory_rate' => $request->respiratory_rate,
            'health_worker_id' => Auth::guard('health_worker')->id(),
            'patience_id' => $id,
            'time' => Carbon::now(),
            'date' => Carbon::now()->format('Y-m-d')

        ]);
        event(new PatienceEncounter($request,$patience));

        session()->flash('message','Submitted successfully');
    }
    public function showPatienceEncounter($id){
        $doctors = HealthWorkers::all();
        $patience = Patience::find($id);
        return view('patience_encounter',compact('doctors','patience'));
    }
}
