<?php 
if(!isset($_GET['pg'])){
	$pg = 'main';

}else{
	$pg = $_GET['pg'];
}

//If $pg == some filname --> include that file. Otherwise include main


	if($pg == 'main') include('pages/main.php');
 
 ?>
