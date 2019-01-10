<?php

namespace App\Http\Controllers;

use App\Model\contactus;
use App\Mail\ContactUsEmail;
use Mail;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactus(Request $request){
        //return $request ;
        $contactus = contactus::create([
						   'name'        => $request->name,
						   'email'       => $request->email,//Auth::user()->id,
						   'subject'     => $request->subject,
						   'message'	 => $request->E_message,

                        ]);
        $data = array(
                    'name'    => $request->name,
                    'email'   => $request->email,//Auth::user()->id,
                    'subject' => $request->subject,
                    'E_message' => $request->E_message
                );
        Mail::send('admin.emails.contactUs', $data, function ($message) use($data) {
            $message->from($data['email'], $data['name']);
            $message->to('shashem@mindholding.net', 'Sherif Hashem');
            $message->to('tahamostfa588@gmail.com', 'Taha Mostafa');
            $message->subject($data['subject']);
        });
        return ($contactus) ? 'true' : 'false' ;
    }
}
