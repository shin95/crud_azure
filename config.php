<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'bdgweb1.database.windows.nett';
$databaseName = 'admin123';
$databaseUsername = 'B4andung_95';
$databasePassword = 'DbWeb';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>