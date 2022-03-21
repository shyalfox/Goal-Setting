<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    include('connect.php');
if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['acc_date'])&& isset($_POST['status'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $acc_date = $_POST['acc_date'];
    $status = $_POST['status'];
    $query = "INSERT INTO goal_table(title,description,acc_date,status,user_id) VALUES ('$title','$description','$acc_date','$status','$user_id')";
    if(mysqli_query($conn,$query)){
        $msg = "Goal Added";
        header('Location:../add_goal.php?msg='.$msg);
    
}else{
    $msg="some error occured: ".mysqli_error($conn);
    header("Location:../add_goal.php?errmsg = ".$msg);
}

}else{
    $msg ="all fields are required.";
}