<!DOCTYPE html>
<html lang="en"><head>
  <title>Jay's Garage</title>
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Fugaz+One&family=Roboto&display=swap" rel="stylesheet">
 </head>
 <body>
     <header>
     <a href="index.html"><img class="logo" src="images/2019_JaysGarageLogo.png" alt="Jay's Garge logo"></a>
     <a href="tel:2063279465" class="phonelink">(206) 327-9465</a>
     <h1>Jay's Garage</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html">Home</a>
       <a href="services.html">Services</a>
       <a href="gallery.html">Photo Gallery</a>
       <a href="map.html">Map</a>
       <a href="contact.php" class="active">Contact Us</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
     </nav>
     </header>
     <div class="wrapper">
         <!-- START LEFT COLUMN -->
         <section class="fullwidth">
            <h2 class="subheader">Contact Jay's Garage</h2>
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here

            $toAddress = "jonah.byrne@gmail.com";  //place your/your client's email address here
            $toName = "Jay's Garage"; //place your client's name here
            $website = "Jay's Garage Contact Form";  //place NAME of your client's website

            //echo loadContact('simple.php');#demonstrates a simple contact form
            echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>
         </section>
         <!-- END LEFT COLUMN -->
        <footer>
          <p class="footer-text"><small>4601 Shilshole Ave NW Seattle, WA 98107 <br /> <a href="contact.php">Contact Us</a> ~ ©2021 by Jay's Garage, All Rights Reserved ~ <a href="disclaimer.html">Legal Disclaimer</a> ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site31/it161/fp/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
     </div>
      <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->

      <script>   

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }   
     </script>
 </body>
</html>