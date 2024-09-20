<?php
	include('common/connection.php');
	include('objectclasses.php');
	$ob=new admin();
	if(!empty($_POST['save']))
	{
		$ob->edit1();
	}
	if(!empty($_GET['eid']))
	{
		
		$r=$ob->eid($_GET['eid']);
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
						<p class="pm" >Page Manager</p>
						<div class="rightmenu">
							<p class="ap">Add Page</p>
							<table class="logintable">
							<form method="post" >
							<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']; ?>" />
								<tr>
									<td>Name*<input class="abc" name="name" 
									value="<?php if(!empty($r['username'])) echo $r['username'] ?>" type="text"/></td>
								</tr>
								<tr>
									<td><img class="image" src="images/opp.jpg"/><input class="text" name="content"
									value="<?php if(!empty($r['content'])) echo $r['content'] ?>" 
									type="text" /><p class="content">Content</p></td>
								</tr>
								
								<tr>
									<td>Status<?php if(!empty($r['status']) && $r['status']==1) { ?>
									<input checked type="checkbox" name="status"/>
									<?php } else { ?>
									<input type="checkbox" name="status"/>
									<?php } ?>
									 </td>
								</tr>
							</table>
							
							<p class="buttons"><input class="button" type="submit" name="save" value="Save"/>
							<input class="button" type="button" value="Cancel"/></p>
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