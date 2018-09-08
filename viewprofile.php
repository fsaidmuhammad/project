<?php
require_once 'student_class.php';
require_once 'User.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
      #header {
          width:100%;
          height:100px;
          background:#00CCFF;
      }
      #sideBar {
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
          padding-bottom:20px;
          border-bottom:2px solid white;
          list-style:square;
      }
      ul li a{
          text-decoration:none;
          color:black;
      }
    </style>
</head>
<body>
    <div id="header">
    
    </div>
    <div id="sideBar">
     <ul>
     <li><a href="">Add Details</a></li>
     <li><a href="#">View Login Details</a></li>
     <li><a href="#">Log Out</a></li>
     </ul>
    </div>
    <div id="body">
    <div id="table_left">
       <table>
       <tr>
       <th>Personal Details</th>
       </tr>
       <tr>
       <td>First Name:<?=$data['fname']?></td>
       </tr>
       <tr>
       <td>Middle Name:<?=$data['middle_name']?></td>
       </tr>
       <td>Last Name:<?=$data['last_name']?></td>
       </tr>
       <tr>
       <td>Nationality:<?=$data['nationality']?></td>
       </tr>
       <tr>
       <td>Gender:<?=$data['gender']?></td>
       </tr>
       <tr>
       <td>State:<?=$data['state']?></td>
       </tr>
       <tr>
       <td>L.G.A<?=$data['lga']?></td>
       </tr>
       </table>
       </div>
       <div id="table_right">
       <table>
       <tr>
       <th>Institute Details</th>
       </tr>
       <tr>
       <td>Institute Name:<?=$data['institute_name']?></td>
       </tr>
       <tr>
       <td>Department:<?=$data['department']?></td>
       </tr>
       <tr>
       <td>Faculty:<?=$data['faculty']?></td>
       </tr>
       <tr>
       <td>Course of study:<?=$data['course']?></td>
       </tr>
       <tr>
       <td>Level:<?=$data['level']?></td>
       </tr>
       <tr>
       <td>Reg No:<?=$data['reg_no']?></td>
       </tr>
       <tr>
       <td>IT Duration:<?=$data['it_duration']?></td>
       </tr>
       <tr>
       <td>Start:<?=$data['start']?></td>
       </tr>
       <tr>
       <td>End<?=$data['end']?></td>
       </tr>
       </table>
       </div>
       <div id="submit">
       <button type="submit" value="Update Profile"><a href="update_profile.php">Update Profile</a></button>
       </div>
    </div>
</body>
</html>