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

$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];


$sql="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
$result =mysqli_query($con, $sql);


if($result)
{
echo "Data Is Submitted";
}
else
{
    echo "Error";

}

?>