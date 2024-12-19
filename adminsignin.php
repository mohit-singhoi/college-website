<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="BCA_DEPARTMENT";

$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
echo "Not Connect";
}


//Start

$name =$_POST['name'];

$password =$_POST['password'];

//$sql="SELECT  *FROM adminsignup  where name='$name' and password='$password'";
$sql = "select *from adminsignin where name = '$name' and password = '$password'"; 

$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  


if($count == 1){  
    echo "Go to next page ";
   header("Location: administration.html");
    echo "<h1><center> Login successful </center></h1>";
   
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>"; 
 }

?>