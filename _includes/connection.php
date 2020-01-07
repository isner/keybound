<?php
// Call database login information from constants file
require('constants.php');

// Connect to the database
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if (!$connection) {
	die('Database connection failed: '. mysql_error());
}
// Select the database
$dbSelect = mysql_select_db(DB_NAME, $connection);
if (!$dbSelect) {
	die('Database selection failed: '. mysql_error());
}
// Set the server time to Central Standard Time
date_default_timezone_set('America/Chicago');
?>