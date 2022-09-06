<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>register</title>
    <?php 
        $username="";
        $password="";
        $usertype="";
        $msg="";
        ?>
        <?php
        $conn=mysqli_connect('localhost','root','','studentattendance');
        if(isset($_POST['btnlogin']))
        {
            $username=$_POST['txtusername'];
            $password=$_POST['txtpassword'];
            $query="select * from studreg where username='$username'";
            $tb=mysqli_query($conn,$query);
            $rw=mysqli_fetch_array($tb);
            if($rw)
            {
                if($password==$rw['password'])
                {
                  if($rw['usertype']=='Student')
                  {
                    header('location:../student/studhome.php');
                  }
                  if($rw['usertype']=='Teacher')
                  {
                    header('location:../teacher/teacherhome.php');
                  }
                }
                else
                {
                    $msg="Invalid Password....";
                }
            }
            else
            {
                $msg="Invalid User name....";
            }
        
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
        <div class="col-md-12 text-center"><h2>Login</h2></div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-4">
            <form action="#" method="post" name="mainfrmreg">
              <div class="form-group">
                  <label>User name:</label>
                  <input type="text" class="form-control" placeholder="Enter User Name" name="txtusername" value="">
              </div>    
              <div class="form-group">
                  <label>Password:</label> 
                  <input type="password" class="form-control" placeholder="Enter password" name="txtpassword">
              </div>
              <input type="submit" name="btnlogin" class="btn btn-primary" value="Login">
              <div class="form-group">
                <label><?php echo($msg); ?></label> 
              </div>
            </form> 
          </div> 
      </div>
    </div>      
 
</body>
</html>

