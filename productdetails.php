<?php
session_start();
include "inside/config.php";
if(!isset($_SESSION['ID'])){
	header("location:login.php");
}
?><head>
    <title>TTU MARKET</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body {
  font-family: Arial, sans-serif;
  margin: 0;
  background-color: #DADBDD;
}
.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
.button {
	border-radius: 15px;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
  float: left;
}
.button1 {
  background-color: orange; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
		h1 {
			font-size: 32px;
			text-align: center;
			margin-bottom: 20px;
		}
		.product {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.product-image {
			flex: 0 0 45%;
			max-width: 45%;
			margin-bottom: 20px;
		}
		.product-image img {
			max-width: 100%;
		}
		.product-info {
			flex: 0 0 50%;
			max-width: 50%;
		}
		.product-title {
			font-size: 24px;
			margin-bottom: 10px;
		}
		.product-description {
			margin-bottom: 20px;
		}
		.product-price {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		.product-button {
			display: block;
			background-color: #4CAF50;
			color: #fff;
			text-align: center;
			padding: 10px;
			border-radius: 5px;
			text-decoration: none;
			transition: background-color 0.3s;
		}
		.product-button:hover {
			background-color: #3e8e41;
		}
 .center {
    display: flex;
	padding : 50px;
	 background-color: white;
  }
 .search {
	 position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
	width: 100%;
	 background-color: #F8F8FF;
	
  }
  .dropbtn {
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
.logo{
margin-left:39%;
}
	</style>
  </head>
    <main>
	  <div class="search">
	   <a href="product.php"> <button class="button button1">Sell</button></a>
	    <a href="tfm_home.php"><img src="home.png" alt="Logo" width="40px" height="40px" ></a>
<form method="post" action="search.php">
    <input type="text" name="search" placeholder="What are you looking for?">
    <input type="submit" value="Search">
</form>
<div class="dropdown">
  <img src="cont.png" alt="Logo" width="40px" height="40px" class="dropbtn">
  <div class="dropdown-content">
    <a href="myproducts.php">My products</a>
    <a href="tfm_logout.php">Logout</a>
  </div>
</div>
 </div>
<div class="center">
	  </div>
<body>
	<div class="container">
		<h1>Product Details</h1>
				 <?php 
$id=$_REQUEST['product'];
	$query = mysqli_query($conn,"SELECT * FROM products WHERE id='$id'");
	$row=mysqli_fetch_array($query);{
	?>
		<div class="product">
			<div class="product-image">
	<img src="tfm_product_pics/<?php echo $row["photo"]; ?>">
			<div class="product-info">
				<h2 class="product-title"> <?php echo $row ["name"]?></h2>
				<p><?php echo $row ["descrip"]?></p>
				<p> Condition:<?php echo $row ["cond"]?> </p>
				<p><?php echo $row ["price"]?> KES </p>
				<p>Seller Contact: <?php echo $row ["seller"]?></p>
					<a href="tfm_home.php" class="product-button"  >Back</a>
		
		</script>
	<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>