<?php
session_start();
include "inside/config.php";
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
			max-width: 1050px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin-bottom: 5%;
		}
header {
  background-color: white;
  height: 50px;
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
    margin: 0 10px;
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
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}
h1 {
  text-align: center;
  padding : 20px;
}
h3 {
  text-align: center;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  justify-items: center;
  grid-gap: 20px;
  max-width: 250px;
  
}
.item-card {
  border: 1px solid #ccc;
  border-radius: 5px;
  text-align: center;
  max-width: 200px;
}
.container img {
  max-width: 150px;
  height: 150px;
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
<div class= "logo">
      <img src="logs.png" alt="Logo" width="250px" height="100px" >
	  </div>
	  </div>
<body>
	 
	  <div class="container">
      <div class="grid-container">
   <?php 
   $user=$_SESSION['ID'];
	$query = mysqli_query($conn,"SELECT * FROM products WHERE user_id = $user ");
	$i=1;
	while ($row=mysqli_fetch_array($query)) {
    $item_price = $row["price"];
    $item_image = $row["photo"];
	$item_link = $row["id"];
	$item_name= $row["name"];

    // Output the item card HTML
    echo '<div class="container">';
	echo '<a href="productdetails.php?product=' . $item_link .'"><img src="tfm_product_pics/' . $item_image . '"></a>';
	echo'<p>' . $item_name . '</p>';
    echo
	'<form method="POST">
    <input type="hidden" name="user_id" value="1"><!-- Replace with the ID of the record to be deleted -->
    <button class="button button1" button type="submit" name="delete">Delete</button>
</form>';
 echo '</div>';
  if(isset($_POST['delete'])){
	$query = mysqli_query($conn,"DELETE  FROM products WHERE id = '$item_link' ");

    // Execute the query
      if($query){
        echo "<script>alert('Deleted Successfully...'); location.href='myproducts.php'</script>";
    } else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
   }
	
?>
	 <?
	
?>
	</div>
      </div>
    </main>
  </body>
  <?php
include "footer.php";
?>