<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class serviceController extends Controller
{
    //
    public function store($client_id,$product_id){
    	$frequency=DB::select('SELECT frequency FROM visits_from where client_id=1 ORDER BY v_id DESC LIMIT 1')[0]->frequency;

    	
    	DB::table('visits_from')->insert(
                            ['product_id' => $product_id,'client_id'=>$client_id,'frequency'=>$frequency++ ,'user_id' => 1,]
                        );
    	$url=DB::select('select website_url from affiliated_client where client_id='.$client_id)[0]->website_url;

    	return 'Thank you! for visiting <br><br>You visited from <h4>'.$url.'</h4>';
    	
    }
}
