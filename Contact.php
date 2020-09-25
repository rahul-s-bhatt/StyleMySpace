<?php
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Style My Space</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="styles/Contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--navbar!-->
    <link rel="stylesheet" href="styles/navbar.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
   

<!--NavBar-->

<?php
    include('navbar.php');
?>
<!--contact-section!-->

  <div class="contact-section">

    <h1>CONTACT US</h1>
    <div class="border"></div>
    <form class="contact-form" action="Contact.php" method="POST">
      <input type="text" name="name" class="contact-form-text" placeholder="Your name">
      <input type="email" name="email" class="contact-form-text" placeholder="Your email">
      <input type="text" name="phone" class="contact-form-text" placeholder="Your phone">
      <textarea name="message" class="contact-form-text" placeholder="Your message"></textarea>
      <input type="submit" name="contact_us" class="contact-form-btn btn1" value="Send">
    </form>
  </div>
  </body>
  <script type="text/javascript">

    $(".btn").on("click",function(){
    $('.menu').toggleClass("show");
  });


    function feedbackSubmitted() {
      alert("Feedback Submitted! Click on ok!");
    }
  </script>
</html>
