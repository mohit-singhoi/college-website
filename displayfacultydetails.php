<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from Database through PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <!-- <form onsubmit="return data()" action="displaystudentdata.php" method="post"> -->
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center"> Faculty Details</h2>
                    </div>
                    <div class="card-body">
                        <table  class="table table-bordered text-center width='100%' style='font-weight:bold'>
                           <thead>
                               <tr class="bg-dark  text-white">
                                    <td><b>Faculty ID</b></td>
                                    <td><b>Faculty Name</b></td>
                                    <td><b>Designation </b></td>
                                    <td><b>E-mail</b></td>
                                    <td><b>Mobile Number</b></td>
                                    <td><b>Address</b></td>
                             
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn=mysqli_connect("localhost","root","","bca_department");
                               $query="SELECT `fid`, `name`, `designation`, `email`, `mobileno`, `address` FROM `addfaculty`";
                             
                        
                                $result=mysqli_query($conn,$query);
                                if(mysqli_num_rows($result)> 0)
                                {
                                    foreach($result as $row)
                                    {
                                       ?>
                                        <tr>
                                            <td><?=$row['fid'];?></td>
                                            <td><?=$row['name'];?></td>
                                            <td><?=$row['designation'];?></td>
                                            <td><?=$row['email'];?></td>
                                            <td><?=$row['mobileno'];?></td>
                                            <td><?=$row['address'];?></td>
                                           
                                           
                                        </tr>
                            
                                       <?php
                                       
                                    }
                                }
                                else
                                {
                                    echo "No  any  Record found"; 

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