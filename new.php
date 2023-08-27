<?php
$link = mysqli_connect("localhost", "root", "", "db0");

// Fetch data from the database
$query = "SELECT * FROM t0";
$result = mysqli_query($link, $query);

// Create an array to store the data
$data = array();

// Fetch rows and append to the data array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Set the content type to JSON
header('Content-Type: application/json');

// Convert the data array to JSON format
$jsonData = json_encode($data);

// Print the JSON response
echo $jsonData;
?>