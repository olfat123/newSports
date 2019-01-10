<?php
//function to get user country in register project
if (!function_exists('getCountry')) {
	function getCountry() {
		function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        	return $ipaddress;
		}
		$PublicIP = get_client_ip(); 
		$json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
		$json  =  json_decode($json ,true);

		if( isset( $json['country'] ) ){
			$country =  strtolower($json['country']);
			$country_0 = App\Model\Country::where('c_code', $country)->first() ;
			return $country_0->id ;
		}else{
			return 59 ;
		}
		
	}
}

//function to redirect to same page after login
if (!function_exists('redirectToMailLink')) {
	function redirectToMailLink($taragetPage, $userKind) {
		if ($userKind == 'admin') {

			if (admin()->check()) {
	    		return $taragetPage ;
			}else {
				session()->put('taragetPage', $taragetPage) ;
				return 'admin/login' ;
			}

		} elseif ($userKind == 'user') {

			if (Auth::check()) {
				return $taragetPage ;
			} else {
				session()->put('taragetPage', $taragetPage) ;
				return 'login';
			}
			
		} 
		
	}
}

// function to approve and do club edit request dynamically
if (!function_exists('approveClubEditRequest')) {
	function approveClubEditRequest($model_id, $model_name, $new_data, $is_main_club_info = false) {
		$taragetModel =  $model_name;

	    $newReords= $new_data ;

	    $Model = $taragetModel::find( $model_id );

	    foreach ($newReords as $key => $record) {
	        $Model->$key = $record;
	    }
	    

	    $Model->save();
	    return $Model; 
		}
}

if (!function_exists('noSession')) {
	function noSession() {
		session()->flush(); 
	}
}



if (!function_exists('getTopCount')) {

	function getTopCount($relation, $orderBy, $type, $limit = 1) {
		
		 $top = \App\Model\User::withCount($relation)
        ->with('playerProfile')
        ->where('type', $type)
        ->orderBy($orderBy . '_count', 'desc')
        ->take($limit)->get();

		 return $top;
	}
}
if (!function_exists('setting')) {
	function setting() {
		return \App\Model\Setting::orderBy('id', 'desc')->first();
	}
}

if (!function_exists('up')) {
	function up() {
		return new \App\Http\Controllers\UploadController;
	}
}

if (!function_exists('aurl')) {
	function aurl($url = null){
		return url('admin/'.$url);
	}
}

if (!function_exists('admin')) {
	function admin(){
		return auth()->guard('adminGuard');
	}
}

if (!function_exists('lang')) {
	function lang(){
		if(session()->has('lang')){
			return session('lang');
		}else{
			return setting()->main_lang ;
		}
	}
}

if (!function_exists('direction')) {
	function direction(){
		if(session()->has('lang')){
				if (session('lang') == 'ar') {
					return 'rtl' ;
				} else {
					return 'ltr' ;
				}
		}else{
			return 'ltr' ;
		}
	}
}

if (!function_exists('makeActiveLinkActive')) {
	function makeActiveLinkActive($link = null){
		if ($link == null && Request::segment(2) == '') {
			 return ['menu-open', 'display:block', 'background: #3c8dbc;color: #fff;'];
		}elseif($link == null){
			return ['', '', ''];
		}else{
			if( in_array(strtolower( Request::segment(2) ), $link) ){
				return ['menu-open', 'display:block', 'background: #3c8dbc;color: #fff;'];
			}else{
				return ['', '', ''];
			}
		}

		/*if ($link == null) {
			 return ['menu-open', 'display:block', ''];
		} else {
			foreach ($link as $value) {
				if ( ( preg_match('/' . $value . '/i', Request::segment(2)) ) ) {
					return ['menu-open', 'display:block', ''];
				} else {
					return ['', '', ''];
				}
			}
		}*/
		
	
	}
}


//choose random class for admin player profile to display sports
if (!function_exists('randomClasses')) {
	function randomClasses(){
		$classes = [
			'label-danger' 	=> "label-danger",
            'label-success'	=> "label-success",
            'label-info' 		=> "label-info",
            'label-warning' 	=> "label-warning",
            'label-primary' 	=> "label-primary",
		];
		return array_rand($classes);
	}
}

//choose random class for admin player profile to display sports
if (!function_exists('validateImage')) {
	function validateImage($ext = null){
		if ($ext === null) {
			return 'image|mimes:jpg,jpeg,png,gif,pmb' ;
		} else {
			return 'image|mimes:' . $ext ;
		}
		
	}
}


//function to use in [ encrypt / decrypt ] values to use it to hide info sent in links
if (!function_exists('sm_crypt')) {
	function sm_crypt( $string, $action = 'e' ) {
	    // you may change these values to your own
	    $secret_key = 'Sports_Mate';
	    $secret_iv = 'Sports_Mate';
	 
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    $key = hash( 'sha256', $secret_key );
	    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
	 
	    if( $action == 'e' ) {
	        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
	    }
	    else if( $action == 'd' ){
	        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
	    }
	 
	    return $output;
	}
}

