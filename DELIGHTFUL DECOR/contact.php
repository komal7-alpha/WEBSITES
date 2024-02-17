<?php
include('dbconnect.php');
function reg_in()
{
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$fd = $_POST['feed'];
	
	if(mysql_query("INSERT INTO `contacts` (`Name`,`Email`,`Mobile`,`Feedback`) "))
	{
		header('Location: "C:\xampp\htdocs\DelightfulDecor\contact.html"');
		
	}
	else
		echo mysql_error();
	}
}
if(isset($_POST['submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'Not contact';
?>