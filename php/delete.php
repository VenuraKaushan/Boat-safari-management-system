<?php
include_once 'harshadatabase.php';
$sql = 'DELETE FROM customer_list WHERE id="' . $_GET['id'] . "'";
if (mysqli_query($conn, $sql)) {
	
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>