<?php
require_once 'student_class.php';
include 'index.php';
$new=new student_class();

$register=$new->insertstudent();

if($register){
    echo'registration successful';
    header('location:user_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IT Registration Form</title>
  <style>
  * {
    margin:0px;
    padding:0px;
  }
  body {
    background-color:silver;
  }
  fieldset {
    margin:130px auto; 
    background-color:ghostwhite;
    padding-top: 30px;
    height:210;
    width:560px;
  }
  input {
    width: 100%;
    border:none;
    border: 1px solid #00ccff;
    background-color:ghostwhite;
}
div {
  padding:10px;
}
h1 {
  text-align:center;
}
  </style>
</head>
<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <fieldset>
  <h1>Registration Form</h1>
  <div>
  <label>First Name</label>
  <input type="text" name="first_name" value="">
  </div>
  <div>
  <label>Middle Name</label>
  <input type="text" name="middle_name" value="">
  </div>
  <div>
  <label>Last Name</label>
  <input type="text" name="last_name" value="">
  </div>
  <div>
  <label>Username</label>
  <input type="text" name="username" value="">
  </div>
  <div>
  <label>Email</label>
  <input type="text" name="email" value="">
  </div>
  <div>
  <label>Password</label>
  <input type="password" name="password" value="">
  </div>
  <div>
  <label>User Type</label>
  <select name="user_type_id">
  <option>Select user type</option>
  <?php
  $view = new student_class();
  $data = $view->viewSelect();
  ?>
  </select>
  </div>
  <div>
  <button type="submit">Submit</button>
  </div>
  </fieldset>
  </form>
  <?php
  ?>
</body>
</html>