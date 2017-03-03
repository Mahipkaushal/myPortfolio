<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'message_id';

    protected $fillable = [
    	'name',
    	'email',
    	'subject',
    	'message'
    ];

    public static $rules = [
    	'name'					=>	'required|min:3|max:255',
    	'email'					=>	'required|email|min:3|max:255',
    	'subject'				=>	'required|min:3',
    	'message'				=>	'required|min:3',
    	'g-recaptcha-response' 	=> 	'required',
    ];
}
