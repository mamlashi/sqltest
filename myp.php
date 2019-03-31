<?php
$servername = "localhost";
$username = "Matt";
$password = "ms";
$database="Staging";
$myname=$_POST['name'];
$mynum=$_POST['mynum'];
$myid=$_POST['myid'];
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>