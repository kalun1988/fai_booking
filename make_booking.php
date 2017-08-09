<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<?php 
	/* 
		make booking, AJAX POST passing timeslot id, student id  to api/set_booking.php
	*/
	?>
	I am booking id <?php echo $_GET['id']; ?>
	Student ID: <input type="text" id="student_id">
	<button>Book</button>
</form>
</body>
</html>