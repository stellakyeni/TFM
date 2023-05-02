<?php
include "inside/tfm_header.php";
include "inside/tfm_menu.php";

if(isset($_REQUEST['userid'])){
	$id=$_REQUEST['userid'];
		$query=mysqli_query($conn,"SELECT FROM userss WHERE id=$id");
	if($query){
		echo "<script> alert('Success...'); </script>";
	}
	else{
		echo "<script> alert('ERROR...'); </script>";
	}
}
?>
<h3>
	Account info...
</h3>
<body id="account">
<table>
	<tr>
		<th>
			#.
		</th>
		<th>
			PROFILE PIC.
		</th>
		<th>
			NAME.
		</th>
		<th>
			EMAIL.
		</th>
		<th>
			PHONE NO.
		</th>
		<th>
			#.
		</th>
	</tr>
	<?php 
	$query = mysqli_query($conn,"SELECT * FROM userss");
	$i=1;
	while ($row=mysqli_fetch_array($query)) {
		// code...
		?>
		<tr>
			<td>
				<?php //echo $i; ?>
			</td>
			<td>
				<img src="<?php echo $row["photo"]; ?>" width=40px>
			</td>
			<td>
				<?php echo $row["name"]; ?>
			</td>
			<td>
				<?php echo $row["email"]; ?>
			</td>
			<td>
				<?php echo $row["phone"]; ?>
			</td>
			<td>
				<a href="">
					edit
				</a><br>
				<a href="">
					delete
				</a>
			</td>
		</tr>
		<?php
		$i++;
	}
	?>
</table>
<h5>
	selling a product?... select category here to upload.
</h5>
<a href="product.php">electronics</a><br>
