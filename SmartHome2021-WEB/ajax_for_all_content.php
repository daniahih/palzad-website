<?php

include 'config.php';

$sql="SELECT `id`, `value_type`, `value_amount` FROM `notfiactions` WHERE 1 ";
$query = mysqli_query($connect, $sql);

$ON_OFF=array(0=>"OFF",1=>"ON");
$SHUTTER=array(0=>"CLOSE",1=>"OPEN");
$FOUND=array(0=>"not found",1=>" found ");

while($row = mysqli_fetch_array($query))
{
	if($row['value_type']=="master_bedroom")
	{
		$master_bedroom=$ON_OFF[$row["value_amount"]];
	}
	else if($row['value_type']=="kids_bedroom")
	{
		$kids_bedroom=$ON_OFF[$row["value_amount"]];
	}
	else if($row['value_type']=="living_room")
	{
		$living_room=$ON_OFF[$row["value_amount"]];
	}
	else if($row['value_type']=="kitchen")
	{
		$kitchen=$ON_OFF[$row["value_amount"]];
	}
	else if($row['value_type']=="bathroom1")
	{
		$bathroom1=$ON_OFF[$row["value_amount"]];
	}
	else if($row['value_type']=="bathroom2")
	{
		$bathroom2=$ON_OFF[$row["value_amount"]];
	}
	else if($row['value_type']=="shutter")
	{
		$shutter=$SHUTTER[$row["value_amount"]];
	}
	else if($row['value_type']=="found_motion")
	{
		$found_motion=$FOUND[$row["value_amount"]];
	}
	else if($row['value_type']=="found_gas")
	{
		$found_gas=$FOUND[$row["value_amount"]];
	}
	else if($row['value_type']=="humidity_val")
	{
		$humidity_val=$row["value_amount"];
	}
	else if($row['value_type']=="temperture_val")
	{
		$temperture_val=$row["value_amount"];
	}
}



?>
<style >
.row-1:hover{
	background-color:#FEFFD3;
}

</style>



				<table class="login100-form validate-form p-b-33 p-t-5 "  style="float:center;width:90%;" >

					<tr class="row-1"> 
					
						<td align="middle" width="40%">
							<span style="float:center;" id="master_bedroom">
							<?php echo $master_bedroom;?>
							</span>
						</td>
								
						<td align="middle" width="20%">
							<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="toggle_row('master_bedroom')">
								Master Bedroom
							</button>
						</td>
						

					</tr>
					
					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;" id="kids_bedroom">
							<?php echo $kids_bedroom;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="toggle_row('kids_bedroom')">
								Kids' Bedroom
							</button>
						</td>
						

					</tr>
					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;" id="living_room">
							<?php echo $living_room;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="toggle_row('living_room')">
								Living Room
							</button>
						</td>
						

					</tr>
					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;" id="kitchen">
							<?php echo $kitchen;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="toggle_row('kitchen')">
								Kitchen
							</button>
						</td>
						

					</tr>
					
					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;" id="bathroom1">
							<?php echo $bathroom1;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="toggle_row('bathroom1')">
								Bathroom1
							</button>
						</td>
						

					</tr>


					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;" id="bathroom2">
							<?php echo $bathroom2;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="toggle_row('bathroom2')">
								Bathroom2
							</button>
						</td>
						

					</tr>

					<tr class="row-1"> 
					
						<td colspan=2>
							<hr>
						</td>
								


					</tr>

					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;" id="shutter">
							<?php echo $shutter;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;background:#5A009B;color:#fff;"   class="input-0000" onclick="toggle_row('shutter')">
								System
							</button>
						</td>
						

					</tr>


					<tr class="row-1"> 
					
						<td colspan=2>
							<hr>
						</td>
								


					</tr>
					

					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;width:205px;">
							<?php echo $found_gas;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="input-0000">
								GAS
							</button>
						</td>
						

					</tr>
					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;width:205px;">
							<?php echo $found_motion;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="input-0000">
								MOTION
							</button>
						</td>
						

					</tr>
					

					
					<tr>
					
						<td align="middle">
							<span style="float:center;width:205px;">
							<?php echo $humidity_val;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="input-0000">
								HUMIDITY
							</button>
						</td>
						

					</tr>
					<tr class="row-1"> 
					
						<td align="middle">
							<span style="float:center;width:205px;">
							<?php echo $temperture_val;?>
							</span>
						</td>
								
						<td align="middle">
							<button style="float:center;width:205px;"   class="input-0000">
								TEMPERTURE
							</button>
						</td>
						

					</tr>
				</table>
				
		
		
		


		


