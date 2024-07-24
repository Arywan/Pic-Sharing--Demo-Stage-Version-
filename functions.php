<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "mydb";
$conn = "";

function openConnection()
{
    // Create connection
    $GLOBALS['conn'] = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['pass'], $GLOBALS['dbname']);
    // Check connection
    if (!$GLOBALS['conn']) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

function closeConnection()
{
    mysqli_close($GLOBALS['conn']);
}

function checkUser($email, $pass)
{
    
    $sql = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
   
    return mysqli_query($GLOBALS['conn'], $sql);
}
