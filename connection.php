<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="FOOD_ORDER";

$con = mysqli_connect($server,$username,$password,$dbname);
if($con=true)
{
echo "Successfully Connect";
}
else{
    echo "Not Connect";
}