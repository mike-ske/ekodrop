<?php

namespace App\Http\Controllers;

use App\Mail\EkodropContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendcontact(Request $request)
    {
        // vALIDATE THE CONTACT FORM FIELD
        $validate = Validator::make($request->all(), [
            'first_name' => 'required|max:225',
            'email' => 'required|email|max:225',
            'message' => 'required|max:5000',
        ]);

        if($validate->fails())
        {
            return Response::json(['failed' => $validate->errors()]);
            // return response()->json(['failed', $validate->errors()]);
        }else{
            Mail::to('ekodroptech@gmail.com')
                    // ->bcc('micahalumona@gmail.com')
                    ->send(new EkodropContactUs($request));
            return response()->json(['success' => "Successfull! Thank you for contacting Ekodrop. You will get contacted soon"]);
            // <div class='text-green-800 text-xl mr-4'><i class='bi bi-check-circle-fill'></i></div>
        }
    
    }
}
