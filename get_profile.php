<?php
// Retrieve student profile from the database
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$prn = $_SESSION["prn"]; // Assuming you stored PRN in the session after successful login

$sql = "SELECT * FROM students WHERE prn = '$prn'";
$result = $conn->query($sql);

$response = array();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['prn'] = $row["prn"];
    $response['name'] = $row["studentName"];
    $response['class'] = $row["class"];
    $response['email'] = $row["email"];
    $response['mobile'] = $row["mobileNumber"];
}

$conn->close();

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
