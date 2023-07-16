<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EditCostumerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $costumer;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($costumer)
    {
        $this->costumer = $costumer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->subject('Loyal Costumer')->view('mails.costumer-mail-edit');
    }
}
