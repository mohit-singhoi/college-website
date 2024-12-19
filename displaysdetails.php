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


$sql="SELECT `name`, `fname`, `mname`, `dob`, `gender`, `email`, `pincode`, `mobileno`, `address` FROM `students`";

$result = $conn->query($sql);
echo" <br> Students Details <br> <br>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Student Name : " . $row["name"]."  ||  Father's Name :   " . $row["fname"].  "   ||   Mother's Name : " . $row["mname"]. "  ||  DOB : " . $row["dob"].  "  ||  Gender : " . $row["gender"].  "  ||  E-mail : " . $row["email"].   "  ||  Pincode : " . $row["pincode"].  "  ||  Mobile Number : " . $row["mobileno"].   " ||   Addres : " . $row["address"]."<br> <br> <br>" ;
  }
} else {
  echo "0 Students";
}
$conn->close();
?>