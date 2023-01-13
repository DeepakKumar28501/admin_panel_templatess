<?php 
//echo 'ii';
date_default_timezone_set('ASIA/CALCUTTA');
define('host','localhost');
define('user','root');
define('pass','12345678');
define('dbname','chat_app');

require 'databse_library.php';

function redirect($url = 'index',$substr = ''){
	$url = "$url.php";
	$substr = $url . (!empty($substr) ? '?'.$substr : '');
	
header("location:$substr");
}





function randomstring($n = 10){
	$str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	$randstr ='';
	for ($i=0; $i <=$n ; $i++) { 
		$randstr .=$str[rand(0,strlen($str))];
	}

	return $randstr;
}


class main{
	//child class of database clas

	use session;  
	public $method ,$db;

	function __construct(){
		$this->db = new database('localhost','root','12345678','chat_app');
		$this->method = $_SERVER['REQUEST_METHOD']; //check request method like get or post
	}
	function admin(){
		$get = $this->db->where('id',$this->session_get('user_id'))->get('user');
			if($get->num_rows()){
				return $get->row('jk');
			}
		return false;
	}
	function post($index =''){
		if($this->method ==='POST')
		{// === is check string and data type
			if(empty($index))
				return $_POST;
			if(isset($_POST[$index])){
				return $_POST[$index];
			}
		}
	   return '';

	}

	function get($index =''){
		if($this->method === 'GET'){
			if(empty($index))
				return $_GET;
			if(isset($_GET[$index])){
				return $_GET[$index];
			}
		}
		return '';
	}

	function file_upload($file_name = '',$upload_dir = '/',$base_name = ''){

		 if(isset($_FILES[$file_name]['name'])){
		 	$file = $_FILES[$file_name];
		 	$ex =explode('.', $file['name']);
			$base_name = !empty($base_name) ? $base_name .'-' : '';
			$ex = pathinfo($file['name'],PATHINFO_EXTENSION);
			print_r($ex);
			$fileName = trim( $base_name .RandomString(5) .'.'. $ex);
			move_uploaded_file($file['tmp_name'], 'uploads'.$upload_dir.$fileName);
			return $fileName;
		 }
		 return '';
	}

	function checklogin(){
		if(!$this->session_get('name')){
			redirect('admin');
		}
	}

	function logout(){
		if($this->unset_session('root')){
			redirect('index');
		}
	}

	
}

require 'request/request.php';
	return new main;


 ?>




