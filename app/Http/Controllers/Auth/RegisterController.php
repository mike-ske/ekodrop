<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request) 
    {
        if ($request->email) {
            $response =  Validator::make(new Request(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone' => ['required', 'string', 'numeric', 'max:255'],
            ]);
            if($response->fails()){
                return Response::json(['failed' => $response->errors()]);
            }
        } else {
            $response =  Validator::make(new Request(), [
                'address' => ['required', 'string'],
                'bizname' => ['required', 'string', 'max:255'],
                'biztype' => ['required', 'string', 'max:255'],
                'bizdescrp' => ['required', 'string','max:255'],
                'photo' => ['required', 'image', 'mimes:jpg,png,jpeg,'],
            ]);
            if($response->fails()){
                return Response::json(['failed' => $response->errors()]);
            }
        }
        
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $imagePath = $request->photo->path();
        $imagePath = base64_encode(file_get_contents($imagePath));
        if ($request->email) {
            $user =  User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
            ]);
            if($user > 0) {
                return Response::json(['success' => 'Successfull! Account created successfully']);
            }
        } else {
            $user =  User::where('email', $request->email)->update([
                'address' => $request->address,
                'bizname' => $request->bizname,
                'biztype' => $request->biztype,
                'bizdescrp' => $request->bizdescrp,
                'photo' => $imagePath,
            ]);
            if($user > 0) {
                return Response::json(['success' => 'Successfull! Account created successfully']);
            }
        
        }
    }
}
