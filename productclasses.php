<?php 
	class admin1
	{
		function show()
		{ 
			global $connect;
			$catid=$_POST['catname'];
			$pname=$_POST['pname'];
			$pdesc=mysqli_real_escape_string($connect,$_POST['pdesc']);
			$pprice=$_POST['pprice'];
			$pimagename=$_FILES['pimage']['name'];
			$ptemppath=$_FILES['pimage']['tmp_name'];
			$currtime = round(microtime(true) * 1000);
			$extarr=explode(".",$pimagename);
			$ext=$extarr[1];
			$fullfilename=$currtime.".".$ext;
			if (!empty($_POST['editid']))
			{
				$id=$_POST['editid'];
				$query="update product set pname='$pname',pdescription='$pdesc',pprice='$pprice',pimage='$fullfilename' where id='$id'";
			}
			else
			{
				$query="insert into product (category_id,pname,pdescription,pprice,pimage) value('$catid','$pname','$pdesc','$pprice','$fullfilename')";
			}
			if(mysqli_query($connect,$query))
			{
				move_uploaded_file($ptemppath,"uploadimages/".$fullfilename);
				?>
					<script>
						alert("Product Inserted");
					</script>
				<?php
			}
			else
			{
				?>
					<script>
						alert("Product Not Inserted");
					</script>
				<?php
			}
		}
		function edit1($id)
		{
			global $connect;
			$query="select * from product where id=$id";
			$result=mysqli_query($connect,$query);
			return mysqli_fetch_assoc($result);
		}
		function show1()
		{
			global $connect;
			$query="select p.*,c.catagoryname from product p, catagory c 
			where c.id=p.catagory_id";
			$result=mysqli_query($connect,$query);
			while($row=mysqli_fetch_assoc($result))
			{
				$data[]=$row;
			}
			return $data;
		}
		function showcat()
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
		function delete1()
		{
			global $connect;
			$id=$_GET['did'];
			$query="delete from product where id=$id";
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
?>