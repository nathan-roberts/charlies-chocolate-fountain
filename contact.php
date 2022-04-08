<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Charlie and The Chocolate Fountain - Contact Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<script src="/mint/?js" type="text/javascript"></script>
</head>

<body>

<div id="pageframe">

	<div id="topbanner">
	<img src="img/topbanner.jpg" alt="main banner" />
	</div>
	
	<?php include "includes/menu.inc.php" ?>
	
	<div id="main">	

		
		<div class="package" style="width:420px;">
		<form action="sendmail.php" method="post" style="">
						<table>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name" id="name" value="" style="width: 250px;" /></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><textarea  rows="5" cols="28" name="address" id="address" style="width: 250px;"></textarea></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" id="email" value="" style="width: 250px;"/></td>
							</tr>
							<tr>
								<td>Telephone</td>
								<td><input type="text" name="phone" id="phone" value="" style="width: 250px;"/></td>
							</tr>
							<tr>
								<td>How did you hear about us</td>
								<td>
									<input type="radio" class="radio" name="hear" value="Customer Referal" />Customer Referral<br />
									<input type="radio" class="radio" style="border:0px;" name="hear" value="Search Engine" />Search Engine<br />
									<input type="radio" class="radio" style="border:0px;" name="hear" value="Exhibition " />Exhibition<br />
									<input type="radio" class="radio" style="border:0px;" name="hear" value="Other" />Other<br />
									<input type="hidden" name="hear" value="Not Specified" /><br />
								</td>
							</tr>
							<tr>
								<td>Your enquiry / comments</td>
								<td><textarea cols="28" name="comments" id="comments" rows="10"  style="width:250px;"></textarea></td>
							</tr>
							<tr>
								<td>Mailing list</td>
								<td><input type="checkbox" class="radio" name="mailing" checked="checked"/></td>
							</tr>
							<tr>
								<td />
								<td><input class="submit" type="submit" name="submit" id="submit" value="Send" /></td>
							</tr>
						</table>
					</form><br />
		</div>
		
		<div class="package">
			<table>
				<tr>
					<td>Address</td>
					<td>
					<p>50 Peakes Road<br />
					Rugeley<br />
					Staffordshire<br />
					WS15 2LX</p>
					</td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td>01922 628 961</td>
				</tr>
				<tr>
					<td>email</td>
					<td><a href="mailto:info@ev-ent.co.uk">info@ev-ent.co.uk</a></td>
				</tr>
					</table>
					<img src="img/donna.jpg" alt="donna" />
		</div><br class="clear" />
					
	</div>
	
	<?php include "includes/disclaimer.inc.php" ?>
	
</div>

</body>


</html>