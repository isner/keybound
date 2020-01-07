<?php
session_start();
// -----------------------------------
// Indicates whether user is logged in
// Returns user id
// -----------------------------------
function loggedIn() {
	return isset($_SESSION['userId']);
}
// -------------------------------
// Redirects user is not logged in
// -------------------------------
function gatekeeper() {
	if (!loggedIn()) {
		header('Location: login.php');
	}
}
?>