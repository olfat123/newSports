<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller ;
use App\Model\Country;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function GetGovernorate(Country $Country)
    {
    	// return $Country->c_cites;
        $output = array();
        foreach($Country->c_cites as $c){ 
            
            array_push($output, array('g_en_name' => (direction() == 'ltr') ? $c->g_en_name : $c->g_ar_name , 'id'=> $c->id));
        }
        //header("Content-type: application/json");
        return collect($output);
    }
}
