<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //

    public function  auth(Request $Request){

// $ipaddress = '';
//         if (isset($_SERVER['HTTP_CLIENT_IP']))
//             $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
//         else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
//             $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
//         else if(isset($_SERVER['HTTP_X_FORWARDED']))
//             $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
//         else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
//             $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
//         else if(isset($_SERVER['HTTP_FORWARDED']))
//             $ipaddress = $_SERVER['HTTP_FORWARDED'];
//         else if(isset($_SERVER['REMOTE_ADDR']))
//             $ipaddress = $_SERVER['REMOTE_ADDR'];
//         else
//             $ipaddress = 'UNKNOWN';
//       return $ipaddress;
 $PublicIP = '2405:204:30a:ad8f:b0eb:69da:3132:c2f3'; 
 //  $output= $_SERVER['HTTP_REFERER'];
 // return $output;

 $json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
 $json  =  json_decode($json ,true);
 // $country =  $json['country'];
 // $region= $json['region'];
 // $city = $json['city'];
 // return $city;

    	return view('home');
    }

  
}
	