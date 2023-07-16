<?php

namespace App\Console\Commands;

use App\Models\Costumer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class NewCostumer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'costumer:newcostumer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $newCostumer = Costumer::select('email')->where('status', 'NEW COSTUMER')->get();
        $emails = [];
        foreach($newCostumer as $mail){
            $emails[] = $mail['email'];
        }

        Mail::send('mails.new',[], function($message) use ($emails){
            $message->to($emails)->subject('New Costumer');
        });
    }
}
