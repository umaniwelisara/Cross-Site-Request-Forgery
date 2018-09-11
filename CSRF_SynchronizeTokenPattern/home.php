<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['ssd'])){
		echo "Hello ".$_POST['updatepost'];		
	}
	else{
	echo "wrong".$_COOKIE['ssd'];
	}
}
?>
