<?php 
session_start();
require_once 'connections.php';

class User extends Db {
    public function __construct()
    {
        parent::__construct();
    }

    public function login(){
        if ($_POST) {
            $username = mysqli_real_escape_string($this->link, $_POST['username']);
            $password = mysqli_real_escape_string($this->link, $_POST['password']);
            $sql = "select * from users where username='$username' and password='$password' and user_type_id= 2";
            $result = mysqli_query($this->link, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['login_user'] = $username;
                header("Location:user_details.php");
            } 
            
              else {
                $q = "select * from users where username='$username' and password='$password' and user_type_id=1";
                $reslt = mysqli_query($this->link, $q);
                if ($reslt) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['login_user'] = $username;
                    header("Location:Admin/Admin_Dashboard.php");
                }

            }
        }
    }
         public function session(){
            if(!isset($_SESSION['login_user'])){
                header("Location:user_login.php"); 
            }else {
                $user_check =$_SESSION['login_user'];
                $sql = "select username from users where username='$user_check'";
                $ses_sql = mysqli_query($this->link, $sql);
                $row = mysqli_fetch_assoc($ses_sql);
                $login_session = $row['username'];
            }
        }
        
}
