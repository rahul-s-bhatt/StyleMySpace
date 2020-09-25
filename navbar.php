<?php
    include('server.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/navbar.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
  </head>
  <body>
  <div class="navbar">


    <div class="animated-text">
          <div class="line">Style</div>
          <div class="line">My</div>
          <div class="line">Space</div>
          <div class="line"><a class="logo" href="logo.png"></a></div>
      </div>
  <a class="btn">
  <span></span>
  <span></span>
  <span></span>
  </a>
    <div class="menu">
      <a href="index.php">Home</a>
      <a href="About.php">About Us</a>
      <a href="Contact.php">Contact Us</a>
      <?php
        if(isset($_SESSION['username'])){
         echo "<a href='logout.php'>Logout</a>";
         echo "<a style='red;' href='deleteMyAccount.php'>Delete My Account</a>";
        }else{
         echo "<a href='login.php'>Login</a>";
        }
      ?>
     
    </div>


  </div>
<script type="text/javascript">

$(".btn").on("click",function(){
  $('.menu').toggleClass("show");
});

</script>


  </body>
</html>

