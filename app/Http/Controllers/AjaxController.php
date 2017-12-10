<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;


class AjaxController extends Controller
{

    public function send(Request $request){

        $data = array(
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'phone'=>$request->phone, 
                        'messagetext'=>$request->message
                    );
        
        Mail::send('contacttext', $data, function ($message) use ($request){

            /* Config ********** */
            $to_email = "yakuter@gmail.com";
            $to_name  = "Erhan Yakut";
            $subject  = "Laravel Ajax Form Message";

            /* Send Mail ******* */
            $message->subject ($subject);
            $message->from ($request->email, $request->name);
            $message->to ($to_email, $to_name);
        });

        if(count(Mail::failures()) > 0){
            $status = 'error';
            return response()->json(['response' => $status, 'responseText' => '']);
        } else {
            $status = 'success';
            return response()->json(['response' => $status]);
        }


        
        
        //return response()->json(['response' => $status]);
    }

}