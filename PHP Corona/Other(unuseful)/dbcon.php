<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
	?>
	<script type="text/javascript">
		alert("connection successful");
	</script>
	<?php
} else {
	?>
	<script type="text/javascript">
		alert("connection unsuccessful");
	</script>
	<?php
}

?>
