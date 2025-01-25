<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class signup_email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	
	
	public $heading ; 
	public $message ; 
	public $button ;
	public $button_url ;
	
	public   $subject  ; 
	
    public function __construct($heading , $message   , $button  , $button_url   ,  $subject)
    {
        //
		
		$this->heading  = $heading;
		$this->message = $message ;
		
		$this->button   = $button ;  
		$this->button_url   = $button_url;
		
		
		$this->subject  =  $subject  ;  
		
		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->markdown('mail.sign_blade');
    }
}
