
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM table_user";
$result = $conn->query($sql);
$arrayData = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arrayData[] = $row;
    }
} else {
    echo "0 results";
}

echo json_encode($arrayData);

$conn->close();
?>




