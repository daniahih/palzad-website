<?php

include "config.php";




$temperture_val=$_GET['temperture_val'];
$humidity_val=$_GET['humidity_val'];
$found_gas=$_GET['found_gas'];
$found_motion=$_GET['found_motion'];



$update = mysqli_query($connect, "UPDATE notfiactions SET `value_amount`='$temperture_val'  WHERE 1 AND value_type='temperture_val' ");
$update = mysqli_query($connect, "UPDATE notfiactions SET `value_amount`='$humidity_val'  WHERE 1 AND value_type='humidity_val' ");
$update = mysqli_query($connect, "UPDATE notfiactions SET `value_amount`='$found_gas'  WHERE 1 AND value_type='found_gas' ");
$update = mysqli_query($connect, "UPDATE notfiactions SET `value_amount`='$found_motion'  WHERE 1 AND value_type='found_motion' ");




?>







