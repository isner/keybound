<?php
require_once('_includes/session.php');
require_once('_includes/connection.php');
require_once('_includes/functions.php');

if (isset($_POST['login']) && $_POST['login'] == 'Log In') {
// User submits login info

	$username = trim(mysql_prep($_POST['username']));
	$password = trim(mysql_prep($_POST['password']));
	$hashed = sha1($password);
	// Prepare input fields
	
	$query = " SELECT * FROM keybound.users 
				WHERE 
					username = '{$username}'
					&&
					hashed_password = '{$hashed}'
				";
	$result = mysql_query($query, $connection); confirmQuery($result);
	// Find username/password combo in database
	
	if (mysql_num_rows($result) == 1) {
	// ONE matching username/password combo was found
	
		while ($row = mysql_fetch_assoc($result)) {
			$_SESSION['userId'] = $row['id'];
			$_SESSION['userName'] = $row['first_name'];
		}
		// Set SESSION['userId'] 
		
		$message = '';
		
		header('Location: index.php');
		// Direct user to main page
	
	} else {
	// NO matching username/password combo was found
	
		$message = 'Username/password was not found';
	
	}

}



//=================================================
//               BEGIN CLIENT SIDE
//=================================================
require('_includes/header.php');
?>

<div id="login-wrapper">

	<form method="post" action="login.php">
	
		<?php if (isset($message) && !empty($message)) { ?>
			<span style="color: red;"><?php echo $message; ?></span>
		<?php } ?>
	
		<span class="fieldLabel">Username:</span>
		<input type="text" name="username" autofocus="autofocus" value="" maxlength="15">
		
		<span class="fieldLabel">Password:</span>
		<input type="password" name="password" value="" maxlength="15">
		
		<input type="submit" name="login" value="Log In">
	
	</form>
	
</div> <!-- login-wrapper -->

<?php
require('_includes/footer.php');
if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
	<pre><?php print_r($GLOBALS); ?></pre>
<?php } ?>