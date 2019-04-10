<!DOCTYPE html>
<html>
<body>

<?php
$servername = "sql113.byethost7.com";
$username = "b7_23749483";
$password = "Sentienta@7";
$dbname = "b7_23749483_homepage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count FROM counter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Count: ". $row["count"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
