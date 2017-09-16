<?php	
	require_once '';
	$api = new MCAPI('');	
	$merge_vars = array('FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"], 'WEBS'=>$_POST["wname"]);
	
	// Submit subscriber data to MailChimp
	// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
	$retval = $api->listSubscribe( '', $_POST["email"], $merge_vars, 'html', false, true );
	
	if ($api->errorCode){
		echo '<h4 style="padding: 5px; color: red;">Please try again.</h4>';
	} else {
		echo '<h4 style="padding: 5px; color: black;">Thanks for joining the Olanola Blogger Network</h4>';
	}
?>

