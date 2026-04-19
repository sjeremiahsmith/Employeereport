<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'employeereport'; 

/* End config */

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
if (!$link) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>