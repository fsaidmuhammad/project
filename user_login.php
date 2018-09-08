<?php
include_once 'User.php';
$student = new User();
$result = $student->login();

    print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    * {
        margin:0px;
        padding:0px;
    }
    body {
        background-color:silver;
    }
    h1 {
        text-align:center;
    }
    fieldset {
        margin:140px auto;
        width:560px;
        height:210;
        padding-top:30px;
        background-color:ghostwhite;
        border:none;
    }
input {
    width: 80%;
    border:none;
    border-bottom: 2px solid #00ccff;
    background-color:ghostwhite;
}
div {
    padding: 10px;
}
 div button {
    width:78%;
   background-color:#00ccff;
   height: 30px;
}
div button:hover {
    background-color:forestgreen;
}
    </style>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
    <h1>LOGIN FORM</h1>
    <div>
    <label for="username">Username</label>
    <input type="text" name="username" value="">
    </div><br><br>
    <div>
    <label for="password">Password</label>
    <input type="password" name="password" value="">
    </div><br><br>
    <div>
    <center>
    <button type="submit" name="submit">Submit</button>
    </center>
    </div>
    </fieldset>
    </form>
</body>
</html>