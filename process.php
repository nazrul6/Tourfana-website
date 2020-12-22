<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $pickup_location = $_POST['pickup_location'];
	 $destination_location = $_POST['destination_location'];
	 $check_in = $_POST['check_in'];
     $check_out = $_POST['check_out'];
     $duration = $_POST['duration'];
     $members = $_POST['members'];
	 $sql = "INSERT INTO destination_book_table (pickup_location,destination_location,check_in,check_out,duration,members)
	 VALUES ('$pickup_location','$destination_location','$check_in','$check_out','$duration','$members')";
	 if (mysqli_query($conn, $sql)) {
		echo "New book created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<body>
<p><a href="index.html">Click Here...</a></p>
</body>
</html>