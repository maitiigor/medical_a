<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patience;
use App\Providers\RouteServiceProvider;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:health_worker')->except(['showHealthWorkerLoginForm,showPatienceLoginForm','patienceLogin']);
        $this->middleware('guest:patience')->except(['showHealthWorkerLogin','healthWorkerLogin']);
    }
    public function showHealthWorkerLoginForm()
    {   $activePage = "login";
        return view('auth.health_worker_login',compact('activePage'));
    }

    public function healthWorkerLogin(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);
        } catch (ValidationException $e) {
        }

        if (Auth::guard('health_worker')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {






            return redirect()->intended('/health_worker');

        }
        return back()->withInput($request->only(['email', 'remember']));
    }

    public function showPatienceLoginForm()
    {
        return view('auth.patience_login', ['url' => 'patience_login']);
    }

    public function patienceLogin(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);
        } catch (ValidationException $e) {
        }

        if (Auth::guard('patience')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/patience');
        }
        return back()->withInput($request->only(['email', 'remember']));
    }
    public function logoutPatience(){
        Auth::guard('patient')->logout();
        return('/welcome');
    }
    public function logoutHealthWorker(){
    Auth::guard('health_worker')->logout();
    return view('/welcome');
}


}
