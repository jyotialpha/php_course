<?php
include_once 'database.php';

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}
?>
