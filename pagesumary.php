<?php
	include('common/connection.php');
	include('objectclasses.php');
	$ob=new admin();
	if(!empty($_GET['did']))
	{
		$ob->delete1();
	}
?>
<html>
	<head>
		<title>Bussiness</title>
		<link rel="stylesheet" href="css/style4.css"/>
	</head>
	<!-- main container goes here -->
		<div class="maincontainer">
			<img src="images/pht.jpg"/>
			<input class="button1" type="button" value="Logout"/>
		</div>
	<!-- main container ends here -->
	<!-- container goes here -->
		<div class="container">
			<p class="date">Friday, 8th June 2012</p>
		</div>
	<!-- container ends here -->
	<!-- maincontainer1 goes here -->
		<div class="maincontainer1">
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
		<div class="section1">
			<h3 class="pm">Page Manager</h3>
			<p>This Section displays the list of Pages</p>
			<p class="clickhere">click here to <a href="">create</a> New Page</p>
			<form>
			<table class="logintable2">	
				<tr>
					<td colspan="2">Search</td>
				</tr>
				<tr>
					<td><b>Search by Page Name:</b></td>
					<td><input type="text" name="s" />
					<input class="button2" type="submit" value="Search" /></td>
					</tr>
			</table>
			</form>
		<p class="p">Page 1 of 2, showing 10 records out of 13 total, 
		starting on record 1, ending on record 10 </p>
		<table class="logintable3">
		<tr>
				<th>Id</th>
				<th>Page Name</th>
				<th>No. of Sub Page</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		<?php 
			$results=$ob->show1();
			foreach($results as $row)
			{
		?>
			
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['content'] ?></td>
				<td><?php echo $row['status'] ?></td>
				<td><a href="addpage.php?eid=<?php echo $row['id']?>">
				<img src="images/pht1.jpg"/></a></td>
				<td><a href="pagesumary.php?did=<?php echo $row['id']?>">
				Delete</a></td>
			</tr>
		<?php } ?>
			<tr>
				<td colspan="6"><< previous|1| 2 next>><input class="button3" style="margin-left:650px;" type="button" value="delete" /></td>
			</tr>
		</table>
		</div>
		</div>
	<!-- maincontainer1 ends here -->
	<!-- maincontainer2 goes here -->
		<div style="clear:both;" class="maincontainer2">
		</div>
	<!-- maincontainer2 ends here -->
	<body>
	</body>
</html>