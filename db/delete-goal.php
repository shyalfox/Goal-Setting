<?php
  if (isset($_GET['id'])){
      $id=$_GET['id'];
      $query = "DELETE FROM goal_table WHERE id='$id'";
      include ('connect.php');
      if (mysqli_query($conn,$query)) {
          header ("Location:../see_goal.php?msg= sucessfully deleted");
      }else {
          header("Location:../see_goal.php?errmsg=" .mysqli_error($conn));
      }
}
  