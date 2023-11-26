<?php
	// Links:
	// https://stackoverflow.com/questions/12831414/act-as-if-there-is-no-apache-server-on-a-particular-url
	// https://stackoverflow.com/questions/3773566/how-do-i-generate-a-connection-reset-programatically
	
	
	// Generate Connection Reset response
	$pid = getmypid();
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		exec("taskkill /F /PID $pid");
	} else {
		exec("kill -9 $pid");
	}
?>
