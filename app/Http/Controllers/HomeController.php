<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
  
        $client  =  new Client([ 'base_uri'  =>  'https://dev.gosat.org/api/v1/simulacao/oferta']);
                
        
     
        echo  $client ->getStatusCode();
        // "200"
        echo  $client ->getHeader('content-type')[0];
        // 'application/json; charset=utf8'
        echo  $client ->getBody();

        


        // dd($response);
        // return view('home.index', ['title' => 'home', 'name'=>'Eduardo']);
    }
}
