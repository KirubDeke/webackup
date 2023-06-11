<?php
 
 session_start(); // start session
 if(!$_SESSION['authentication']){

  header("location:signin.html");
  exit();
 }



 
 ?>
<!doctype html>
<html>
    <head>
    <title>Home Page</title>
    <!-- icon-->
    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <!-- link to css--> 
    <link rel="stylesheet" href="style/home.css">
      <!-- link to icons--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   


    </head>
    <body>

      
        <header>
 
           <a href="carhome.php" class="logo"><img src="image/logo1.png"alt="logo"></a>

           <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
              <li><a href="carhome.php">Home</a></li>
              <li><a href="rent.html">Rent</a></li>
              <li><a href="cars.html">Cars</a></li>
              <li><a href="aboutus.html">About</a></li>
              <li><a href="review.html">Review</a></li>
              <li><a href="report.html">Report</a></li>
              <li><a href="logout.php">Logout</a></li>
              </ul>
             <div class="login">
              <a href="signin.html" class="signin">Sign In</a>
              <a href="signup.html" class="signup">Sign Up </a>
                </div>
        </header>
         
        <section class="home" id="home">

        

          <div class="text">
            <h2><span>Welcome to</span><br> Kirubel Car Rental</h2>
            <p>Please fill in the location, Car-Id, pick-up, return date and Valid E-mail address to book your rent.</p>

          </div>
      
    
              
            </section>
            <!--cars-->
              <section class="services" id="services">
                <div class="heading">
                  <span>Cars</span>
                  <h1>Look Our Car Collection to Rent</h1>

                </div>
                <div class="service-containers">
                  <div class="box">
                    <div class="box-img">
                      <img src="image/vits.jpg" alt="car1">

                    </div>
                    <p>Model:2003 </p>
                    <h3>Vits</h3>
                    <h2>Car Id: 1</h2>
                    <h2>ETB 30,000/month | <span>ETB 1,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/corolla.jpg" alt="car2">

                    </div>
                    <p>Model:2012 </p>
                    <h3>Toyota Corolla</h3>
                    <h2>Car Id: 2</h2>
                    <h2>ETB 40,000/month | <span>ETB 1,333/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/suzuki swift 2021.jpg" alt="car3">

                    </div>
                    <p>Model:2021 </p>
                    <h3>Suzuki Swift</h3>
                    <h2>Car Id: 3</h2>
                    <h2>ETB 30,000/month | <span>ETB 1,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/ford f-150 2020.jpg" alt="car4">

                    </div>
                    <p>Model:2020 </p>
                    <h3>Ford F-150</h3>
                    <h2>Car Id: 4</h2>
                    <h2>ETB 150,000/month | <span>ETB 5,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/hundai elantra 2014.jpg" alt="car5">

                    </div>
                    <p>Model:2014 </p>
                    <h3>Hundai Elantra</h3>
                    <h2>Car Id: 5</h2>
                    <h2>ETB 39,000/month | <span>ETB 1,300/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/hundai tucson 2021.jpg" alt="car6">

                    </div>
                    <p>Model:2021 </p>
                    <h3>Hundai Tucson</h3>
                    <h2>Car Id: 6</h2>
                    <h2>ETB 60,000/month | <span>ETB 2,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/toyota tacoma 2022.jpg" alt="car7">

                    </div>
                    <p>Model:2022 </p>
                    <h3>Toyota Tacoma</h3>
                    <h2>Car Id: 7</h2>
                    <h2>ETB 90,000/month | <span>ETB 3,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/toyota revo 2010.jpg" alt="car8">

                    </div>
                    <p>Model:2010 </p>
                    <h3>Toyota Revo</h3>
                    <h2>Car Id: 8</h2>
                    <h2>ETB 12,000/month | <span>ETB 4,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/New toyota land cruiser prado 2021.jpg" alt="car9">

                    </div>
                    <p>Model:2021 </p>
                    <h3>Toyota Land Cruiser Prado</h3>
                    <h2>Car Id: 9</h2>
                    <h2>ETB 180,000/month | <span>ETB 6,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/hundai creta 2016.jpg" alt="car10">

                    </div>
                    <p>Model:2016 </p>
                    <h3>Hundai Creta</h3>
                    <h2>Car Id: 10</h2>
                    <h2>ETB 60,000/month | <span>ETB 2,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/nissan quashqai 2016.jpg" alt="car11">

                    </div>
                    <p>Model:2016 </p>
                    <h3>Nissan Quashqai</h3>
                    <h2>Car Id: 11</h2>
                    <h2>ETB 75,000/month | <span>ETB 2,500/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>
                  <div class="box">
                    <div class="box-img">
                      <img src="image/mercedes gwagon 2020.jpg" alt="car12">

                    </div>
                    <p>Model:2020 </p>
                    <h3>mercedes Gwagon</h3>
                    <h2>Car Id: 12</h2>
                    <h2>ETB 120,000/month | <span>ETB 4,000/day</span></h2>
                    <br>
                    <a  href="rent.html" class="btn">Rent Now</a>
                  </div>

                </div>
                
             <!-- #region -->
              </section>
              <section class="Aboutus" id="Aboutus">
                <div class="heading">
                  <span>About Us</span>
                  <h1>Best and Unique Customer Experience</h1>
                </div>
                <div class="about-container">
                  <div class="about-img">
                  <img src="image/logo2.png" alt="">
                  </div>
                   <div class="about-text">
                    <span>About Us</span>
                    <p>When it comes to renting a car, customers want a reliable, efficient and convenient service. But what sets apart Kirubel Car Rental from the competition is their passion for delivering amazing customer experiences. </p>
                     <p>From the moment you step into their office, you're greeted with warm and friendly smiles from their staff. Their representatives take the time to listen and understand your needs, and guide you through every step of the rental process. </p>
                     
                     <p>Kirubel Car Rental also has an impressive fleet of vehicles to choose from, featuring the latest models and brands that are well-maintained and road-ready. Their cars are equipped with the latest GPS navigation technology, ensuring you can always find your way around, even in unfamiliar territory.</p>
                    <a href="aboutus.html" class="btn">Learn More</a>
                     
                  </div>
                  </div>
                </section>
              <!--reviews-->
              <section class="review" id="review">
                <div class="heading">
                <span>Reviews</span>
                <h1>Find Out What Our Customers Say</h1>
                  </div>
                <div class="reviews-container">
                  <div class="box1">
                   <div class="review-img">
                    <img src="image/adane.jpg" alt="Adane Girma" >
                    </div>
                    <h2>Adane Girma</h2>
                    
          
                    <div class="stars">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      </div>
                      <p>When it comes to renting a car, customers want a reliable, efficient and convenient service. But what sets apart Kirubel Car Rental from the competition is their passion for delivering amazing customer experiences. </p>
                   </div>

    

                    <div class="box1">
                     <div class="review-img">
                      <img src="image/seifu.jpg" alt="Seifu Fantahun">
                      </div>
                      <h2>Seifu Fantahun</h2>
                      
                      <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        </div>
                        <p>From the moment you step into their office, you're greeted with warm and friendly smiles from their staff. Their representatives take the time to listen and understand your needs, and guide you through every step of the rental process </p>
                     </div>
    

                      <div class="box1">
                       <div class="review-img">
                        <img src="image/Zaunte.jpg" alt="Zaunte">
                        </div>
                        <h2>Zaunte</h2>
                        
                        <div class="stars">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          </div>
                          <p>Kirubel Car Rental also has an impressive fleet of vehicles to choose from, featuring the latest models and brands that are well-maintained and road-ready. Their cars are equipped with the latest GPS navigation technology, ensuring you can always find your way around, even in unfamiliar territory.</p>
                       </div>
          
                    </div>
                </section>
                <footer class="fotter">
                    <div class="row">
                      

                        <li><a href="carhome.php"><h4>Home</h4></a></li><br>
                        <li><a href="rent.html"><h4>Rent</h4></a></li><br>
                        <li><a href="cars.html"><h4>Cars</h4></a></li>
                        <li><a href="aboutus.html"> <h4>About us</h4></a></li>
                        <li><a href="review.html"><h4>Reviews</h4></a></li>
                        <li><a href="signin.html"><h4>signin</h4></a></li>
                        <li><a href="signup.html"><h4>signup</h4></a></li>
                        <li><a href="logout.php"><h4>Logout</h4></a></li>
                         
                        <div class="footer-col">
                          <h4>Follow us on Social Media</h4>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a href="#"><i class="fab fa-youtube"></i></a>
                          </div>
                         </div>
    
                  </footer>

                  <script>
                    <!--javascript animation for zooming images-->
            // Get all the images on the page
          const images = document.querySelectorAll('img');
          const button = document.querySelectorAll('btn');

          // Loop through each image and add a mouseover event listener
            images.forEach(image => {
            image.addEventListener('mouseover', () => {
         // Enlarge the image using CSS transform property
            image.style.transform = 'scale(1.2)';
          });

         

        // Add a mouseout event listener to scale the image back to its original size
           image.addEventListener('mouseout', () => {
           image.style.transform = 'scale(1)';
         });
         });
            button.forEach(btn => {
            btn.addEventListener('mouseover', () => {
         // Enlarge the image using CSS transform property
            btn.style.transform = 'scale(1.2)';
          });
           btn.addEventListener('mouseout', () => {
           btn.style.transform = 'scale(1)';
         });
         });
               </script>
        </body>
</html>  

