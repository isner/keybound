<?php
// Set database constants
if ($_SERVER['SERVER_NAME'] == 'localhost') {
// Loading on local test server
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'keybound');
} else {
// Loading live page
	define('DB_SERVER', 'mysql');
	define('DB_USER', 'isnerms');
	define('DB_PASS', 'Gravity1409');
	define('DB_NAME', 'keybound');
}
?>