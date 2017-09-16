<?php	
<<<<<<< HEAD
	require_once '';
	$api = new MCAPI('');	
=======
	require_once 'inc/MCAPI.class.php';
	$api = new MCAPI('39cf295dd0257c39de691c8518d96efe-us8');	
>>>>>>> f8e299c576bd34def775c4df9922a52494af5db2
	$merge_vars = array('FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"], 'WEBS'=>$_POST["wname"]);
	
	// Submit subscriber data to MailChimp
	// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
<<<<<<< HEAD
	$retval = $api->listSubscribe( '', $_POST["email"], $merge_vars, 'html', false, true );
=======
	$retval = $api->listSubscribe( '44a95d2467', $_POST["email"], $merge_vars, 'html', false, true );
>>>>>>> f8e299c576bd34def775c4df9922a52494af5db2
	
	if ($api->errorCode){
		echo '<h4 style="padding: 5px; color: red;">Please try again.</h4>';
	} else {
		echo '<h4 style="padding: 5px; color: black;">Thanks for joining the Olanola Blogger Network</h4>';
	}
?>

