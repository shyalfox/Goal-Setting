<?php
    if(!isset($_GET['id'])){
        die("You can not edit");
    }
    $cid = $_GET['id'];
    session_start();
    if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
         header('Location:login.php');
    }
    $id = $_SESSION['user_id']; 
    include('db/connect.php');
    $query = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    $categoryQuery = "SELECT * FROM goal_table WHERE id = '$cid'";
    $categoryResult = mysqli_query($conn, $categoryQuery);
    if(mysqli_num_rows($categoryResult)==0){
        die("No record found with this id");
    }
    else{
        $row = mysqli_fetch_assoc($categoryResult);
    }

?>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
<div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                 
                  <h4 class="mt-1 mb-5 pb-1">Asmt Bigboys</h4>
                </div>

<form method="POST" action="db/edit-goal.php">
             <input type="hidden" name="id" value="<?php echo $cid;?>">
             <p id="para">Edit  Bigboy Goals</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Title</label>
                  <input type="text" value = "<?php echo $row['title']; ?>" class="form-control" name="title" id="form2Example11" class="form-control" placeholder="Title">
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Description</label>
                  <input type="text" value= "<?php echo $row['description']; ?>" id="form2Example22" class="form-control" placeholder="description" name="description" >
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Accomplishment Date</label>
                  <input type="date" value= "<?php echo $row['acc_date']; ?>" id="form2Example22" class="form-control" placeholder="yyyy/mm/dd" name="acc_date">
                  
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">status Completed Not Completed</label><br>
                    <input name="status" type="radio" value="Completed" >
                    <input name="status" type="radio" value="Not Completed" >
                  
                  </div>
                  
               
               
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <?php include('include/message.php'); ?> 


</div>

</div>
</div>
      </div>
    </div>
  </div>
  </body>
  <a href="home.php"><button class="btn btn-outline-danger"> Go Home</button></a>
        
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>
  
  

             

                 

                

