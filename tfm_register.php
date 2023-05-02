<?php
include "inside/config.php";
if(isset($_POST['register']))
{
	$name=$_POST["fname"];
	$email=$_POST["email"];
	$phoneno=$_POST["pno"];
	$password=md5($_POST["pswd"]);


	$result=mysqli_query($conn,"SELECT * FROM userss WHERE email='$email'");
	$email_check=mysqli_num_rows($result);
	if($email_check==0)
	{

		$image=$photo_path.$photo;
		$query=mysqli_query($conn, "INSERT INTO userss VALUES(0,'$name','$email',$phoneno,'$password')");
		if($query){
			move_uploaded_file($_FILES['photo']['tmp_name'],$image);
			echo "<script>alert('Registration Successful...'); location.href='login.php'</script>";
		}
		else{
			echo"<script>alert('Sorry, problem detected!');</script>";
		}
	}
	else{
		echo"<script>alert('Sorry. Email already exists!');</script>";
	}
}
?><style>
.login {
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
</style>
<body id="register">


<div class="login">
 <img src="logs.png" alt="Logo" width="250px" height="100px" >
<h3>
	enter details here to register...
</h3>
<form action="tfm_register.php" method="post" enctype="multipart/form-data">
	<table width = 80%>
		<tr>
			<td>
				Full Name:
			</td>
			<td>
				<input type="text" name="fname" required="">
			</td>
		</tr>
		<tr>
			<td>
				Email:
			</td>
			<td>
				<input type="email" name="email" required="">
			</td>
		</tr>
		<tr>
			<td>
				Phone Number:
			</td>
			<td>
				<input type="text" name="pno" required="">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="Password" name="pswd" required="">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" name="register" value="register">
					Register
				</button>
			</td>
		</tr>
	</table>
	</div>
</form>
