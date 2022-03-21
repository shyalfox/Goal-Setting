<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/bigboy.jpg" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Asmt Bigboys</h4>
                </div>

                <form method="post" action="db/signup.php">
                  <p id="para">Signup to Bigboy account</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Fulll Name</label>
                    <input type="text" name="fullName" id="form2Example11" class="form-control" placeholder="Your Name">
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">email</label>
                    <input type="email" name="email" id="form2Example22" class="form-control" placeholder="Enter Email">
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Enter New Passsword" >
                  
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-center pb-4">
                  <input type="submit" value="Signup" name="submit" class="btn btn-outline-danger">
                   
                  </div>

                 

                

                </form>
                   <?php include('include/message.php'); ?> 


              </div>
             
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">ASMT bigboys invites you</h4>
                <p class="small mb-0">Welcome to Bigboys family
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</html>

<script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</script>