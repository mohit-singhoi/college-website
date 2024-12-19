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
$fathername =$_POST['fathername'];
$mothername =$_POST['mothername'];
$email =$_POST['email'];

$phone =$_POST['phone'];
$dob =$_POST['dob'];
$aadhar =$_POST['aadhar'];
$gender =$_POST['gender'];
$address =$_POST['address'];

$nationality =$_POST['nationality'];
$religion =$_POST['religion'];
$category =$_POST['category'];
$qualification =$_POST['qualification'];

$marks =$_POST['marks'];
$course=$_POST['course'];


$sql="INSERT INTO `bcaadmission`(`name`, `fathername`, `mothername`, `email`, `phone`, `dob`, `aadhar`, `gender`, `address`, `nationality`, `religion`, `category`, `qualification`, `marks`, `course`) VALUES ('$name','$fathername','$mothername','$email','$phone','$dob','$aadhar','$gender','$address','$nationality','$religion','$category','$qualification','$marks','$course')";
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