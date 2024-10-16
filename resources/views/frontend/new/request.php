<?php 
//include 'connection.php';
include('../include/connection.php') ;

//print_r($_POST);die; 

if(isset($_POST['code']))
{
$code=$_POST['code'];

$phone_no=$_POST['phone_no'];

$sql="insert into call_query(code,phone_no) values('$code','$phone_no')";


if(mysqli_query($conn,$sql))
{
  $body = '<table>
            <tr>
             <td>Phone No: </td>
             <td>'.$code.$phone_no.'</td>
            </tr>
          </table>';

  
    $MailSubject = 'Call Request';
 
    $to_email = 'sales@nettechnocrats.com';

    $New_Line = "\n";
    $headers = "MIME-Version: 1.0" .$New_Line;
    $headers .= "Content-type: text/html; charset=iso-8859-1" .$New_Line;
    $headers .= "Content-Transfer-Encode: 7bit " .$New_Line;
    $headers .= "From: $email ".$New_Line;

    $headers .= "X-Mailer: PHP " .$New_Line; 
    $headers .= "Return-Path: < $to_email > " .$New_Line; 

    $Email =  mail($to_email, $MailSubject, $body, $headers); 


  //   EMAIL TO SENDER


      $to_email_sender = $email;

  
      $MailSubject1 = 'Thank You for contacting with us';
      $body1 = "<p>Thank you for contacting with Nettechnocrats. We will reach you soon </p>";

    $New_Line1 = "\n";
    $headers1 = "MIME-Version: 1.0" .$New_Line1;
    $headers1 .= "Content-type: text/html; charset=iso-8859-1" .$New_Line1;
    $headers1 .= "Content-Transfer-Encode: 7bit " .$New_Line1;
    $headers1 .= "From: $email ".$New_Line1;

    $headers1 .= "X-Mailer: PHP " .$New_Line; 
    $headers1 .= "Return-Path: < $to_email_sender > " .$New_Line; 

    $EmailSend =  mail($to_email_sender, $MailSubject1, $body1, $headers1); 

   if($Email){
       echo "Your query has been registered.we will contact you soon.";
      exit();
   }else{
      echo "OOPS! Something went wrong.Please Try again.";
      exit();
    }
  
    }
}
if(isset($_POST['rname']))
{
$rname=$_POST['rname'];
$remail=$_POST['remail'];
$rcode=$_POST['rcode'];
$rphoneno=$_POST['rphoneno'];
$rmessage=$_POST['rmessage'];
$rcapcha=$_POST['rcapcha'];

$phone = $rcode.$rphoneno;
$sql="insert into message_query(name,email,phone,message) values('$rname','$remail','$phone','$rmessage')";


if(mysqli_query($conn,$sql))
{
  $body = '<table>
        <tr>
          <td>Name: </td>
          <td>'.$rname.'</td>
        </tr>
        <tr>
          <td>Email: </td>
          <td>'.$remail.'</td>
        </tr>
        <tr>
          <td>Message: </td>
          <td>'.$rmessage.'</td>
        </tr>
      </table>';

  
    $MailSubject = 'Query Request';
 
    $to_email = 'sales@nettechnocrats.com';
    //$to_email = 'upendra@appiguru.com';

    $New_Line = "\n";
    $headers = "MIME-Version: 1.0" .$New_Line;
    $headers .= "Content-type: text/html; charset=iso-8859-1" .$New_Line;
    $headers .= "Content-Transfer-Encode: 7bit " .$New_Line;
    $headers .= "From: $email ".$New_Line;

    $headers .= "X-Mailer: PHP " .$New_Line; 
    $headers .= "Return-Path: < $to_email > " .$New_Line; 

    $Email =  mail($to_email, $MailSubject, $body, $headers); 


  //   EMAIL TO SENDER


      $to_email_sender = $email;

  
      $MailSubject1 = 'Thank You for contacting with us';
      $body1 = "<p>Thank you for contacting with Nettechnocrats. We will reach you soon </p>";

    $New_Line1 = "\n";
    $headers1 = "MIME-Version: 1.0" .$New_Line1;
    $headers1 .= "Content-type: text/html; charset=iso-8859-1" .$New_Line1;
    $headers1 .= "Content-Transfer-Encode: 7bit " .$New_Line1;
    $headers1 .= "From: $email ".$New_Line1;

    $headers1 .= "X-Mailer: PHP " .$New_Line; 
    $headers1 .= "Return-Path: < $to_email_sender > " .$New_Line; 

    $EmailSend =  mail($to_email_sender, $MailSubject1, $body1, $headers1); 

    if($Email){
       echo "Your query has been registered.we will contact you soon.";
      exit();
    }else{
      echo "OOPS! Something went wrong.Please Try again.";
      exit();
    }
  
    }
}

?>