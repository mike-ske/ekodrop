<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VendorCustomer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class VendorCustomerController extends Controller
{

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
    
    public function customIndex()
    {
        return view('auth.customer.customregister');
    }

    public function vendIndex()
    {
        return view('auth.customer.vendregister');
    }

    public function customCreate(Request $request)
    {
        // validate
        $validate = Validator::make($request->all(),[
            'first_name' => 'required|max:50|string',
            'last_name' => 'required|max:50|string',
            'email' => 'required|max:50|unique:customer_registerations',
            'phone' => 'required',
            'address' => 'required|string',
            'password' => 'required|min:8|alpha_num',
            'aggree' => 'required',
        ]);
        if($validate->fails()){
            return Response::json(['failed' => $validate->errors(), 'status' => '400']);
        }else{
            // store users data
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' =>  Hash::make($request->password),
            ]);
            return Response::json(['success' => 'Successfull! Account successfully created', 'status' => '200']);
        }
    }   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function vendCreate(Request $request)
    {
        // VALIDATE EACH VENDOR
        if ($request) {
            $response =  Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'phone' => ['required', 'string', 'numeric'],
                'address' => ['required', 'string'],
            ]);

            if($response->fails())
            {
                return Response::json(['failed' => $response->errors()]);
            }
            else 
            {
                   User::create([
                       'email' => $request->email,
                       'password' => Hash::make($request->password),
                       'phone' => $request->phone,
                       'address' => $request->address,
                ]);

                return Response::json(['success' => 'Successfull! Account created successfully']);
            }

        } else {
                    // VALIDATE EACH VENDOR BUSINESS DETAILS
                    $response =  Validator::make($request->all(), [
                        'address' => ['required', 'string'],
                        'bizname' => ['required', 'string'],
                        'biztype' => ['required', 'string'],
                        'bizdescrp' => ['required', 'string'],
                        'photo' => ['required', 'image', 'mimes:jpg,png,jpeg,'],
                    ]);

                    if($response->fails()){
                        return Response::json(['failed' => $response->errors()]);
                    }
                    else {
                        $imagePath = $request->photo->path();
                        $imagePath = base64_encode(file_get_contents($imagePath));
                        User::where('email', $request->email)->update([
                            'address' => $request->address,
                            'bizname' => $request->bizname,
                            'biztype' => $request->biztype,
                            'bizdescrp' => $request->bizdescrp,
                            'photo' => $imagePath,
                        ]);                 
                        return Response::json(['success' => 'Successfull! Account created successfully']);
                    }
                }
    }
}
