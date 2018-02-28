<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Fight;
use App\Npc;

class calcFight extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:fight';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculating coming fight';

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
     * @return mixed
     */
    public function handle()
    {   
        $now = date("Y-m-d");
        $fight = Fight::whereDate( 'start_date','>', $now );
        $fight->delete();
    }
}
