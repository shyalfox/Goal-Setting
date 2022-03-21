<?php
    if(!isset($_POST['title'])){
        die("Can not");
    }
    else{
        $c = $_POST['title'];
        $ci = $_POST['description'];
        $cii=$_POST['status'];
        $ciii=$_POST['acc_date'];
        $id= $_POST['id'];
        include('connect.php');
        $query = "UPDATE goal_table SET title='$c', description ='$ci',status='$cii', acc_date='$ciii' WHERE id ='$id' ";
        if(mysqli_query($conn, $query)){
            header('location:../see_goal.php?msg=successfully updated');
        }else{
            header('location:../see_goal.php?errmsg='.mysqli_error($conn));
        }


    }

?>
