<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\signup_email;

use Illuminate\Support\Facades\Mail  ;  

class all_functions extends Model
{
    //
	
	//send mail  
	
	
	public static function send_email($subject,  $message  , $to  ,  $button  ,  $button_url){
		
	try{ 
		Mail::to($to)->send(new signup_email($subject , $message , $button , $button_url , $subject));
		
		}catch(\Exception  $e){

			return  false  ;


		}
		 
		return  true  ;
	}
}

