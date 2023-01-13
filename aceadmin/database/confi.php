<?php 

function query($query, $flag = false){
	$db=mysqli_connect('localhost','root','12345678','admin') or die('Error=>'.mysqli_connect_error());
	$res = $db->query($query);
	return $flag ? $db : $res;
}

function post($index=''){
	if(empty($index))
		return $_POST;
	return isset($_POST[$index]) ? $_POST[$index]:"";
}

function redirect($page='index'){
	echo'<script>
	loction.href ="'.$page.'.php";
	</script>';
}



?>