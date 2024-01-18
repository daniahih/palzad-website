<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Controller By RPI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
 


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animate/animate.css">
<!--===============================================================================================-->	

    <script src="js/jquery-2.2.4.min.js"></script>
    
    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	if(isset($_POST['username']) && isset($_POST['password']) && ($_POST['username']=="admin" && $_POST['password']=="admin"))
	{
		include 'config.php';
	?>
	
	<script>
	function send_msg()
	{
			$.ajax({
			type:"POST",
			url: 'ajax_for_send_msg.php',
			data:{'lcd_msg':$('#lcd_msg').val()},
			success: function(data) {
			
				
			
			}
		});

	
	}
	
	function toggle_row(value_type)
	{
			$.ajax({

			url: 'ajax_for_update_row.php?value_type='+value_type,
			success: function(data) {
			
				if(value_type!='shutter')
				{
					if(data.trim()==0)$("#"+value_type).text("OFF");
					else $("#"+value_type).text("ON");
				}
				else
				{
					if(data.trim()==0)$("#"+value_type).text("CLOSE");

					else $("#"+value_type).text("OPEN");

				}
			
			}
		});

	
	}
	
	function all_content()
	{
			$.ajax({
			url: 'ajax_for_all_content.php',
			success: function(data) {
				$("#div_all_content").html(data);
			
			}
		});
	
	}
	
	$( document ).ready(function() 
	{
		setInterval(all_content, 2000);

	});
	
	</script>
	
<div class="container-home" style="background-image: url('images/bg-00.jpg');background-color: rgba(0,0,0,0.65);">
	<div align="left" class="wrap-login100 p-t-30 p-b-50" style="width:100%;">
			
		<div align="middle" style="width:90%;min-width:350px;">
				<span class="login100-form-title p-b-41" style="width:90%;font-size:4em;float:center;">
					Smart <font style="color:yellow;font-weight:bold">Home</font> <br> RPI
				</span>
				
				<img src="images/arrow_down.gif" width="90px" style="cursor:pointer;" onclick="var elmnt =document.getElementById('asdfgh');elmnt.scrollIntoView({ behavior: 'smooth', block: 'center' });" /> 
		</div>
		
					
	</div>
</div>
	
	
		<div class="container-home" style="background-image: url('images/bg-01.jpg');background-color: rgba(0,0,0,1);" id="asdfgh">
			<div align="left" class="wrap-login100 p-t-30 p-b-50" style="width:100%;">
				
			
			
				<div align="middle" style="width:50%;float:left;min-width:350px;" id="div_all_content">
				
				</div>
				
				<div align="middle" style="width:50%;float:left;min-width:350px;">
					<table class="login100-form validate-form p-b-33 p-t-5 "  style="float:center;width:90%;margin-top:90px;" >
						<tr class="row-1"> 
						
							<?php
								$sql = " SELECT   value_amount FROM `notfiactions` WHERE value_type='lcd_msg' ";
								$query = mysqli_query($connect, $sql);

								$lcd_msg=mysqli_fetch_array($query)['value_amount'];
							?>
									
						
							<td align="middle">
								<input type="text" class="input100" id="lcd_msg" style="border:1px solid #944;text-align:center;" placeholder="LCD" maxlength="32" value="<?php echo $lcd_msg;?>"/>
							</td>
						</tr>
						
						<tr class="row-1"> 
						

									
							<td colspan=2 align="middle" style="padding-top:50px;">
								<button style="float:center;width:205px;"   class="login100-form-btn1" onclick="send_msg()">
									Send Message
								</button>
							</td>
							

						

						</tr>

					</table>
				

				</div>
				
				<div align="middle" style="width:50%;float:left;min-width:350px;">
					<table class="login100-form validate-form p-b-33 p-t-5 "  style="float:center;width:90%;margin-top:90px;" action="" method="POST">

						<tr class="row-1"> 
						

									
							<td colspan=2 align="middle" style="padding-top:50px;">
								<button style="float:center;width:205px;"   class="login100-form-btn" onclick="window.location.href='index.php';">
									LOGOUT
								</button>
							</td>
							

						</tr>

					</table>
				</div>
			
			</div>
		</div>
		
	</div>
	
	
	<?php
	
	exit;
	} 
	
	
	
	
	?>
	
	
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Smart <font style="color:yellow;font-weight:bold">Home</font> RPI
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit"  class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	


</body>
</html>
