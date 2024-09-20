<?php
	include('common/connection.php');
	include('productclasses.php');
	$ob=new admin1();
	if(!empty($_POST['save']))
	{
		$ob->show();
	}
	if(!empty($_GET['eid']))
	{
		$r=$ob->edit1($_GET['eid']);
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
						<p class="pm" >Product Manager</p>
						<div class="rightmenu">
							<p class="ap">Add Product</p>
							<table class="logintable" style="height:80px;">
							<form method="post" enctype="multipart/form-data">
							<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']; ?>" />
							<tr>
								<td>Select Category
									<select name="catname">
										<option>&lt;Select Category&gt;</option>
										<?php 
											$results=$ob->showcat();
											foreach($results as $row)
											{
										?>
											<option value="<?php echo $row['id']; ?>" <?php if (!empty($r['catagory_id']) && $r['catagory_id'] == $row['id']) echo 'selected'; ?>>
											<?php echo $row['catagoryname']; ?>
											</option>
											<?php } ?>
									</select>
								</td>
							</tr>
								<tr>
									<td>Product Name<input class="abc" name="pname" 
									type="text" value="<?php if(!empty($r['pname'])) echo $r['pname'] ?>"/></td>
								</tr>
								<tr>
									<td>Product Description<input class="abc" name="pdesc" 
									type="text" value="<?php if(!empty($r['pdescription'])) echo $r['pdescription'] ?>"/></td>
								</tr>
								<tr>
									<td>Product Price<input class="abc" name="pprice" 
									type="text" value="<?php if(!empty($r['pprice'])) echo $r['pprice'] ?>"/></td>
								</tr>
								<tr>
									<td>Product Image<input class="abc" name="pimage" 
									type="file" /></td>
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