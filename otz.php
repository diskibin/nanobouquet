<?php
$dbc = mysqli_connect('localhost', 'u0566924_ds', 'Gfhjkm111222', 'u0566924_nanobouquetds');
$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
$phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
$commentary = mysqli_real_escape_string($dbc, trim($_POST['commentary']));
$query = "INSERT INTO `about` (Name, Phone, Commentary) VALUES ('$name', '$phone', '$commentary')";
mysqli_query($dbc, $query);
mysqli_close($dbc);
exit();		
?>
