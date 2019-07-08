<?php

class SuperAdmin {

    private $connect;

    public function __construct() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "batch9";
        $this->connect = mysqli_connect($host, $user, $password, $dbname);

        if (!$this->connect) {
            echo 'not connected';
        }
    }

    public function add_info($data) {
//        $query = "insert into student_info(student_name,student_number,student_address) values('$name','$number','$add') ";         
        $query = "insert into student_info(student_name,student_number,student_address) values('$data[name]','$data[number]','$data[address]') ";
        if (mysqli_query($this->connect, $query)) {
            $result = "data insert Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function select_info() {
        $query = "select * from booking";
        if (mysqli_query($this->connect, $query)) {
            $result = mysqli_query($this->connect, $query);
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function admin_login($data) {
        $user_email = $data['email'];
        $user_pass = md5($data['password']);

        $query = "select * from tbl_admin where admin_email='$user_email' and admin_pass='$user_pass' ";
        if (mysqli_query($this->connect, $query)) {

            $result = mysqli_query($this->connect, $query);
            $admin_info = mysqli_fetch_assoc($result);

            if ($admin_info) {
                session_start();
                $_SESSION['user_email'] = $admin_info['admin_email'];
                $_SESSION['user_name'] = $admin_info['admin_name'];
                $_SESSION['user_id'] = $admin_info['admin_id'];
                $_SESSION['role'] = $admin_info['role'];
                header('location:admin_master.php');
            } else {
                $message = "your user email or pass is incorrect";
                return $message;
            }
        }
    }

    public function save_category($data) {

        $query = "insert into tbl_category(ct_name,ct_desc) values('$data[name]','$data[ct_desc]') ";
        if (mysqli_query($this->connect, $query)) {
            $result = "Category Info Save Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

     public function booking_info($data) {

        $query = "insert into booking(sname,sphone,semail,rname,rphone,remail,uid) values('$data[sname]','$data[sphone]','$data[semail]','$data[rname]','$data[rphone]','$data[remail]','$data[uid]') ";
        if (mysqli_query($this->connect, $query)) {
            $result = "Booking Info send Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }
    
    
    public function select_category() {
        $query = "select * from tbl_category";
        if (mysqli_query($this->connect, $query)) {
            $result = mysqli_query($this->connect, $query);
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function select_category_by_id($id) {
        $query = "select * from tbl_category where ct_id='$id' ";
        if (mysqli_query($this->connect, $query)) {
            $result = mysqli_query($this->connect, $query);
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function update_category($data) {
        $query = "update tbl_category set ct_name='$data[name]', ct_desc='$data[ct_desc]' where ct_id='$data[hidden_id]' ";
        if (mysqli_query($this->connect, $query)) {
            $result = "Category Info Update Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function unpublished_category($rec_id) {
        $query = "update tbl_category set pub_status='0' where ct_id='$rec_id' ";
        if (mysqli_query($this->connect, $query)) {
            $result = "Category Info Unpublished Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function published_category($rec_id) {
        $query = "update tbl_category set pub_status='1' where ct_id='$rec_id' ";
        if (mysqli_query($this->connect, $query)) {
            $result = "Category Info Unpublished Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function delete_category($rec_id) {
        $query = "delete from tbl_category where ct_id='$rec_id' ";
        if (mysqli_query($this->connect, $query)) {
            $result = "Category Info delete Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function edit_user($userId) {

        $query = "select * from tbl_admin where admin_id='$userId' ";
        if (mysqli_query($this->connect, $query)) {
            $result = mysqli_query($this->connect, $query);
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }
    
    public function update_user($rec_info) {
        $query = "update tbl_admin set admin_name='$rec_info[name]' , admin_email= '$rec_info[email]' where admin_id='$rec_info[uid]' ";
        if (mysqli_query($this->connect, $query)) {
            $result = "update Info  Successfully !!";
            return $result;
        } else {
            die("faield " . mysqli_error($this->connect));
        }
    }

    public function logout() {
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);

        header('location:index.php');
    }

}
