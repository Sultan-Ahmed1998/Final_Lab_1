<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<h2>User Form</h2>




<?php
$nameerr=$emailerr=$gendererr=$passworderr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$nameerr="* Name requirment error!";
	}
	else
	{	
		$nameerr=$_POST["name"];	
	}
	if(empty($_POST["email"]))
	{
		$emailerr="* Email requirment error!";
	}
	else
	{	
		$emailerr=$_POST["email"];	
	}
	if(empty($_POST["gender"]))
	{
		$gendererr="* Gender requirment error!";
	}
	else
	{	
		$gendererr=$_POST["gender"];	
	}
	if(empty($_POST["password"]))
	{
		$passworderr="* password requirment error!";
	}
	else
	{	
		$passworderr=$_POST["password"];	
	}
	
	
}

?>

<form action="regis_pic.php" method="post">
	
	<b>Name:</b>
	<input type="text" name="name">
	<span style="color:black"><?php echo $nameerr; ?></span><br><br>
	
	<b>Email:</b>
	<input type="text" name="email">
	<span style="color:black"><?php echo $emailerr; ?></span><br><br>
	
	<b>Gender</b>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Other">Other
	<span style="color:black"><?php echo $gendererr; ?></span>
	<br><br>
	
	<b>Password:</b>
	<input type="password" name="password">
	<span style="color:black"><?php echo $passworderr; ?></span><br><br>

	
	
	<input type="submit" value="submit">
	

</form>


</body>
</html>
