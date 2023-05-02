<?php
session_start();
include "inside/config.php";
if(isset($_SESSION['USERNAME'])){
	header("location:tfm_home.php");
}

if(isset($_POST['login']))
{
	
	$email=$_POST["email"];
	$password=md5($_POST["pswd"]);
	$result=mysqli_query($conn,"SELECT * FROM userss WHERE email='$email' and password='$password'");
	$user_check=mysqli_num_rows($result);
	if($user_check==1)
	{
		$row=mysqli_fetch_assoc($result);
		$_SESSION['NAME']=$row["name"];
		$_SESSION['EMAIL']=$row["email"];
		$_SESSION['PHONE']=$row["phone"];
		$_SESSION['ID']=$row["id"];

		echo"<script>alert('Login Successful!'); location.href='tfm_home.php';</script>";
	}
	else{
		echo"<script>alert('Login failed. Try again!');</script>";
	}
}
?>
<style>
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

<div>
<div class="login">
 <img src="logs.png" alt="Logo" width="250px" height="100px" >
	<form action="login.php" method="post" enctype="multipart/form-data">
		<h3>
			Sign in here...
		</h3>
		<table>
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
					Password:
				</td>
				<td>
					<input type="password" name="pswd" required="">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="login" value="login">
						login.
					</button>
				</td>	
			</tr>
		</table>
		<h3>
				new here?... click <a href="tfm_register.php"> here </a> to sign up.
		</h3>
		</div>
	</form>
