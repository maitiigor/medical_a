<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\HealthWorkers;
use App\Models\Patience;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:health_worker')->except('showPatienceRegisterForm');
        $this->middleware('guest:patience');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showHealthWorkerRegisterForm()
    {
        return view('auth.health_worker_register', ['url' => 'health_worker']);
    }

    public function showPatienceRegisterForm()
    {
        return view('auth.patience_register', ['url' => 'patience']);
    }

    public function createPatience(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
        } catch (ValidationException $e) {
        }
        $image = $request->picture;
        $image = str_replace('data:image/jpeg;base64,','',$image);
        $image = str_replace(' ','+',$image);
        $imageName = uniqid('image_').time().'.jpeg';

        Storage::disk('public')->put('uploads/'.$imageName,base64_decode($image));

        Patience::create([
            'picture' => $imageName,
            'name' =>$request->name,
            'surname' => $request->surname,
            'state' => $request->state,
            'lga' => $request->lga,
            'ward' => $request->ward,
            'age' => $request->age,
            'password' => bcrypt($request->password),
            'bmi' => $request->bmi,
            'height'=> $request->height,
            'email' => $request->email,
            'gender' => $request->gender,
        ]);
        return response()->json(['message' => 'success']);
    }

    protected function createHealthWorker(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
        } catch (ValidationException $e) {
        }
        $newUser = HealthWorkers::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'surname' => $request['surname'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'cadre' => $request['cadre'],
            'department' => $request['department'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/health_worker');
    }
}
