<?php
session_start();
if (isset($_SESSION['name'])) {
	//session destroy after logout
	session_destroy();
	//then redirect to index page
	header("location:index.php");
}
?>