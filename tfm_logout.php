<?php
session_start();
		unset($_SESSION['NAME']);
		unset($_SESSION['EMAIL']);
		unset($_SESSION['PHONE_NO']);
		unset($_SESSION['USERNAME']);
		
		unset($_SESSION['ID']);
		echo"<script>alert('Youve Logged Out!!');location.href='index.php';</script>";
	?>