<?php

include "config.php";

$return_data=array();

$sql="SELECT `id`, `value_type`, `value_amount` FROM `notfiactions` WHERE 1 ";
$query = mysqli_query($connect, $sql);

while($row = mysqli_fetch_array($query))
{
	$return_data[$row['value_type']]=$row["value_amount"];
}

echo json_encode($return_data);

exit();

//ALTER TABLE Notfiaction CHANGE id id INT(10)AUTO_INCREMENT PRIMARY KEY;


?>







