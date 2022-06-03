<?php

namespace App\Http\Controllers;

use App\Models\PhoneLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PhoneLoginController extends Controller
{
    public function index()
    {
        return view('auth.phone.phonelogin');
    }

    public function loginWithPhone(Request $request) 
    {
        // Valaidate the user
        $validate = Validator::make($request->all(), [
            'phone' => 'required|numeric',
        ]);

        if($validate->errors()){
            return Response::json(['failed' => $validate->errors()]);
        }else {
            // check for existing user
            PhoneLogin::where('');
            // if exist sign the user
        }
    }
}
