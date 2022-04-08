<?php
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hear = $_POST['hear'];
$comments = $_POST['comments'];
$mailing = $_POST['mailing'];



$recipient = "nathan@codeaddicts.io";
$subject = "Charlies Chocolate Fountain Web Form";

$message = "Name: $name \n";
$message .= "Address: $address \n";
$message .= "E-mail: $email \n";
$message .= "Phone: $phone \n";
$message .= "How did you hear about us?: $phone \n";
$message .= "Comments: $comments \n";
$message .= "Add to mailing list: $mailing \n";
$message .= "Comments: $comments \n\n";

$headers = "From: $email \n";
$headers .= "Reply-To: $email";

mail($recipient, $subject, $message, $headers);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">




<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div id="pageframe">

		<div id="topbanner">
			<img src="img/topbanner.jpg" alt="main banner" />
		</div>

		<?php include "includes/menu.inc.php" ?>

		<div id="main">
			<p>Thank you for filling out feedback form please not the following details have been sent.</p>

			<table>
				<tr>
					<td>Name</td>
					<td><? echo "$name" ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><? echo "$address" ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><? echo "$email" ?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><? echo "$phone" ?></td>
				</tr>
				<tr>
					<td>How did you hear about us</td>
					<td><? echo "$hear" ?></td>
				</tr>
				<tr>
					<td>Comments</td>
					<td><? echo "$comments" ?></td>
				</tr>
				<tr>
					<td>Add to mailing list</td>
					<td><? echo "$mailing" ?></td>
				</tr>
			</table>
			<br />
			<p><a href="contact.php">Return to contact page</a></p>
		</div>

		<?php include "includes/disclaimer.inc.php" ?>

	</div>




	</div>

</body>


</html>