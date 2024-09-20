<?php
	include('common/connection.php');
	include('objectclasses.php');
	$ob=new admin();
	if(!empty($_POST['save']))
	{
		$ob->addcat();
	}
	if(!empty($_GET['eid']))
	{
		$ob->edit2();
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
						<p class="pm" >Catagory Manager</p>
						<div class="rightmenu">
							<p class="ap">Add Catagory</p>
							<table class="logintable" style="height:80px;">
							<form method="post" >
							<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']; ?>" />
								<tr>
									<td>Catagory Name<input class="abc" name="catname" 
									value="<?php if(!empty($r['catagoryname'])) echo $r['catagoryname'] ?>" type="text"/></td>
								</tr>
							<tr><td><p class="buttons"><input class="button" type="submit" name="save" value="Save"/>
							<input class="button" type="button" value="Cancel"/></p></td></tr>
							</form>
							</table>
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