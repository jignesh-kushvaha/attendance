<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- <script src="../bootstrap/js/bootstrap.min.js"></script> -->
    <title>Teacher admission</title>
    <?php 
        $admissionid="";
        $admissionname="";
        $studname="";
        $course="";
        $duration="";
        $fees="";
        $query="";
        $msg="";
    ?>
    <?php
        $conn=mysqli_connect('localhost','root','','studentattendance');
        if(isset($_POST['btnreg']))
        {
            $admissiondate=date('y-m-d');
            $studname=$_POST['txtstudname'];
            $course=$_POST['ddcourse'];
            $duration=$_POST['txtduration'];
            $fees=$_POST['txtfees'];

            
            $query="insert into studaddmission(admissiondate,studname,course,duration,fees) values('$admissiondate','$studname','$course','$duration','$fees')";
            $result=mysqli_query($conn,$query);
            if($result)
                $msg="Record Inserted";
            else
                $msg="Record Not Inserted";
        }
    ?>
</head>
<body>
<div class="container-fluid">
    <?php include('header.php'); ?>
    <?php include('teachernav.php'); ?>  
    <!-- content page -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"><h1>Admission Form</h1></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="#" method="post" name="admissionfrmreg">
                    <div class="form-group">
                        <label>Register Id:</label>
                        <select name="ddregid">
                            <option>Select</option>
                        </select>
                    </div>    
                    <div class="form-group">
                        <label>Student name:</label>
                        <input type="text" class="form-control" placeholder="Enter Student Name" name="txtstudname" value="">
                    </div>    
                
                    <div class="form-group">
                        <label>Duration:</label> 
                        <input type="text" class="form-control" placeholder="Enter Duration" name="txtduration">
                    </div>
                    <div class="form-group">
                        <label>Course:</label>
                        <select name="ddcourse">
                            <option>Select</option>
                            <option>BCA</option>
                            <option>BCOM</option>
                            <option>BBA</option>
                            <option>MCA</option>
                            <option>MBA</option>
                        </select>
                    </div>    
                    <div class="form-group">
                        <label>Fees:</label> 
                        <input type="text" class="form-control" placeholder="Enter Fees" name="txtfees">
                    </div>
                    <input type="submit" name="btnreg" class="btn btn-primary" value="Registration">
                    <div class="form-group">
                    <label><?php echo($msg); ?></label> 
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
</body>
</html>

