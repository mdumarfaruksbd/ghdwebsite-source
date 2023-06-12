<?php

require_once 'connection.php';

// Rest of your code

function fetchDataFromDatabase()
{
    global $conn;

    // Query to fetch data from the database
    $sql = 'SELECT id, left_flag_img, left_flag_name, right_flag_img, right_flag_name, event_name, event_title FROM your_table';
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Assign the fetched values to the $data array
            $data[] = [
                'id' => $row['id'],
                'leftFlagImg' => $row['left_flag_img'],
                'leftFlagName' => $row['left_flag_name'],
                'rightFlagImg' => $row['right_flag_img'],
                'rightFlagName' => $row['right_flag_name'],
                'eventName' => $row['event_name'],
                'eventTitle' => $row['event_title'],
            ];
        }
    }

    return $data;
}
?>