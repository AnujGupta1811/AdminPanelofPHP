<?php
	include('common/connection.php');
	include('objectclasses.php');
	$ob=new admin();
	if(!empty($_POST['save']))
	{
		$ob->show();
	}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
	
		<!--main container goes here-->
		<div class="maincontainer">
			<img src="images/img.jpeg">
		</div>
		<!--main container ends here-->
		<!--main container1 goes here-->
		<div class="maincontainer1">
			<!--inner container1 goes here-->
			<div class="innercontainer1">
				<p class="date">8June,2023</p>
			</div>
			<!--inner container1 ends here-->
		</div>
		<!--main container1 ends here-->
		<!--main container2 goes here-->
			<div class="maincontainer2 float:left">
			<form method="post">
				<table class="logintable">
					<tr>
						<th colspan="2">Login<i class="fa-solid fa-right-to-bracket"></i> <th>
					</tr>
					<tr>
						<td><div style="float:left;padding-right:10px"><i class="fa-solid fa-user"></i> </div>Username</td>
						<td><input type="text" name="un" /></td>
					</tr>
					<tr>
						<td><div style="float:left;padding-right:10px"><i class="fa-solid fa-key"></i></div>Password</td>
						<td><input type="password" name="pw" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input style="margin-left:50px; margin-top:20px;padding:5px;width:80px;background-color:darkblue;color:white;" type="submit" name="save" value="Login" /></td>
					</tr>
				</table>
				</form>
			</div>
		<!--main container2 ends here-->
		<!--main container3 starts here-->
		<div class="footer">
		</div>
		<!--main container3 ends here-->
	</body>
</html>
