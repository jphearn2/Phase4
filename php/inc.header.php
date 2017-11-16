<!-- 
    
    File: inc.header.php
    Author: team Bugs
    Team: Bugs
    CS-321 pahse 4

    Description: Header file
                 
-->

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
          <title><?php echo $page_title; ?></title>
    <link href = "<?php echo $css_path ?>" rel="stylesheet" type="text/css" />
      <div id="header">
        <div id="site_title">
            <img src="../images/biosci.png" alt="Biological Sciences">
        </div><!-- end div id="site_title" -->
        <div class="slidemove">
            <img class="slider" src="../images/collacting.jpg" style="width:100%">
            <img class="slider" src="../images/experiment.jpg" style="width:100%">
            <img class="slider" src="../images/frog.jpg" style="width:100%">
            <img class="slider" src="../images/microscope.jpg" style="width:100%">
            <img class="slider" src="../images/thegroup.jpg" style="width:100%">
            <img class="slider" src="../images/theguy.jpg" style="width:100%">
            <img class="slider" src="../images/thelady.jpg" style="width:100%">
            <img class="slider" src="../images/verybig.jpg" style="width:100%">
        </div> <!--end div class="slidemove" -->

        <script> 
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("slider");
                for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2500);    
            }
        </script>
      </div><!-- end div id="header"-->
  
     <div id="menu">
            <ul>
                <li><a href="Home.html"> Home </a></li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Undergraduate</a>
                    <div class="dropdown-content">
                        <a href="Home-UG.html">Undergrad Home</a>
                        <a href="#">Ecology, Evolution, and Environment</a>
                        <a href="Undergrad-major.html">Genetics and Cellular Biology</a>
                        <a href="#">Integrative Biology</a>
                        <a href="#">Medical Sciences</a>
                        <a href="#">Medical Technology</a>
                        <a href="#">Biology Minor</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Graduate</a>
                    <div class="dropdown-content">
                        <a href="Home-G.html">Grad Home</a>
                        <a href="Re_Topic.html">Research Topics</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Student Resources</a>
                    <div class="dropdown-content">
                        <a href="Home-SR.html">Resources Home</a>
                        <a href="Tut_Home.html">Tutoring</a>
                        <a href="Software.html">Software</a>
                        <a href="Adv_Home.html">Advising</a>
                        <a href="Course_Home.html">Course Information</a>
                        <a href="../StudentResources/Jobs-JM.php">Job Market Info</a>
                        <a href="../StudentResources/Jobs-IO.php">Internship Opportunities</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Clubs and Events</a>
                    <div class="dropdown-content">
                        <a href="../clubs/Home_CE.php">Clubs and Events Home</a>
                        <a href="../clubs/seminar.php">Seminars</a>
                        <a href="../clubs/clubs.php">Student Organizations</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Facilities</a>
                    <div class="dropdown-content">
                        <a href="../Facilities/Home-Faci.php">Facilities Home</a>
                        <a href="../Facilities/Facilities-L.php">Laboratory Information</a>
                        <a href="../Facilities/Facilities-T.php">Take a Tour</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li><a href="../faculty/faculty.php">Faculty</a></li>
                <li><a href="../base/contactus.php">Contact Us</a></li>
            </ul>  
        </div><!--end div id="menu" -->
  </head>
