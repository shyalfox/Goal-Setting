<?php
  session_start();
  if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
     header('Location:login.php');
  }
  $id = $_SESSION['user_id']; 
  include('db/connect.php');
  $query = "SELECT * FROM user WHERE id='$id'";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_assoc($result);
  $categoryQuery = "SELECT * FROM goal_table WHERE user_id='$id'";
  $categoryResult = mysqli_query($conn, $categoryQuery);


?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
<div class="col-md-12>
<div class="row justify-content-md-center">
            <?php
              if(mysqli_num_rows($categoryResult)==0){
                echo "<h3>No goals yet</h3>";
              }
              else{
                ?>
                <table class="table">
                  <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completion Date</th>
                    <th>Status</th>
                    <th>Delete/Edit</th>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($categoryResult)){?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['title'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td><?php echo $row['acc_date'];?></td>
                      <td><?php echo $row['status'];?></td>
                      <td><a href="#" onclick="deleteConfirmation(<?php echo $row['id']; ?>);"><i class="fas fa-trash" style="color:red;"></i></a>   | <a href="edit-goal.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <?php } ?>
          </div>
    </div>
    <?php include('include/message.php');?>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>
  <script>
    function deleteConfirmation(id){
      bootbox.confirm({
      message: "Are you sure ?",
      buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result){
          window.location = 'db/delete-goal.php?id='+id;
        }
    }
});
    }
  </script>
  </body>
  <a href="home.php"><button class="btn btn-outline-danger"> Go Home</button></a>
</html>