<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateTanksTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tanks:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update `tanks` table by data from WG api.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

    }
}
