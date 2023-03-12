<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request){
        if($request->search==null){
            $search="surat";
        }
        else{
        $search=$request->search;
        }
        $url="https://api.openweathermap.org/data/2.5/weather?q={$search}&appid=ff0488d2384bcb23a705ca2424d8f52f&units=metric";
        $json = json_decode(file_get_contents($url), true);
        $json=compact('json');
        return view('weather')->with($json);
    }
}
