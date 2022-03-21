<?php
 include('connect.php');
 session_start();
 $query = "SELECT * FROM user where id='$user_id'";
 $result = mysqli_query($conn,$query);
 if(isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    header('location:../login.php');
}