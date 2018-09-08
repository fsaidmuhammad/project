


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style>
    #header{
        width:100%;
        height:130px;
        background:red;
    }
    #sidebar{
        width:200px;
        height:300px;
        background:red;
        float:left;
    }
    #body {
          width:100%;;
          height:480px;
          background:white;
      }
      img {
          border-radius:50px;
      }
      ul li{
          padding-bottom:20px;
          border-bottom:2px solid white;
      }
      ol li {
          list-style:none;
          float:right;
      }
     ol li a {
         text-decoration:none;
     }
     ol li a:hover{
         background-color
     }
    </style>
</head>
<body>
    <div id="header">
   <center><img src="images/1.png" alt="admin profile" height="70px"><br>
   Welcome to admin panel
   <ol>
    <li><a href="">Log out</a></li>
   </ol>
   </center>
    </div>
    <div id="sidebar">
    <ul>
    <li><a href="#">View Students</a></li>
    <li><a href="#">Edit Profile</a></li>
    <li><a href="#">Delete</a></li>
    </ul>
    </div>
    <div id="body"></div>
</body>
</html>