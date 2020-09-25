<?php
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
 <html lang="en"> 
    <head>
        <!-- Meta Tags -->        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
        <title>Style My Space</title>

        <!-- Favicon -->
        <link rel="icon" href="favicon.png" type="image/png">

        <!-- Web Fonts -->        
        <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">

        <!-- Css Plugins for Fonts i.e. Google Fonts , Font Awesome!  -->
        <link rel="stylesheet" href="styles/font-awesome.min.css"/> 
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
        
        <!-- JSON  -->
        <link rel="manifest" href="manifest.json">

        <!-- Css Theme -->           
         <link rel="stylesheet" type="text/css" href="styles/style.css">
         <link rel="stylesheet" type="text/css" href="navbar.css">

         <!-- Js Script -->
         <link rel="stylesheet" type="text/js" href="js/script.js">

    </head>
    <body>      

       
        <!-- Navbar -->
        <?php include 'navbar.php'; ?>


        <!-- Image SLider -->
        <section>
            <div id="slider">
                <figure>
                    <img src="img/slider/slide-1.jpg">
                    <img src="img/slider/slide-2.jpg">
                    <img src="img/slider/slide-3.jpg">
                    <img src="img/slider/slide-4.jpg">
                    <img src="img/slider/slide-5.jpg">                    
                </figure>
            </div>
        </section>








        <!-- Category -->
            <section id="category">
                <span class="category-header">CATEGORY</span>
                <div class="categories">
                    <div class="box-creative">
                        <div class="category-text">
                            <a class="no-style" href="livingroom.php">LIVINGROOM</a>
                        </div>
                    </div>
                    <div class="box-creative">
                        <div class="category-text">
                            <a class="no-style" href="bedroom.php">BEDROOM</a>
                        </div>
                    </div>
                    <div class="box-creative">
                        <div class="category-text">
                            <a class="no-style" href="kitchen.php">KITCHEN</a>
                        </div>
                    </div>
                    <div class="box-creative">
                        <div class="category-text">
                            <a class="no-style" href="bathroom.php">BATHROOM</a>
                        </div>
                    </div>
                    <div class="box-creative">
                        <div class="category-text">
                            <a class="no-style" href="dinningroom.php">DININGROOM</a>
                        </div>
                    </div>
                    <div class="box-creative">
                        <div class="category-text">
                            <a class="no-style" href="nursingroom.php">NURSING</a>
                        </div>
                    </div>
            
                </div>
            </section>




        <!-- Trending Products -->
        <section>
            <div class="trending-products">
                <span id="trending-header" style="font-size: 2em;">TRENDING PRODUCTS</span>
                <div class="gallery">
                    <div class="trending-item">
                        <img src="img/products/product-1.png" class="trending-img" alt="Image 1 ">
                        <div>GARDEN TABLE
                            <br>
                            <span class="trending-price">$20</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>

                    <div class="trending-item">
                        <img src="img/products/product-3.png" class="trending-img" alt="Image 3 ">
                        <div>PENDANT LAMP
                            <br>
                            <span class="trending-price">$21</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>

                    <div class="trending-item">
                        <img src="img/products/product-5.png" class="trending-img" alt="Image 5 ">
                        <div>TABLE LAMP
                            <br>
                            <span class="trending-price">$15</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>

                    <div class="trending-item">
                        <img src="img/products/product-7.png" class="trending-img" alt="Image 7 ">
                        <div>FLOOR LAMP
                            <br>
                            <span class="trending-price">$10</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>

                    <div class="trending-item">
                        <img src="img/products/product-2.png" class="trending-img" alt="Image 2 ">
                        <div>CLUB CHAIR
                            <br>
                            <span class="trending-price">$23</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>

                    <div class="trending-item">
                        <img src="img/products/product-4.png" class="trending-img" alt="Image 4 ">
                        <div>DARK GREY CHAIR
                            <br>
                            <span class="trending-price">$25</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>

                    <div class="trending-item">
                        <img src="img/products/product-6.png" class="trending-img" alt="Image 6 ">
                        <div>STACKING CHAIR
                            <br>
                            <span class="trending-price">$30</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>
                    
                    <div class="trending-item">
                        <img src="img/products/product-8.png" class="trending-img" alt="Image 7 ">
                        <div>WHITE CHAIR
                            <br>
                            <span class="trending-price">$38</span><br>
                            <a id="shop-now" style="border: double;background: #e4ff0000;font-size: smaller;border-color: cadetblue;" href="shop.php">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        


        




        <!-- MAP -->
        <section>
            <div class="map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.9598055013393!2d72.80837191429543!3d18.97738245999784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce7145e07907%3A0x681b3a80f162e27f!2sHeera%20Panna%20Shopping%20Center!5e0!3m2!1sen!2sin!4v1566985470298!5m2!1sen!2sin" frameborder="0" style="border:1;" allowfullscreen="" style="text-align: center;" ></iframe>

            </div>
        </section>

        <?php include 'packages.php'; ?>

        <!-- Footer -->
    
        <?php include'footer.php'; ?>

        <script src="https://use.fontawesome.com/48ea71726e.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjTIiHIj-g-fKHz96VvxXrD5usY4HWDCw&callback=initMap"></script>
        <script src="script.js"></script>  
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    </body>
</html>
