<?php
require_once('_includes/session.php');
require_once('_includes/connection.php');
require_once('_includes/functions.php');
require_once('_includes/classTalents.php');
// gatekeeper(); // If SESSION['userId'] is unset, redirect to login



//=================================================
//               BEGIN CLIENT SIDE
//=================================================
require('_includes/header.php');
?>

<div id="welcomeText"></div>

<a id="enter" href="index.php"></a>

<div id="keyboard_oblique"></div>

<p class="clear"></p>

<?php
require('_includes/footer.php');
?>