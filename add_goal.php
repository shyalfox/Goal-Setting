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
$categoryQuery = "SELECT * FROM goal_table";
$categoryResult = mysqli_query($conn, $categoryQuery);

?>


<html>
    <head>
        <title>Chad</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

<div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                <form id="contact-form" method="post" action="db/add_goal.php" >

<div class="messages"></div>

<div class="controls">

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label >Title</label>
                <input id="form_name" name="title" type="text"  class="form-control" placeholder="Please enter your goal"  >
                <div class="help-block with-errors"></div>
            </div>
        </div>
       
    
       
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label >Description</label>
                <textarea  name="description" type="text" class="form-control" placeholder="Describe your goal" rows="4" ></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
 

   <div class="col-md-6">
            <div class="form-group">
                <label for="form_lastname">Accomplished Date</label>
                <input type="date" id="form_lastname" name="acc_date" type="number"  class="form-control" placeholder="Date of Completion " >
                <div class="help-block with-errors"></div>
            </div>
        </div><div class="col-md-6">
            <div class="form-group">
                <label for="form_lastname">Status</label></br>
                <h6>Completed &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Not Completed</h6>
                <input name="status" type="radio" value="Completed">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="status" type="radio" value="Not Completed">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" class="btn btn-success btn-send" value="Add Goal">
        </div>
    </div>
    
</div>

</form>
<?php include('include/message.php'); ?> 

                 

                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
    </body>
    <a href="home.php"><button class="btn btn-outline-danger"> Go Home</button></a>