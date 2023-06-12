<?php
// Database configuration
$servername = 'localhost';
$username = 'sporqmnc_testghd';
$password = '.pKGD(osE_sG';
$dbname = 'sporqmnc_testghd';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
