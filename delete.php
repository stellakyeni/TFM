<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
if(isset($_POST['delete'])){
    // Get the ID of the record to be deleted
    $prod_id = $_POST['id'];

    // Build the SQL query
    $sql = "DELETE FROM products WHERE id = $prod_id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>