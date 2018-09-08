<?php
include 'student_class.php';

$student=new student_class();

$data=$student->getstudents();

$student->insertstudent();
?>
<!DOCTYPE html> 
<html lang = "en">
 <head >
  <meta charset = "UTF-8"> 
   <meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv = "X-UA-Compatible" content = "ie=edge"> 
   <title >Document</title> 
   <style>
    body {
          font-family : arial ; font-size : 16 px ;
           }
    table , table th , table td {
          border : 3px solid #0000ee ;
          border-collapse : collapse ;
          margin : 0 ; 
      }
table th , table td {
          padding : 6px ;
           }
    </style> 
   </head >
   <body>
   <h1>SUCCESSFULLY REGISTERED</h1>
       <table> 
       <tr> 
       	<th>id</th>
       	<th>first_name</th>
       	<th>middle_name</th>
        <th>last_name</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
       </tr>
        <?php foreach ($data as $users):?> 
        <tr>
         <td><?=$users[ 'id' ]?></td> 
         <td><?=$users['first_name']?></td> 
         <td><?=$users['middle_name']?></td> 
         <td><?=$users['last_name']?></td> 
         <td><?=$users['username']?></td> 
         <td><?=$users['email']?></td> 
         <td><?=$users['password']?></td> 
         <td> 
         	  <a href = "update_form.php?id=<?= $users['id'];?>">Edit</a> |  
          </td> 
         </tr>
          <?php endforeach ;?> 
        </table> 
    </body>
    </html>
