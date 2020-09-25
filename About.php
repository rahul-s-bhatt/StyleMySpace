<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Style My Sapce</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">

    <link rel="stylesheet" href="styles/About.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <meta name="viewport" content="" t="width=device-width, initial-sclae=1.0">
    <!--navbar!-->
    <link rel="stylesheet" href="styles/navbar.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--testimonial!-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="styles/testomonial.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

   <!--ourteam!-->
    <link rel="stylesheet" href="styles/ourteam1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JSON  -->
    <link rel="manifest" href="manifest.json">
    

  </head>
  <body>



    <!--navbar!-->
    <?php
      include('navbar.php');
    ?>

    <!--About Us!-->

    <div class="business-card middle">
      <div class="front">
        <h2>Style My Space</h2>
        <span>Interior Designer</span>
        <ul class="contact-info">
          <li>
            <i class="fas fa-mobile-alt"></i> 7023456785
          </li>
          <li>
            <i class="far fa-envelope"></i>  
              <a href="#">stylemyspace@gmail.com</a>  
          </li>
          <li>
            <i class="fas fa-map-marker-alt"></i> Borivali, Mumbai
          </li>
        </ul>
      </div>
      <div class="back">
        <span>About Us</span>
        <span class="info">We start with understanding what you want, iterate till you are satisfied and only deliver work that matches or exceeds your expectations!</span>
      </div>
    </div>

    <!--testimonial-section!-->
    <div class="testimonial-section">
      <div class="inner-width">
        <h1>What Client Says</h1>
        <div class="border"></div>

        <div class="slides owl-carousel">

          <div class="testimonial">
            <div class="test-info">
              
              <div class="test-name">
                <span>California Project</span>
                 
              </div>
            </div><video class="video" controls>
              <source src="styles/video/video.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>

            
          </div>

          <div class="testimonial">
            <div class="test-info">
              
              <div class="test-name">
                <span>India Project</span>
              
              </div>
            </div>

            <video class="video" controls>
              <source src="styles/video/video2.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>
          </div>

          <div class="testimonial">
            <div class="test-info">
              
              <div class="test-name">
                <span>3D Desing Project</span> 
              </div>
            </div>

            <video class="video" controls>
              <source src="styles/video/video3.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>
          </div>
        </div>
      </div>
    </div>




<!--Our Team!-->

<div class="team-section">
    <div class="inner-width">
      <h1>Our Team</h1>
      <span class="border"></span>
      <div class="pers">


        <div class="pe">
          <a href="#1"><img src="img/ourteamimg/1.jpg" alt=""></a>
          <div class="p-name"><strong>Sapana Babar</strong></div>
          <div class="p-des">QA Director</div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f"
              style="color: #0099ff;line-height: 30px;">
            </i></a>
            <a href="#"><i class="fab fa-twitter"
              style="color: #0099ff;line-height: 30px;"></i></a>
            <a href="#"><i class="fab fa-instagram" style="color: #da23c2;line-height: 30px;"></i></a>
          </div>
          

        </div>

        <div class="pe">
          <a href="#2"><img src="img/ourteamimg/2.jpg" alt=""></a>
          <div class="p-name"><strong>Rahul Bhatt</strong></div>
          <div class="p-des">M.Arch./CEO</div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f" style="color: #0099ff;line-height: 30px;"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color: #0099ff;line-height: 30px;"></i></a>
            <a href="#"><i class="fab fa-instagram" style="color: #da23c2;line-height: 30px;"></i></a>
          </div>

        </div>

        <div class="pe">
          <a href="#3"><img src="img/ourteamimg/3.jpg" alt=""></a>
          <div class="p-name"><strong>Noorsaba Khan</strong></div>
          <div class="p-des">Head of Marketing</div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f" style="color: #0099ff;line-height: 30px;"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color: #0099ff;line-height: 30px;"></i></a>
            <a href="#"><i class="fab fa-instagram"style="color: #da23c2;line-height: 30px;"></i></a>
          </div>
        </div>

      </div>
     

    </div>
    <div class="section" id="1">
      <p class="p">I believe that we could be living in an entirely different world - one that is full of real contemporary inspiring objects, spaces, places, worlds and experiences. We have designed systems, cities, and commodities. We have addressed the world’s problems. Now design is not about solving problems, but about a rigorous beautification of our built environments. We should be conscious and attune with this world in this moment. If human nature is to live in the past - to change the world is to change human nature.</p>  
    </div>

    <div class="section" id="2">
     <p class="p">Style My Space’s approach is unique: it aims to build a long-term relationship with its clientele. Maintaining your home is essential to preserve its value and we work with you to assist you with your projects in order to make your dreams your reality.Meter by meter we create new worlds. With trees growing in a living room and lamps in the size of a man. Where the bathroom can be in a glass box and tiles that repeat the form of a bird. We think that things have to amaze. We create art pleasant not only to look at but also to live in.</p>  
    </div>
    <div class="section" id="3">
     <p class="p">Today poetic design is based on a plethora of complex criteria: human experience, social behaviors, global, economic and political issues, physical and mental interaction, form, vision, and a rigorous understanding and desire for contemporary culture. The combination of these factors shape our objects, inform our forms, our physical space, visual culture and our contemporary human experience. This is the business of beauty. Every business should be completely concerned with beauty - it is after all a collective human need.</p> 
    </div>


  </div>

    
    

  </body>

  <script type="text/javascript">
  
  $(".btn").on("click",function(){
    $('.menu').toggleClass("show");
  });

  $(".owl-carousel").owlCarousel({
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1
      },
      680:{
        items:2
      },
      960:{
        items:3
      }
    }
  });
</script>

</html>
