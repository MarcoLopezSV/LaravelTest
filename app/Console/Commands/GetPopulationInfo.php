<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetPopulationInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'population:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to get information of the REST API to the database set on .env file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        //Creating a function to get the data from the API
        function getData(){
        //call APIs
        $data = Http::get("https://datausa.io/api/data?drilldowns=Nation&measures=Population");
        }
    }
}