<?php
include('../includes/db.php');

$id = $_GET['id'];  // Getting user ID from the URL

// Vulnerable SQL query
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo "Name: " . $user['name'] . "<br>";
    echo "Username: " . $user['username'] . "<br>";
} else {
    echo "No user found.";
}
?>
