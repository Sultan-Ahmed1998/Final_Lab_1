<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT prodict_id, product_name, description, quantity FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["prodict_id"]. " - Name: " . $row["product_name"]. " -Description" . $row["description"]."-Quantity:".$row["quantity"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>