<?php
session_start();
include "inside/config.php";
if(!isset($_SESSION['ID'])){
	header("location:login.php");
}
if(isset($_POST['submit']))
{
	$product_name=$_POST["pname"];
	$price=$_POST["price"];
	$desc=$_POST["desc"];
	$product_condition=$_POST["pco"];
	$photo_path="tfm_product_pics/";
	$photo=$_FILES['pphoto']["name"];
	$cont=$_POST["seller"];
	$user=$_SESSION['ID'];
	if ($cont >= 10) {
    // Insert the input value into the database
	$image=$photo_path.$photo; 
		$query=mysqli_query($conn, "INSERT INTO products VALUES(0,'$product_name','$price','$desc','$product_condition','$cont','$photo','$user')");
		if($query){
			move_uploaded_file($_FILES["pphoto"]["tmp_name"], $image);
			echo "<script>alert('Upload Successful...'); location.href='tfm_home.php';</script>";
		}
		else{
			echo"<script>alert(Sorry, problem detected!);</script>";
		}
}
} else {
}

		
?>
<head>
	<title>
		ttu free market.
	</title>
</h3>
<style>
.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 50px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			 justify-content: center;
    align-items: center;
	  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
		}
h3{
	
}
		</style>
		</head>
<body id="stationery">
<div class="container">
 <img src="logs.png" alt="Logo" width="250px" height="100px" >
<form action="product.php" method="post" enctype="multipart/form-data">
	<table width = 80%>
		<tr>
			<td>
				Product Namee:
			</td>
			<td>
				<input type="text" name="pname" required="">
			</td>
		</tr>
		<tr>
			<td>
				Price:
			</td>
			<td>
				<input type="text" name="price" required="">
			</td>
		</tr>
		<tr><td>
		Description
		</td>
		<td><textarea name="desc" placeholder="Product description..."></textarea></td></tr>
		<tr>
			<td>
				Product Condition:
			</td>
			<td>
				<select name="pco">
					<option value="">
						select product condition...
					</option>
					<option value="New"> 
						new
					</option>
					<option value="Second Hand"> 
						second hand
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Product Photo:
			</td>
			<td>
				<input type="file" name="pphoto">
			</td>
		</tr>
		<tr>
			<td>
				Contact:
			</td>
			<td>
				<input type="text" name="seller" required="" min="10">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" name="submit" value="submit">
					submit
				</button>
			</td>
		</tr>
	</table>
</form>
<div>