<?php

namespace App\Http\Controllers\Club;
use App\Http\Controllers\Controller ;
use App\Model\Governorate;

use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    public function GetAreas(Governorate $Governorate)
    {
    	return $Governorate->Areas;
    }
}
