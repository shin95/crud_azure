/**
    $host = "bdgweb1.database.windows.net";
    $user = "admin123";
    $pass = "B4andung_95";
    $db = "DbWeb";
    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    } 
**/

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