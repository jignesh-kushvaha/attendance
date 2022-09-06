<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">   
    <title>register</title>
    <?php 
        $regid="";
        $regdate="";
        $username="";
        $password="";
        $usertype="";
        $contactno="";
        $email="";
        $query="";
        $msg="";
        ?>
        <?php
        $conn=mysqli_connect('localhost','root','','studentattendance');
        if(isset($_POST['btnreg']))
        {
            $regdate=$_POST['txtdate'];
            $username=$_POST['txtusername'];
            $password=$_POST['txtpassword'];
            $usertype=$_POST['ddusertype'];
            $contactno=$_POST['txtcontact'];
            $email=$_POST['txtemail'];
            $query="insert into studreg(regdate,username,password,usertype,contactno,email) values('$regdate','$username','$password','$usertype','$contactno','$email')";
            //echo($query);
            $result=mysqli_query($conn,$query);
            if($result)
                $msg="Record Inserted";
            else
                $msg="Record Not Inserted";
        }
    ?>
</head>
<body>
<div class="row">
    <div class="col-md-12">
      <?php include('header.php'); ?>
    </div>
    </div>
  <div class="row">
    <div class="col-md-12">
      <?php include('mainnav.php'); ?> 
    </div>
  </div>
      <!-- content page -->
      <div class="container">
      <div class="row">
          <div class="col-md-12 text-center"><h1>Register Form</h1></div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-5">
          <form action="#" method="post" name="mainfrmreg">
              <div class="form-group">
                  <label>User name:</label>
                  <input type="text" class="form-control" placeholder="Enter User Name" name="txtusername" value="">
              </div>    
              <div class="form-group">
                  <label>Password:</label> 
                  <input type="password" class="form-control" placeholder="Enter password" name="txtpassword">
              </div>
              <div class="form-group">
                  <label>Register Date:</label>
                  <input type="date" class="form-control" placeholder="Enter Register date" name="txtdate">
              </div>   
              <div class="form-group">
                  <label>User Type:</label>
                  <select name="ddusertype">
                      <option>Select</option>
                      <option>Student</option>
                      <option>Teacher</option>
                  </select>
              </div>    
              <div class="form-group">
                  <label>Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="txtemail">
              </div>
              <div class="form-group">
                  <label>Contact No.:</label> 
                  <input type="text" class="form-control" placeholder="Enter Contact" name="txtcontact">
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

