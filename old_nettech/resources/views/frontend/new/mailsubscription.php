<?php
include('../include/connection.php') ;

$email=$_POST['email'];
$name=$_POST['name'];
$Query="Select * from Newsletter where email='".$email."'";
$result=mysqli_query($conn,$Query);
$count=mysqli_num_rows($result);
if($count>0)
{
	echo "no";
}
else
{
	if($count==0)
	{
	$Query1="insert into Newsletter(email,name) values('$email','$name')";
	if(mysqli_query($conn,$Query1))
	{
		echo "yes";
	}
    }
}

?>