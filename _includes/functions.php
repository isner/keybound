<?php

function mysql_prep( $value ) {
	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists("mysql_real_escape_string"); // i.e. PHP >= v4.3.0
	if ($new_enough_php) { // PHP v4.3.0 or higher
		// undo any magic quote effects so mysql_real_escape_string can do the work
		if ($magic_quotes_active) { $value = stripslashes($value); }
		$value = mysql_real_escape_string($value);
	} else { // before PHP v4.3.0
		// if magic quotes aren't already on then add slashes manually
		if(!$magic_quotes_active) { $value = addslashes($value); }
		// if magic quotes are active, then the slashes already exist
	}
	return $value;
}

function confirmQuery($resultSet) {
	if (!$resultSet) {
		die("Database query failed: " . mysql_error());
	}
}

function check_required_fields($required_array) {
	$field_errors = array();
	foreach($required_array as $fieldname) {
		if (!isset($_POST[$fieldname]) ||
			(empty($_POST[$fieldname]) && !is_int($_POST[$fieldname])) ||
			(is_int($_POST[$fieldname]) && ($_POST[$fieldname]) < 1 )) {
				$field_errors[] = $fieldname;
		}
	}
	return $field_errors;
}

function check_max_field_lengths($field_length_array) {
	$field_errors = array();
	foreach($field_length_array as $fieldname => $maxlength) {
		if (isset($_POST[$fieldname]) && strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) {
			$field_errors[] = $fieldname;
		}
	}
	return $field_errors;
}

function check_numeric_fields($numeric_fields_array) {
	$field_errors = array();
	foreach ($numeric_fields_array as $fieldname) {
		if (!empty($_POST[$fieldname]) && !is_numeric($_POST[$fieldname])) {
			$field_errors[] = $fieldname;
		}
	}
	return $field_errors;
}

function display_errors($error_array) {
	if (count($error_array) == 1) {
			$message = 'There was one error in the form';
		} elseif (count($error_array) > 1) {
			$error_count = count($error_array);
			$message = 'There were ' . $error_count . ' errors in the form';
		}
	return $message;
}

function check_username($fieldname) {
	$field_errors = array();
	global $username;
	$new_username = trim($username);
	$query = "SELECT * FROM catalogue.user WHERE username = '{$new_username}'";
	$rows = mysql_num_rows(mysql_query($query));
	if ($rows >= 1) {
		$field_errors[] = $fieldname;
	}
	return $field_errors;
}

// ex: array_sort($array, 'sort by me', SORT_ASC);
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

// Verify that class/race/spec/talents have been submitted
// Else redirect
function classChosen($req_level) {
	$user_level = $_SESSION['privileges'];
	if ($user_level > $req_level && $user_level != 0) {
		header ('Location: index.php?access=restricted');
	} else {
		return TRUE;
	}
}

// Return specific key from Classes array
function classKeys($array, $keyNum) {
	$keys = array_keys($array);
	echo $keys[$keyNum];
}

function classValues($array, $keyNum) {
	$keys = array_keys($array);
	foreach ($array as $key => $value) {
		if ($key == $keys[$keyNum]) {
			echo $value;
		}
	}
}

function classNotSet() {
	if (!isset($_SESSION['class']) && !isset($_POST['selectedClass'])) {
		header('Location: build.php');
	}
}

function startsWith($haystack, $needle) {
    return !strncmp($haystack, $needle, strlen($needle));
}

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}
?>