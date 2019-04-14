
<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'bdgweb1.database.windows.net';
$databaseName = 'DbWeb';
$databaseUsername = 'admin123';
$databasePassword = 'B4andung_95';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?> 