<?php #config.inc.php

/*

*File Name: config.inc.php

*Created By: 

*Contact: 

*Configuration file does the following things:

*Has site settings in one location

*Stores URLs and URIs as constants

*Sets How errors will be handled

*/

# ********************** #
# *****SETTINGS********* #


//Errors are emailed here
$contact_email = 'jrdyou@gmail.com'; 

//Checking whether we're working on a local server or live:
$host = substr($_SERVER['HTTP_HOST'], 0, 5); //This checks the 5 first character of the host address
if (in_array($host, array('127.0', 'local','192.1'))){

	$local = TRUE;
}else{
	$local = FALSE;
}


//Determine location of files and the URL of the site:
//Allow for development on different servers.

if ($local){

	//Always debug when running locally:
	$debug = TRUE;

	//Define the constants
	define('BASE_URI', '/path/to/html/folder/');
	define('BASE_URL', 'http://localhost/directory/');
	define('DB', '/path/to/mysql.inc.php');
}	else{

	define('BASE_URI', '/path/to/livehtml/folder/');
	define('BASE_URL', 'http://example.com/');
	define('DB', '/path/to/live/mysql.inc.php');
}

/*
* IMPORTANT SETTING !!!!!!!!!!!!!!!!
* The $debug variable is used to set error management.
* To debug a specific page, add this to the index.php page:

if ($p == 'thismodule') $debug = TRUE;
require('./includes/config.inc.php');

* To debug the entire site do, 

$debug = TRUE;

*before this next conditional.
*/

//Assume debuging is off.
if (!isset($debug)){
	$debug = FALSE;
}

# *****END OF SETTINGS********* #
# ********************** #

# ***********************************#
# ******ERROR MANAGEMENT ************#

//Create the error handler: 
function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {

	global $debug, $contact_email;

	//Build The error message:
	$message = "An error occured in script '$e_file' on line $e_line: $e_message";

	//Append $e_vars to the $message:
	$message .= print_r($e_vars, 1);

	if ($debug){ //show the error

		echo'<div class="error">' . $message . '</div>';
		debug_print_backtrace();

	}else{

		//log the error:
		error_log ($message, 1, $contact_email); //send email

		//Only print an error if the error isn't a notice or strict
		if (($e_number != E_NOTICE)&&($e_number < 2048)){
			echo '<div class="error">A system error occured. We apologize for the inconvienience.</div>';
		}
	}//end of $debug IF
} //End of my_error_handler() definition.

//Use my error handler:
set_error_handler('my_error_handler');

# ******END OF ERROR MANAGEMENT ************#
# ***********************************#
