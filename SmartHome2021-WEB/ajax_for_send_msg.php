<?php

include 'config.php';


$lcd_msg=$_POST['lcd_msg'];

$sql = "

UPDATE 
	`notfiactions` 
SET 
	`value_amount`= '$lcd_msg' 
WHERE
	value_type='lcd_msg'
	 
";
$query = mysqli_query($connect, $sql);






    

?>


