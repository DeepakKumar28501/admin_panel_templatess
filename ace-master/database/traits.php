<?php 
session_start();

trait session{

	function session_set($first,$second =''){
		if(is_array($first)){
			$_SESSION = $first;
		}
		else{
			$_SESSION[$first] = $second;
		}
		return true;
	}

	function session_get($index = ''){
		if(empty($index))
			return $_SESSION;
		if(isset($_SESSION[$index]))
			return $_SESSION[$index];
		return false;
	}


	function destroy_session($index =''){
		if(empty($index))
			return session_destroy();
		if(isset($_SESSION[$index])){
			unset($_SESSION[$index]);
			return true;	
		}
		return false;
	}
}

 ?>