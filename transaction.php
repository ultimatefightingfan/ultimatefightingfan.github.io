<?php
	include_once 'dbh.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile_number = $_POST['mobile_number'];
	$creditcard_number = $_POST['creditcard_number'];
	$movie = $_POST['movie'];
	$count = $_POST['count'];
	$total = $_POST['total'];

	$sql = "INSERT INTO ticket_sales (name, email, mobile_number, creditcard_number, selected_fight, number_of_seat, total_price) 
VALUES ('$name', '$email', '$mobile_number', '$creditcard_number', '$movie', '$count' ,'$total');";
	mysqli_query($conn, $sql);
	header("Location: seats.php");

?>