<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Request;
use Illuminate\Support\Facades\Mail;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function contact(Request $request){
        try {
            //$email = $request->email;
            dd( $request->email);
            // $dataContact = [
            //     "fullname" => $request->input('fullname'),
            //     "email"    => $request->email,
            //     "message"  => $request->message,
            //     "phone"    => $request->phone
            // ];
            // Mail::send('emails.contact',$dataContact,function($message){
            //     $message->to('tahadourhmi01@gmail.com','Taha Dourhmi')
            //     ->subject('Contact from Portfolio');
            // });

            // Mail::send('emails.contact',$dataContact,function($message){
            //     $message->to('contact@tahadourhmi.site','Taha Dourhmi')
            //     ->subject('Contact from Portfolio');
            // });

            return view("index")->with("successContact","successContact");

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
