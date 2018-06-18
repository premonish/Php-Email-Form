<?php

	$emailTo = "pinkyveloso@gmail.com";

	$subject = "Pinky, I love you!";

	$body = "Pinky, I'm your boyfriend and I love you!";

	$headers = "From: prem@prem5.com";

	if (mail($emailTo, $subject, $body, $headers)) {
		echo "The email '".$subject."' was sent succesfully";
	} else {
		echo "The email could not be sent.";
	}

?>