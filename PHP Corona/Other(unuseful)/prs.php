

<?php
include 'dbcon.php';
if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$symp = $_POST['coronasym'];
	$message = $_POST['message'];

	$chk = ""

	foreach($symp as $chk1) {
		$chk .= $chk1.",";
	}

	$insertion = " insert into coronacase(Name, Email, Phone, Symptoms, Message) values('$name', '$email', '$phone', '$chk', '$message') ";

	$query = mysqli_query($con, $insertion)




?>