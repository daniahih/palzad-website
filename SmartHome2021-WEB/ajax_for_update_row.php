<?php

include 'config.php';


$value_type=$_GET['value_type'];

$sql = "

UPDATE 
	`notfiactions` 
SET 
	`value_amount`= not value_amount 
WHERE
	value_type='$value_type'
	 
";
$query = mysqli_query($connect, $sql);


$sql = " SELECT   value_amount FROM `notfiactions` WHERE value_type='$value_type' ";
$query = mysqli_query($connect, $sql);

echo mysqli_fetch_array($query)['value_amount'];





    

?>


