<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="BCA_DEPARTMENT";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql="SELECT `name`, `designation`, `email`, `mobileno`, `address` FROM `addfaculty`";

$result = $conn->query($sql);
echo" <br> Faculty Member Details <br> <br>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Faculty Name : " . $row["name"]  ."  ||  Designation :   " . $row["designation"]  .  "   ||   E-mail : " . $row["email"]  . "  ||  Mobile Number : " . $row["mobileno"]  .  "  ||  Address : " . $row["address"]  ."<br> <br> <br>" ;
  }
} else {
  echo "0 Faculty Members";
}
$conn->close();
?>