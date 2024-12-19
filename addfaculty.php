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

$fid =$_POST['fid'];
$name =$_POST['name'];
$designation =$_POST['designation'];
$email =$_POST['email'];
$mobileno =$_POST['mobileno'];
$address =$_POST['address'];


$sql="INSERT INTO `addfaculty` (`fid`, `name`, `designation`, `email`, `mobileno`, `address`) VALUES ('$fid','$name','$designation','$email','$mobileno','$address')";
$result =mysqli_query($con, $sql);

if($result)
{
echo "Data Is  Submitted";
}
else
{
    echo "Error";

}
?>