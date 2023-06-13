<?php
// Start the session
session_start();


if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = "Not Found";
}

// Echo the value of the name session variable
echo "Name: " . $name;



?>