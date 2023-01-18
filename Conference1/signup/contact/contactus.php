<?php

include 'conn.php';

if(isset($_POST['done']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];

    $q = "INSERT INTO `contact`(`Fname`, `Lname`, `Email`, `Phone`, `Message`) VALUES ('$fname','$lname','$email','$phone','$msg')";

    $query = mysqli_query($conn,$q);
  }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="stylemain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>ICCTE2023</title>
    <link rel="icon" type="image/png" sizes="32x32" href="tablogo.png">
  </head>
  <body>
    
    <header class="header">
      <div class="container1">
        <div class="header-main">
          <div class="logo">
             <div class="title">
               <a href="index.html">ICCTE-23</a>
             </div>
             
          </div>
          <div class="open-nav-menu">
             <span></span>
          </div>
          <div class="menu-overlay">
          </div>
          <!-- navigation menu start -->
          <nav class="nav-menu">
            <div class="close-nav-menu">
               <img src="img/close.svg" alt="close">
            </div>
            <ul class="menu">
               <li class="menu-item">
                 <a href="index.html">Home</a>
               </li>
               <li class="menu-item">
                  <a href="topics.html">Topics </a>
                  <!-- <ul class="sub-menu">
                      <li class="menu-item"><a href="#">AI and Applications</a></li>
                      <li class="menu-item"><a href="#">Data Communication and Networking</a></li>
                      <li class="menu-item"><a href="#">Scientific Computing</a></li>
                      <li class="menu-item"><a href="#">Software Engineering and Project Management</a></li>
                      <li class="menu-item"><a href="#">Computer Vision and Pattern Recognition</a></li> 
                      <li class="menu-item"><a href="#">Electronics and Microprocessor</a></li>
                  </ul> -->
               </li>
               <li class="menu-item">
                <a href="r.html" data-toggle="sub-menu">CFP </a>
                <!-- <ul class="sub-menu">
                    <li class="menu-item"><a href="#">Call for papers</a></li>
                    <li class="menu-item"><a href="#">Submission Guidelines</a></li>
                </ul> -->
              </li>
               <li class="menu-item">
                  <a href="index.html#s">Speakers</a>
               </li>
               <li class="menu-item">
                <a href="a_committee.html">Committees</a>
                <!-- <ul class="sub-menu">
                    <li class="menu-item"><a href="#">Advisory Committe</a></li>
                    <li class="menu-item"><a href="#">Technical Program Committee</a></li>
                    <li class="menu-item"><a href="#">Organising Committee</a></li>
                </ul> -->
             </li>
               <li class="menu-item">
                  <a href="reg.html">Schedule</a>
               </li>
               <li class="menu-item menu-item-has-children">
                <a href="#" data-toggle="sub-menu">Registration <i class="plus"></i></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="Idates.html">Important Dates</a></li>
                    <li class="menu-item"><a href="Rf.html">Author Registration</a></li>
                    <li class="menu-item"><a href="reg.html">Account Details</a></li>
                    <li class="menu-item"><a href="reg.html">Paper Status</a></li>

                    
                </ul>
             </li>
               <li class="menu-item">
                  <a href="reg.html">Venue</a>
               </li>
               <li class="menu-item">
                  <button><a href="#foot">Contact Us</a></button>
               </li>
            </ul>
          </nav>
          <!-- navigation menu end -->
       </div>
      </div>
   </header>


   <div class="heading">
    <h2>Contact Us</h2>
   </div>
    <div class="contact">
      <div class="cform">
        <h3 id="msg">Send a message</h3><hr>
        
        <form action="" method="POST">
          <!-- <h1 ></h1> -->
        <div class="formbox">
          <div class="row50">
            <div class="inputbox">
              <span>First Name</span>
              <input type="text" name="fname" placeholder="first name" required>
            </div>
            <div class="inputbox">
              <span>Last Name</span>
              <input type="text" name="lname" placeholder="last name" required>
            </div>
          </div>
          <div class="row51">
            <div class="inputbox">
              <span>Email</span>
              <input type="text" name="email" placeholder="abc@gmail.com" required>
            </div>
            <div class="inputbox">
              <span>Phone</span>
              <input type="text" name="phone" placeholder="1234567890" required>
            </div>
            </div>
          </div>
        <div class="newrow">
          <div class="inputbox">
            <span>Message</span>
            <textarea name="message" placeholder="Write Your Message Here.."></textarea>
          </div>
        </div>
        <div class="newrow">
          <div class="inputbox">
            <input name="done" type="submit" value="SEND" id="sub">
          </div>
        </div>
      </form>
      




      </div>
      <div class="div2">
        <div class="cinfo">
          <h3>Contact info</h3><hr>

          <div class="infobox">
            <div>
              <span><ion-icon name="mail"></ion-icon></span>
              <a href="iccte@nbu.ac.in">iccte@nbu.ac.in</a>
            </div>
            <div>
              <span><ion-icon name="call"></ion-icon></span>
              <a href="+91 9832479136"> +91 9832479136</a>
            </div>
            <div>
              <span><ion-icon name="location"></ion-icon></span>
              <p>  PIN-734013 <br>  West Bengal, India</p>
            </div>
            <ul  class="sci">
              <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
              <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
              <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            </ul>
          </div>
        </div>
        <div class="cmap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.093725480304!2d88.3541556!3d26.7094526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e44668ac1c0ae5%3A0x141c6a9296c48c2c!2sUniversity%20of%20North%20Bengal%20(State%20University)!5e0!3m2!1sen!2sin!4v1665250910568!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
   </div>
   
  <hr>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


 <!-- ************footer**************** -->

 <section id="foot">
  <div class="main-wrap">
    <div class="footer-wrap">
        <div class="footer-wrap-1">
            <div class="footer-section">
                <h1>About</h1>
                <a href="#">Home</a>
                <a href="#">Topics</a>
                <a href="#">CFP</a>
                <a href="#">Speakers</a>
                <a href="#">Venue</a>
                <a href="../index.php">Admin</a>
            </div>
            <!-- <div class="footer-section">
                <h1>Resources</h1>
                <a href="#">Docs</a>
                <a href="#">Blog</a>
                <a href="#">eBooks</a>
                <a href="#">Videos</a>
            </div> -->
            <div class="footer-section">
                <h1>Contact</h1>
                <a href="#">Raja Rammohunpur</a>
                <a href="#">P.O. - N.B.U.</a>
                <a href="#"> District-Darjeeling</a>
                <a href="#"> PIN-734013</a>
                <a href="#"> West Bengal, India</a>
            </div>
            <div class="footer-section">
              <h1>Get In Touch</h1>
              <a href="#">Email : iccte@nbu.ac.in</a>
              <a href="#">Ph. No. : +919832479136</a>
              
              <a href="#"> PIN-734013</a>
              <a href="#"> West Bengal, India</a>
          </div>
            <div class="footer-section">
                <h1>Stay Connected</h1>
                <p>Subscribe to our newsletter to receive latest news.</p>
                <form action="">
                    <input type="email" name="email" id="email" placeholder="Enter Email Address">
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-wrap-2">
            <div class="line"></div>
            <div class="social-link">
              <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
              <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
              <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="first-box">
            <a href="#">University of North Bengal</a><br>
            <a href="#">Department of  Computer Science and Technology</a>
        </div>
        <div class="last-box">
            <br>
            <p>&copy; Copyright 2022 <a href="https://www.linkedin.com/in/subhodip-sadhu-3330191b8/" target="_blank"> Subhodip Sadhu  </a> &<a href="https://www.linkedin.com/in/tanmoy21/" target="_blank"> Tanmoy Ghosh</a></p>
        </div>
    </div>
</div>
</section>

<script src="js/script.js"></script>
</body>
</html>