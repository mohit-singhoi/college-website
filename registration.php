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
$dob =$_POST['dob'];
$email =$_POST['email'];
$mobileno =$_POST['mobileno'];

$pchanges =$_POST['pchanges'];
$category =$_POST['category'];
$tenthboard =$_POST['tenthboard'];
$tenthmarks =$_POST['tenthmarks'];

$tenthyear =$_POST['tenthyear'];
$twthboard =$_POST['twthboard'];
$twmarks =$_POST['twmarks'];
$twyear =$_POST['twyear'];

$atype =$_POST['atype'];
$nation=$_POST['nation'];
$state =$_POST['state'];
$distict =$_POST['distict'];

$villege =$_POST['villege'];
$pincode =$_POST['pincode'];
$fname =$_POST['fname'];
$foc =$_POST['foc'];

$fmobile =$_POST['fmobile'];
$mname =$_POST['mname'];
$moc =$_POST['moc'];
$mmobil =$_POST['mmobil'];

$sql="INSERT INTO `registration`(`name`, `dob`, `email`, `mobileno`, `pchanges`, `category`, `tenthboard`, `tenthmarks`, `tenthyear`, `twthboard`, `twmarks`, `twyear`, `atype`, `nation`, `state`, `distict`, `villege`, `pincode`, `fname`, `foc`, `fmobile`, `mname`, `moc`, `mmobil`) VALUES ('$name','$dob','$email','$mobileno','$pchanges','$category','$tenthboard','$tenthmarks','$tenthyear','$twthboard','$twmarks','$twyear','$atype','$nation','$state','$distict','$villege','$pincode','$fname','$foc','$fmobile','$mname','$moc','$mmobil')";
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