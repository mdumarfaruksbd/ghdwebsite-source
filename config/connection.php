<?php
// Database configuration
$servername = 'localhost';
$username = 'sporqm';
$password = '.pKGD(osE_sG';
$dbname = 'sporqmnc_td';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
