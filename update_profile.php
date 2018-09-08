<?php
require_once 'student_class.php';
$update = new student_class();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = $update->getprofile($id);
}

if ($_POST) {
    $result = $update->updateProfile();

  if ($result) {
      header("Location: IT_dashboard.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>
    <style>
      #header {
          width:100%;
          height:100px;
          background:#00CCFF;
      }
      #sidebar {
          width:200px;
          height:300px;
          background:#00CCFF;
          float:left;
      }
      #body {
          width:100%;;
          height:480px;
          background:white;
      }
      ul li {
          padding-bottom: 20px;
          border-bottom: 2px solid white;
          list-style:square; 
      }
      ul li a{
          text-decoration: none;
          color:black;
      }

      #left {
          float:left;
          border: right;
          width:39%;
          border:none;
          padding-top:15px;
      }
      #right {
          float:right;
          width:40%;
          border:none;
          padding-top:15px;
      }
      footer {
         background-color: #00ccff;
         color: ghostwhite;
         text-align: center;
     }
      input[type='text'] {
          width:100%;
      }
     input {
         width:100%;
     }
     input[type='radio'] {
          width:20px;
     }
     input[type='submit'] {
         background-color:#00ccff;
     }
     input[type='submit']:hover {
         background-color:forestgreen;
     }
    </style>
</head>
<body>
    <div id="header">
    
    <center><strong><b>Welcome<strong></b></center>
    </div>
    <div id="sidebar">
    <ul>
     <li><a href="user_details.php">Add Details</a></li>
     <li><a href="IT_dashboard.php">View Profile</a></li>
     <li><a href="#">View Login Details</a></li>
     <li><a href="#">Log Out</a></li>
     </ul>
    </div>
    <div id="body">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Id: <?=$data['id'];?></label>
        <fieldset id="left">
        <legend><i>Personal Details</i></legend>
          <label>First Name:</label>
          <input type="" value="" name="fname" placeholder="">
          <label>Middle Name:</label>
          <input type="" value="" name="middle_name" placeholder="">
          <label>Last Name:</label>
          <input type="" value="" name="last_name" placeholder="">
          <label></label>
          <label>Nationality:</label>
          <input type="" value="" name="nationality" placeholder="">
          <label>Gender:</label><br>
          <input type="radio" value="male" name="gender" placeholder="">Male<br>
          <input type="radio" value="female" name="gender" placeholder="">Female<br>
          <label>State</label>
          <input type="text" name="state" value="">
          <label>L.G.A</label>
          <input type="text" name="lga" value="">
          </fieldset>
          <fieldset id="right">
          <legend><i>School Details:</i></legend>
          <label>Institute Name:</label>
          <input type="text" value="" name="institute_name" placeholder="">
          <label>Department:</label>
          <input type="text" value="" name="department" placeholder="">
          <label>Faculty:</label>
          <input type="text" value="" name="faculty" placeholder="">
          <label>Course Of Study:</label>
          <input type="text" value="" name="course" placeholder="">
          <label>Level</label>
          <input type="text" value="" name="level" placeholder="">
          <label>Reg No:</label>
          <input type="text" value="" name="reg_no" placeholder="">
          <label>IT Duration:</label>
          <input type="text" value="" name="it_duration" placeholder="">
          <label>Start:</label>
          <input type="text" value="" name="start" placeholder="dd-mm-yyyy">
          <label>End:</label>      
          <input type="text" value="" name="end" placeholder="dd-mm-yyyy"> 
          </fieldset>
          <input type="submit" value="Save Changes" name="submit">
        </form>
    </div>
    <footer>&copy;2018 All Right Reserved</footer>
</body>
</html>