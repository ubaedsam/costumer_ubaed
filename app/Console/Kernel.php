<?php

namespace App\Console;

use App\Mail\AddCostumerMail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Costumer;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected $commands = [
        Commands\SendMailCostumerLoyal::class,
        Commands\NewCostumer::class
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('costumer:newcostumer')->everyMinute();
        $schedule->command('costumers:sendmailcostumerloyal')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
