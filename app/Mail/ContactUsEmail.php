<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    public $name ; public $email ; public $subject ; public $E_message ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data ;
        /* $this->name = $data['name'] ;
        $this->email = $data['email'] ;
        $this->subject = $data['subject'] ; */
        /* $this->message = $message ; */
         foreach ($this->data as $name => $value) {
			$this->$name = strval($value) ;
		}
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$message = 'hfhfh' ;
        return $this->view('admin.emails.contactUs');
        /* ->subject($this->subject)
        ->with(['name' => $this->name, 'email' => $this->email, 'subject' => $this->subject, 'message' => $this->message]); */
    }
}
