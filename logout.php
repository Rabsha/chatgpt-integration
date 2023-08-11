<?php
	include("inc/db.php");
	if(isset($_SESSION["UserId"]))
    {
		session_destroy();
		header("location:login.php");
	}
?>