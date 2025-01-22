<?php 
include('../include/connection.php');

//include("include/connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pdetails=$_POST['message'];
//$page = $_POST['pagename'];

$sql="insert into aspformdetail(name,email,mobile,pdetails) values('$name','$email','$mobile','$pdetails')";
if(mysqli_query($conn,$sql))
{

echo "Success";

exit();

/*	$body = '<table>
				<tr>
					<td>Name: </td>
					<td>'.$name.'</td>
				</tr>
				<tr>
					<td>Email: </td>
					<td>'.$email.'</td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td>'.$mobile.'</td>
				</tr>
				<tr>
					<td>Page Name: </td>
					<td>'.$page.'</td>
				</tr>
				<tr>
					<td>Description: </td>
					<td>'.$pdetails.'</td>
				</tr>
			</table>';

	$to_email = 'info@nettechnocrats.com';
	$MailSubject = 'CONTACT US';

	$New_Line = "\n";
    $headers = "MIME-Version: 1.0" .$New_Line;
    $headers .= "Content-type: text/html; charset=iso-8859-1" .$New_Line;
    $headers .= "Content-Transfer-Encode: 7bit " .$New_Line;
    $headers .= "From: $email ".$New_Line;

    $headers .= "X-Mailer: PHP " .$New_Line; 
    $headers .= "Return-Path: < $to_email > " .$New_Line; 

    mail($to_email, $MailSubject, $body, $headers);	*/
}
else

{
	echo "no";
}
?>
