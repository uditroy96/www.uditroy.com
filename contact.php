
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Index Page-->
	<div class="background">
		<div class="nav">
		
				<a class="a" href="index.html"><i>HOME</i></a>
				<a class="b" href="about.html"><i>ABOUT ME</i></a>
				<a class="c" href="gallery.html"><i>GALLERY</i></a>
				<a class="d" href="#"><i>CONTACT ME</i></a>
		</div>
		<div class="title">
			<h2><u>I AM UDIT ROY</u></h2><br>
			<h3><i>A Junior Photo,Website & Graphics designer...</i></h3>
			<h3><b><i>I also record  Songs & edit Songs and Videos,</i></b></h3>
			<h3><b><i>you can watch it on my channel given below.</i></b></h3>
		</div>
		<dev class="button">
			<a href="https://www.youtube.com/channel/UC31rX-_aPTWFUWcR_l_LkRA" class="btn"><b><u>WATCH MY VIDEO SONGS</u></b></a>
		</dev>
		<!--Contact Page-->
	<div class="contact">
		<form action="contact.php" method="post">
		<input type="text" name="text" class="inputtext" value=""placeholder="Enter your First name" required="/"><br>
		<input type="text" name="text" class="inputtext" value="" placeholder="Enter your Last name" required="/"><br>
		<input type="text" name="text" class="inputtext" value="" placeholder="Enter your E-mail" required="/"><br>
		<input type="text" name="text" class="inputtext" value="" placeholder="Enter your Phone No." required="/"><br>
		<textarea class="textmsg" placeholder="Your messages....!!!" ></textarea><br>
		<input type="button" name="button" class="submitbutton" value="Submit">
	</div>

	</form>
	</div>


</div>
</body>
</html>

<?php
if(isset($POST['fname']) && isset($POST['lname']) && isset($POST['email'])&& isset($POST['number']) && isset($POST['message']));{
	if(!empty($POST['fname']) && !empty($POST['lname']) && !empty($POST['email'])&& !empty($POST['number']) && !empty($POST['message']));{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$POST['email'];
$phone_number=$POST['phone number'];
$message=$POST['message'];

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo'kindly provide Valid Email';
}  else {
	$body=$fname."\n".$lname."\n".$email."\n".$phone_number."\n".$message;
	if mail(('udit.roy.9563@gmail.com','Website Response',$body,'From: ..........com')){
	echo'Thanks for contacting us.';
} else{
	echo 'There is a Problem in sending mail';
}

}

} else {
	echo'All field are required';
}
  

 }  else{
	echo'Not Ok'
}


?>


<!---html code--->


