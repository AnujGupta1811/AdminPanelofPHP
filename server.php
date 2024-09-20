<?php
	$connect=mysqli_connect("localhost","root","","mydb2")or die("Connection Failed");
	if(!empty($_POST['save']))
	{
		$email=$_POST['em'];
		$password=$_POST['pw'];
		$email=filter_var($email,FILTER_SANITIZE_EMAIL);
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$query="select * from login where username='$email' and password='$password' ";
			$result=mysqli_query($connect,$query);
			$count=mysqli_num_rows($result);
			if($count>0)
			{
				echo "Login Successful";
			}
			else
			{
				echo "Login Failed";
			}
		}
		else
		{
			echo "Email Format is not Valid";
		}
	}
?>

<form method="post">
	Enter Email<input type="text" name="em"/></br>
	Enter Password<input type="password" name="pw"/></br>
	<input type="submit" name="save" value="Login"/></br>
</form>