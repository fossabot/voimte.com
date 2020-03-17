<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   file                 :  logout.php
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   author               :  Muhamed Skoko - mskoko.me@gmail.com
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');

//Proveri login;
if (!($User->IsLoged()) == false) {
	// Get Current date, time
	$current_time = time();

	// Set Cookie expiration for 1 month
	$cookie_expiration_time = $current_time - (30 * 24 * 60 * 60);  // for 1 month

	setcookie('l0g1n', '', $cookie_expiration_time, '/', null, null, TRUE);

	session_unset();
	session_destroy();
}

header('Location: /login?login');
die();

?>