<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Population;

class PopulationApiController extends Controller
{
    //
    //Creating a function to get the data from the API
    function getData(){
        //call APIs
        $data = Http::get("https://datausa.io/api/data?drilldowns=Nation&measures=Population");

        //return all the data in order as a json_decode
        return json_decode($data);

        // return view("data", [
        //     "data" => json_decode($data)
        // ]);
    }
}
