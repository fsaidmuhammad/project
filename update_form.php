<?php
require_once 'student_class.php';

$student=new student_class();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $data=$student->getstudent($id);
}

if($_POST){
    $result=$student->updatestudent();

    if($result){
        header('location:already_registered.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">

    <title>Users Registration Form</title>
    <!--<link rel="stylesheet" type="text/css" href="style/style.css">-->
</head>
<body>
<div class="container">
        
        <h5 class="header text-center">Update Profile Form <i class="fa fa-wpforms" aria-hidden="true"></i></h5>
          <form class="" method="post" action="register_form.php">
            <label>id:</label>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">First Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter your First Name">
                </div>
              </div>
            </div>

          <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Middle Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="middle_name" id="middle_name"  placeholder="Enter your Middle Name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Last Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="last_name" id="last_name"  placeholder="Enter your Last Name"/>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your username"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Email" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email addrees"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label"> Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-building-o" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your password"/>
                </div>
              </div>
            </div>
     
         <input type="hidden" class="form-control"  name="reg" id="reg" value="<?php echo $reg_no; ?>" />
          <input type="hidden" class="form-control"  name="year" id="year" value="<?php echo $year; ?>" />
            
            <div class="form-group ">
              <button type="submit" id="button" class="btn btn-success btn-block ">Save Changes</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

</body>
</html>