<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

echo "<h2>SkillBridge Database Test</h2>";

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'skillbridge';

try {
    echo "Connecting to MySQL... ";
    $conn = new mysqli($host, $user, $pass, $db);
    echo "<span style='color: green;'>SUCCESS!</span><br>";

    echo "Checking for 'users' table... ";
    $result = $conn->query("SHOW TABLES LIKE 'users'");
    if ($result->num_rows > 0) {
        echo "<span style='color: green;'>FOUND!</span><br>";
    } else {
        echo "<span style='color: red;'>NOT FOUND!</span><br>";
        echo "Please import schema.sql into your database.";
    }

    echo "<br><strong>Connection Details:</strong><br>";
    echo "Host: $host<br>";
    echo "User: $user<br>";
    echo "DB: $db<br>";
} catch (Exception $e) {
    echo "<span style='color: red;'>FAILED!</span><br>";
    echo "<strong>Error:</strong> " . $e->getMessage();
}
