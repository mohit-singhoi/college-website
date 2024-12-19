<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BCA_DEPARTMENT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *FROM student_result";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "roll_number: " . $row["roll_number"]. " - subject1: " . $row["subject1"]. " subject2: " . $row["subject2"]. " <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>