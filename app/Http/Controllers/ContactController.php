<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Mail\Thankyou;

use App\Models\Message;

use Mail;

class ContactController extends Controller
{
    public function store(Request $request) {
    	$json = array();

    	$validation = Validator::make($request->all(), Message::$rules);

    	if ($validation->fails()) {
			return response()->json([
				'errors' => $validation->errors()->getMessages()
			], 422);
    	}

    	$message = Message::create(
    		request(['name', 'email', 'subject', 'message'])
    	);

    	Mail::to($message)->send(new Thankyou($message));

    	return response()->json([
			'success' => '<span class="success">Thank you for contacting me, I\'ll be get back to you soon <i class="fa fa-smile-o"></i> !</span>'
		], 200);

    }
}
