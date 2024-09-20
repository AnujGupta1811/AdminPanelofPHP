<?php
	include('common/connection.php');
	include('objectclasses.php');
	$ob=new admin();
	if(!empty($_POST['save']))
	{
		$ob->changepass();
	}
?>
<html>
	<head>
		<title>admini</title>
		<link rel="stylesheet" href="css/style.css" /> 
	</head>
	<body>
		<?php
			include('common/heder.php');
		?>
		<!-- maincontainer2 goes here -->
				
	<div class="maincontainer2">
		<!-- section goes here -->
			<div class="section">
				<ul class="leftmenu">
				<li><a href="pagesumary.php">Page Summary</a></li>
					<li><a href="addpage.php">Add Page</a></li>
					<li><a href="catagorysumary.php">Catagory Summary</a></li>
					<li><a href="catagoryadd.php">Add Catagory</a></li>
					<li><a href="productsummary.php">Product Summary</a></li>
					<li><a href="productadd.php">Add Product</a></li>
					<li><a href="changepass.php">Change Password</a></li>
					<li><b>Login Information</b><br/>Username:admin<br/>Email:example@domain.com</li>
				</ul>
			</div>
		<!-- section ends here -->

				<!-- section1 goes here -->
					<div class="section1">
						<p class="pm" >Change Password</p>
						<div class="rightmenu">
							<p class="ap">Change Password</p>
							<table class="logintable" style="width:800px; height:100px;">
							<form method="post" >
							
								<tr>
									<td>Enter Old Password*</td>
									<td><input type="text" name="old"/></td>
								</tr>
								<tr>
									<td>Enter New Password</td>
									<td><input type="text" name="new" />
								</tr>
								<tr>
									<td>Confirm New Password</td>
									<td><input name="cnewpass" type="text" />
								</tr>
							<tr><td><p class="buttons"><input class="button" type="submit" name="save" value="Save"/></td>
							<td><input class="button" type="button" value="Cancel"/></p></td>
							</tr>
							</table>
							</form>
						</div>
					</div>
				<!-- section1 ends here -->
			</div>
		<!-- maincontainer2 ends here -->
		<!-- maincontainer3 goes here -->
			<div class="maincontainer3">
			</div>
		<!-- maincontainer3 ends here -->
	</body>
</html>