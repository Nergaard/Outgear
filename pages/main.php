<?php 
	include_once('include/pdo_con.php');
	include_once('include/class_jumbo.php');
 ?>

<div class ="span--full--width">
<?php 
	
	$jumbo = New Jumbo();
	$jumbo->show_jumbo();

?>
</div>
