<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reply extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$phone,$message)
    {
        $this->name = $name; 
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }
    // public function __construct($email)
    // {
    //     $this->email = $email;
    // }
    // public function __construct($phone)
    // {
    //     $this->phone = $phone;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('visionmotors@gmail.com')->markdown('admin.mailview');
    }
}
