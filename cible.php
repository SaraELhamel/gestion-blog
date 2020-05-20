<?php
$id_username = $_POST['id_username'];
$username = $_POST['username'];
$email = stripcslashes($email);
$post = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
?>
