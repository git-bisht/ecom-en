<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Greet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:greet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command Will greet me';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $this->info('Hello, Rajendra You are Working on Laravel!'); // Display a greeting message
    }
}
