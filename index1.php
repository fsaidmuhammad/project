<?php
require_once 'student_class.php';
require_once 'User.php';
$user = new student_class();
$datas = $user->views();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['reg_no']; ?></h1>
	<ul>
		<li><a href="viewprofile.php">View Details</a></li>
		<li><a href="">Edit Details</a></li>
		<li><a href="">My Account</a></li>
		<li><a href="">Logout</a></li>
	</ul>

<table border="1px">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Nationality</th>
		<th>Gender</th>
		<th>State</th>
		<th>LGA</th>
		<th>Institute Name</th>
		<th>Department</th>
		<th>Faculty</th>
		<th>Course</th>
		<th>Level</th>
		<th>Reg_No</th>
		<th>IT_Duration</th>
		<th>Start</th>
		<th>End</th>
	</tr>
 
	<tr>
		<td><?=$students[ 'id' ]?></td> 
		<td><?=$students[ 'fname' ]?></td> 
		<td><?=$students[ 'middle_name' ]?></td>
		<td><?=$students[ 'last_name' ]?></td>  
		<td><?=$students[ 'nationality' ]?></td> 
		<td><?=$students[ 'gender' ]?></td> 
		<td><?=$students[ 'state' ]?></td> 
		<td><?=$students[ 'lga' ]?></td>
		<td><?=$students[ 'institute_name' ]?></td> 
		<td><?=$students[ 'department' ]?></td> 
		<td><?=$students[ 'faculty' ]?></td> 
		<td><?=$students[ 'course' ]?></td> 
		<td><?=$students[ 'level' ]?></td> 
		<td><?=$students[ 'reg_no' ]?></td> 
		<td><?=$students[ 'it_duration' ]?></td> 
		<td><?=$students[ 'start' ]?></td> 
		<td><?=$students[ 'end' ]?></td> 
	</tr>

</table>
</body>
</html>