<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phoneno.'];
        $msg=$_POST['state'];
        $msg=$_POST['city'];
        $msg=$_POST['msg'];

		$to='narender007bisht@gmail.com@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="name :".$name."\n"."phone :".$phone."\n"."email:".$email."\n :"."state:".$state."\n"."city:".$city."\n"."msg:".$msg.;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>