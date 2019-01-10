<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller ;
use App\Model\Governorate;

use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    public function GetAreas(Governorate $Governorate)
    {
        //return $Governorate->Areas;
        $output = array();
        foreach($Governorate->Areas as $a){ 
            
            array_push($output, array('a_en_name' => (direction() == 'ltr') ? $a->a_en_name : $a->a_ar_name , 'id'=> $a->id));
        }
        //header("Content-type: application/json");
        return collect($output);
    }
}
