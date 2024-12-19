<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from Database through PHP</title>
    <link rel="stylesheet" href="displaystudentdata.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <!-- <form onsubmit="return data()" action="displaystudentdata.php" method="post"> -->
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Student Details</h2>
                    </div>
                    <div class="card-body">
                        <table  class="table table-bordered text-center width='100%' style='font-weight:bold'>
                           <thead>
                               <tr class="bg-dark  text-white">
                                    <td><b>Student ID</b></td>
                                    <td><b>Student Name</b></td>
                                    <td><b>Father's Name</b></td>
                                    <td><b>Mother's Name</b></td>
                                    <td><b>DOB</b></td>
                                    <td><b>Gender</b></td>
                                    <td><b>E-mail</b></td>
                                    <td><b>Pincode</b></td>
                                    <td><b>Mobile Number</b></td>
                                    <td><b>Address</b></td>
                             
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn=mysqli_connect("localhost","root","","bca_department");
                                $query="SELECT `sid`,`name`, `fname`, `mname`, `dob`, `gender`, `email`, `pincode`, `mobileno`, `address` FROM `students` ";
                                $result=mysqli_query($conn,$query);
                                if(mysqli_num_rows($result)> 0)
                                {
                                    foreach($result as $row)
                                    {
                                       ?>
                                        <tr>
                                            <td><?=$row['sid'];?></td>
                                            <td><?=$row['name'];?></td>
                                            <td><?=$row['fname'];?></td>
                                            <td><?=$row['mname'];?></td>
                                            <td><?=$row['dob'];?></td>
                                            <td><?=$row['gender'];?></td>
                                            <td><?=$row['email'];?></td>
                                            <td><?=$row['pincode'];?></td>
                                            <td><?=$row['mobileno'];?></td>
                                            <td><?=$row['address'];?></td>
                                           
                                        </tr>
                            
                                       <?php
                                       
                                    }
                                }
                                else
                                {
                                    echo "No  any  Record  found"; 

                                }
                                ?>

                            
                           
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    

    
</body>
</html>