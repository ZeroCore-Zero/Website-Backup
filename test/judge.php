<?php
require "../html/head.php";

if ($_POST["username"] == "php" && $_POST["password"] == "php")
	{
		header("location:php.php");
	}
	
if ($_POST["username"] == "hu" && $_POST["password"] == "hu")
	{
		header("location:picture");	
	}

if ($_POST["username"] == "file" && $_POST["password"] == "file")
	{
		header("location:file");	
	}
	
else
	{
		$con = mysql_connect("localhost:3306","root","zero-mysql");
		if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

		mysql_select_db("210" , $con);

		$account = mysql_query("select account from 210");
		$password = mysql_query("select password from 210");
	}

require "../html/foot.php";
?>