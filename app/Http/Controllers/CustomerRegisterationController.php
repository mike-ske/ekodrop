<?php

namespace App\Http\Controllers;

use App\Models\CustomerRegisteration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CustomerRegisterationController extends Controller
{
    public function index()
    {
        return view('auth.customer.customregister');
    }
    public function create(Request $request)
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
            CustomerRegisteration::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' =>  Hash::make($request->password),
            ]);
            return Response::json(['success' => 'Successfull! Account successfully created', 'status' => '200']);
        }
     
        // sign them in

    }
}
