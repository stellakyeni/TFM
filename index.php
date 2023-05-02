<?php
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
			left:150px;
		}
header {
  background-color: white;
  height: 50px;
}
.button {
	border-radius: 15px;
  border: none;
  color: white;
  padding: 10px 10px;
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
  margin: 0 10px;

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
    justify-content: center;
    align-items: center;
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
}
	</style>
  </head>
    <main>
	  <div class="search">
	   <a href="login.php"> <button class="button button1">Login</button></a>
	     <a href="tfm_register.php"> <button class="button button1">Sign In</button></a>
<form method="post" action="search.php">
    <input type="text" name="search" placeholder="What are you looking for?">
    <input type="submit" value="Search">
</form>
 </div>
<div class="center">
      <img src="logs.png" alt="Logo" width="250px" height="100px" >
	  </div>
<body>
	 
	  <div class="container">
      <div class="grid-container">
   <?php 
   
	$query = mysqli_query($conn,"SELECT * FROM products ORDER BY id DESC  LIMIT 30");
	$i=1;
	while ($row=mysqli_fetch_array($query)) {
    $item_price = $row["price"];
    $item_image = $row["photo"];
	$item_link = $row["id"];
	$item_name= $row["name"];

    // Output the item card HTML
    echo '<div class="container">';
	echo '<a href="login.php"><img src="tfm_product_pics/' . $item_image . '"></a>';
	echo'<p>' . $item_name . '</p>';
    echo '<p>Kshs ' . $item_price . '</p>';
    echo '</div>';
	}?>
	 
	</div>
      </div>
    </main>
  </body>
   <?php
include "footer.php";
?>