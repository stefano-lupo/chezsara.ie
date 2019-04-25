<?php

$postArray = $_POST['posted'];
error_log("Sending Email with: " . implode(" - ", $postArray));
$name = $postArray[0];
$phone = $postArray[1];
$emailAddress = $postArray[2];
$numGuests = $postArray[3];
$date = $postArray[4];

// Format of $date is yyyy-mm-dd
if ($parsedDate = date_create_from_format("Y-m-j", $date)){
  $parsedDate = date_format($parsedDate, "j-M-Y");
} else {
  $parsedDate = $date;
} 

$time = $postArray[5];

if (count($postArray) > 6) {
  $message = $postArray[6];
} else {
  $message = "";
}

$to='info@chezsara.ie';

$subject = 'Table Reservation Request';
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From: '.$name.' <'.$emailAddress.'>'."\r\n";

/*$message = str_replace("\r\n", "<br>", $message);*/

$email = '
<html>
<head>
  <title>Table Reservation</title>
</head>

<body>
<h3>Email from '.$name.'</h3>
<h4>Phone Number: '.$phone.'</h4>
<h4>Email: '.$emailAddress.'</h4>

<p>Table required for '.$numGuests.' people on '.$parsedDate.' at '.$time.'.</p>
<p>'.$message.'</p>
<p>Please reply to this email in order to confirm or deny the booking.</p>
</body>
</html>
';

// send mail to Max
mail($to, $subject, $email, $headers);


// send mail to client for address book
$headers2 = 'MIME-Version: 1.0'."\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers2 .= 'From: Chez Sara <info@chezsara.ie>'."\r\n";


$message = 
'Your booking request has been successfully sent.
<br>Please add this contact to your address book to ensure the confirmation will not be marked as junkmail.<br><br>
We will be in touch with you soon to confirm.<br><br> Thank you!
<br>
------------------------------
<br>
Chez Sara<br>
Phone: 01 845 1882<br>
Email: info@chezsara.ie<br>
Website: <a href="www.chezsara.ie">www.chezsara.ie</a><br>';
//mail($emailAddress,"Chez Sara Booking Confirmation", $message, $headers2);
?>
