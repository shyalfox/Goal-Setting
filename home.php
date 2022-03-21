<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Bigboys</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

 <!--Bootstraps css-->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!--Css-->
<link rel="stylesheet" type="text/css" href="css/index.css">

<!--fONT AWESOME-->
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

<!--NAv-bar start-->
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('img/home.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
 <div class="w3-display-topleft w3-padding-large w3-xlarge">

  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">Welcome to Bigboys</h1>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="add_goal.php"><button type="button"  class="btn btn-outline-danger">Add Goals</button></a>
    <a href="see_goal.php"><button type="button"  class="btn btn-outline-danger">Edit/Check Goals</button></a>
    <iframe src="darkness.mp3" allow="autoplay" id="audio" style="display: none"></iframe>
    <audio id="player"  >
      <source src="sound/darknesss.mp3" type="audio/mp3">
  </audio>

  <audio id="sound1" src="sound/darknesss.mp3" ></audio>
  <button type="button"  class="btn btn-outline-danger" onclick="document.getElementById('sound1').play();">Play
  it &nbsp;&nbsp;<i class=" fas fa-play " onclick="document.getElementById('sound1').play();"></i></a></button>&nbsp;
                <i  class="fas fa-pause btn btn-outline-danger" onclick="document.getElementById('sound1').pause();"></i></a>
                <form action="db/logout.php" method="post">
                <input type="submit"  value ="logout" name="logout" class="btn btn-outline-danger" ></input>
</form>


                

                
                

            
  
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
   
  </div>
</div>

</body>
</html>
<script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>
<!--Bootsrap js-->
<script type="text/javascript" src="js/bootstrap.min.js" ></script>

<!--jQuery-->
<script type="text/css" src="js/jquery-3.6.0.min.js"></script>

<!--js-->
<script type="text/css" src="js/index.js"></script>

<!--Popper js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
