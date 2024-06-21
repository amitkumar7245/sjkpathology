<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AccountID;

class InsertMonthlyToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertToken:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cur_end_date= idate('Y').'12'.'31';
        $start_no= idate('Y').'01'.'01';
        $end_no= idate('Y').'12'.'31';
       
        $data=[
            'start_dt'=>date('Y-m-d'),
            'end_dt'=>$cur_end_date,
            'updated_no'=>'01000000',
        ];
        AccountID::create($data);
    }
}
