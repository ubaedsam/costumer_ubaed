<?php

namespace App\Mail;

use App\Models\Costumer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddCostumerMail extends Mailable
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
        return $this->subject('New Costumer')->view('mails.costumer-mail-add');
    }
}
