<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Population; 

class PopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //call APIs
            $data = Http::get("https://datausa.io/api/data?drilldowns=Nation&measures=Population");
            //return all the data in order as a json_decode
            //return json_decode($data);

            DB::table('population')->insert(
                [json_decode($data)]
            );

    }
}
