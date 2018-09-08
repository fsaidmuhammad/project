<?php
require_once 'connections.php';

class student_class extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getstudents()
    {
        $sql = 'select * from users';

        return $this->select($sql);
    }

    public function viewSelect() 
    {
        $sql = 'select * from user_type';
        $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        $data = [];
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;
            echo "<option value=".$row['id'].">".$row['title']."</option>";
        }
    }
    
    public function views()
    {
            if (isset($_SESSION['reg_no']) && isset($_SESSION['fname']) && isset($_SESSION['middle_name']) && isset($_SESSION['last_name'])){
                $_SESSION['id'] = $id;
                $_SESSION['fname'] = $fname;
                $_SESSION['middle_name'] = $middle_name;
                $_SESSION['last_name'] = $last_name;
                $_SESSION['reg_no'] = $reg_no;
            }else{
                echo "<script>alert('you need to login first')";
            }
            $sql = 'select * from user_details';
            $result = mysqli_query ($this->link, $sql) or die (mysqli_error($this->link));
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) { 
                $data[] = $row;
             }
        return $data;
    }

    public function getstudent($id)
    {
        $sql = sprintf('select * from users where id=%s', $this->escape($id));

        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        return mysqli_fetch_assoc($result);
    }

    public function getprofile($id)
    {
        $sql = sprintf('select * from user_details where id=%s', $this->escape($id));

        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        return mysqli_fetch_assoc($result);
    }

    public function viewprofile()
    {
        $sql = sprintf('select * from user_details where id=%s', $this->escape($id));

        $result= mysqli_query($this->link, $sql) or die (mysqli_error($this->link));

        return mysqli_fetch_assoc($result);
    }

    public function insertstudent()
    {
        if ($_POST) {
           // $id = $_POST['id'];
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $user_type_id = $_POST['user_type_id'];
            $data = [
               // 'id' => $id,
                'first_name' => $first_name,
                'middle_name' => $middle_name, 
                'last_name' => $last_name, 
                'username' => $username, 
                'email' => $email, 
                'password' => $password,
                'user_type_id' => $user_type_id
            ];

            return $this->insert('users', $data);
        }
    }

    public function updatestudent()
    {
        if ($_POST) {
            $id = $_POST['id'];
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = sprintf("update users set first_name=%s, middle_name=%s, last_name=%s, username=%s, email=%s, password=%s where id=%s",
                $this->escape($first_name),
                $this->escape($middle_name),
                $this->escape($last_name),
                $this->escape($username),
                $this->escape($email),
                $this->escape($password),
                $this->escape($id)

            );

            $result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));

            if ($result) {
                return true;
            }
        }

        return false;
    }
    public function insertDetails() {
        if ($_POST) {
           //$id = $_POST['id'];
           $fname = $_POST['fname'];
           $middle_name = $_POST['middle_name'];
           $last_name = $_POST['last_name'];
           $nationality = $_POST['nationality'];
           $gender = $_POST['gender'];
           $state = $_POST['state'];
           $lga = $_POST['lga'];
           $institute_name = $_POST['institute_name'];
           $department = $_POST['department'];
           $faculty = $_POST['faculty'];
           $course = $_POST['course'];
           $level = $_POST['level'];
           $reg_no = $_POST['reg_no'];
           $it_duration = $_POST['it_duration'];
           $start = $_POST['start'];
           $end = $_POST['end'];
           $data = [
             //  'id' => $id,
               'fname' => $fname,
               'middle_name' => $middle_name,
               'last_name' => $last_name,
               'nationality' => $nationality,
               'gender' => $gender,
               'state' => $state,
               'lga' => $lga,
               'institute_name' => $institute_name,
               'department' => $department,
               'faculty' => $faculty,
               'course' => $course,
               'level' => $level,
               'reg_no' => $reg_no,
               'it_duration' => $it_duration,
               'start' => $start,
               'end' => $end
           ];
           return $this->insert('user_details', $data);
        }
    }
    public function updateProfile()
    {
        if ($_POST) {
           $id = $_POST['id'];
           $fname = $_POST['fname'];
           $middle_name = $_POST['middle_name'];
           $last_name = $_POST['last_name'];
           $nationality = $_POST['nationality'];
           $gender = $_POST['gender'];
           $state = $_POST['state'];
           $lga = $_POST['lga'];
           $institute_name = $_POST['institute_name'];
           $department = $_POST['department'];
           $faculty = $_POST['faculty'];
           $course = $_POST['course'];
           $level = $_POST['level'];
           $reg_no = $_POST['reg_no'];
           $it_duration = $_POST['it_duration'];
           $start = $_POST['start'];
           $end = $_POST['end'];
           $sql = sprintf("update user_details set id=%s, fname=%s, middle_name=%s, last_name=%s, nationality=%S,gender=%s,
           state=%S, lga=%S, institue_name=%S, department=%S, faculty=%s, course=%s, level=%s, reg_no=%s, it_duration=%s,
           start=%s, end=%s",
                $this->escape($id),
                $this->escape($fname_name),
                $this->escape($middle_name),
                $this->escape($last_name),
                $this->escape($nationality),
                $this->escape($gender),
                $this->escape($state),
                $this->escape($lga),
                $this->escape($institute_name),
                $this->escape($department),
                $this->escape($faculty),
                $this->escape($course),
                $this->escape($level),
                $this->escape($reg_no),
                $this->escape($it_duration),
                $this->escape($start),
                $this->escape($end)
               );
        }
    }
}    
