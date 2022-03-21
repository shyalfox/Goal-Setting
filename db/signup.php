<?php 
  include('connect.php');
   if(isset($_POST['submit'])){
       $name = $_POST['fullName'];
       $email = $_POST['email'];
       $password = $_POST['password'];

     if($name==''){
         $msg = "name is required";
         header('Location:../signup.php?errmsg='.$msg);
     }        
     if($email==''){
         $msg = "email is required";
         header('Location:../signup.php?errmsg='.$msg);
     }

     if($password==''){
         $msg = "passowrd is required";
         header('Location:../signup.php?errmsg='.$msg);
     }
     $encryptedPassword = md5($password);
     $query = "INSERT INTO user(email,fullName,password) VALUES('$email','$name','$encryptedPassword')";
     if(mysqli_query($conn,$query)){
         $msg = "Signup successfully";
         header('Location:../login.php?msg='.$msg);
     }else{
         $msg = "Error: ".mysqli_error($conn);
         header("Location:../signup.php?errmsg=".$msg);
     }
   }else{
       $msg = "data is not acceptable";
       header("Location:../signup.php?errmsg=".$msg);
   }
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>