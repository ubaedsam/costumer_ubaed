<?php

namespace App\Console\Commands;

use App\Models\Costumer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMailCostumerLoyal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'costumers:sendmailcostumerloyal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Promo Loyal Costumer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $costumersMail = Costumer::select('email')->where('status', 'LOYAL COSTUMER')->get();
        $emails = [];
        foreach($costumersMail as $mail){
            $emails[] = $mail['email'];
        }

        Mail::send('mails.costumer-mail-loyal',[], function($message) use ($emails){
            $message->to($emails)->subject('Loyal Costumer');
        });
    }
}
