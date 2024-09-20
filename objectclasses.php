<?php  
	class admin
	{
		function show()
		{
			if(!empty($_POST['save']))
			{
				global $connect;
				$username=$_POST['un'];
				$pass=$_POST['pw'];
				$query="select * from login where username='$username' and password='$pass' ";
				$result=mysqli_query($connect, $query);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					header('location:addpage.php');
				}
				else
				{
					echo "login Failed";
				}
			}
		}
		function show1()
		{
			global $connect;
			if(!empty($_GET['s']))
			{
				$search=$_GET['s'];
				$query="select * from page where username like '%$search%' ";
			}
			else
			{
				$query="select * from page";
			}
			$result=mysqli_query($connect,$query);
			while($row = mysqli_fetch_assoc($result))
			{
				$data[]=$row;
			}
			return($data);
		}
		function delete1()
		{
			global $connect;
			if(!empty($_GET['did']))
			{
				$id=$_GET['did'];
				$query="delete from page where id=$id";
				if(mysqli_query($connect,$query))
				{
					?>
						<script>
							alert("Record Deleted");
						</script>
					<?php
				}
				else
				{
					?>
						<script>
							alert("Record Not Deleted");
						</script>
					<?php
				}
			}
		}
		function edit1()
		{
			global $connect; 
			if(!empty($_POST['save']))
			{
				$name=$_POST['name'];
				$status="";
				$content=$_POST['content'];
				if(isset($_POST['status']))
				{
					$status=$_POST['status'];
				}
				if($status=="on")
				{
					$status=1;
				}
				else
				{
					$status=0;
				}
				if(!empty($_POST['editid']))
				{
					$id=$_POST['editid'];
					$query="update page set username='$name',content='$content',status='$status' where id=$id";
				}
				else
				{
					$query="insert into page(username,content,status) values('$name','$content','$status')";
				}
				if(mysqli_query($connect,$query))
				{
					echo "Record Inserted";
				}
				else
				{
					echo "Record Not Inserted";
				}
			}
		}
		function eid($id)
		{
			global $connect;
			$query="select * from page where id=$id";
			$result=mysqli_query($connect,$query);
			return mysqli_fetch_assoc($result);
		}
		function addcat()
		{
			global $connect;
			if(!empty($_POST['save']))
			{
				$cname=$_POST['catname'];
				if(!empty($_POST['editid']))
				{
					$id=$_POST['editid'];
					$query="update catagory set catagoryname='$cname' where id='$id'";
				}
				else{
					$query="insert into catagory(catagoryname) values('$cname')";
				}
				if(mysqli_query($connect,$query))
				{
					?>
						<script>
							alert("Catagory Inserted");
						</script>
					<?php
				}
				else
				{
					?>
						<script>
							alert("Catagory Not Inserted");
						</script>
					<?php
				}
			}
		}
		function show2()
		{
			global $connect;
			$query="select * from catagory";
			$result=mysqli_query($connect,$query);
			while($row=mysqli_fetch_assoc($result))
			{
				$data[]=$row;
			}
			return $data;
		}
		function delete2()
		{
			global $connect;
			$id=$_GET['did'];
			$query="delete from catagory where id=$id";
			if(mysqli_query($connect,$query))
			{
				?>
					<script>
						alert("Record Deleted");
					</script>
				<?php
			}
			else
			{
				?>
					<script>
						alert("Record Not Deleted");
					</script>
				<?php
			}
		}
		function edit2()
		{
			global $connect,$r;
			$id=$_GET['eid'];
			$query="select * from catagory where id=$id";
			$result=mysqli_query($connect,$query);
			$r=mysqli_fetch_assoc($result);
		}
		function changepass()
		{
			global $connect;
			$op=$_POST['old'];
			$np=$_POST['new'];
			$cnp=$_POST['cnewpass'];
			if($np==$cnp)
			{
				$query="select * from login where password='$op'";
				$result=mysqli_query($connect,$query);
				$count=mysqli_num_rows($result);
				if($count>0)
				{
					$query="update login set password='$np'";
					mysqli_query($connect,$query);
					echo "Password Updated Successfully";
				}
				else
				{
					echo "Old Password Does Not Match";
				}
			}
			else
			{
				echo "New Password & Confirm New password does not match";
			}
		}
	}
?>