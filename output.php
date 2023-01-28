<h5 style="text-align: center;"><button><a href="logout.php">Logout</a></button></h5>
<?php
session_start();
if (isset($_SESSION['name'])) {
	echo "HELLO {".$_SESSION['name']."}";
}
else{
	header("location:index.php");
}

?>