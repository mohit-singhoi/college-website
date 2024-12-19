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
// else
// {
//     echo " Database id connected";

// }



//Start


$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$confpassword =$_POST['confpassword'];

$sql="INSERT INTO `adminsignup`(`name`, `email`, `password`, `confpassword`) VALUES ('$name','$email','$password','$confpassword')";
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