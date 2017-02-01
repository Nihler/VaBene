<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzeria VaBene - Słupsk</title>
    <meta name="description" content="Restauracja VaBene - Slupsk">
    <meta name="keywords" content="restauracja, pizzeria, pizza, VaBene, Slupsk, wloska, Va, Bene, dobre, jedzenie">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!--banner-->
    <section id="banner">
      <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="#about">O nas</a>
                  <a href="#event">Wydarzenia</a>
                  <a href="#menu-list">Menu</a>
                  <a href="#contact">Kontakt</a>
                  <a href="#galery">Galeria</a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">VaBene</h1>
            <h2>Idealne miejsce na jedzenie!</h2>
            <p>Restauracja włoska</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- / banner -->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">O nas</h1>
                    <p class="header-p"></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading">Dobra restauracja to magiczne miejsce</h2>
                            <p>Taką restauracją jest "Va Bene", gdzie przytulne, wyjątkowe wnętrze o niezapomnianym klimacie jest dodatkiem do pysznych dań. Nasza restauracja mieści się w Słupsku przy ul.Braci Gierymskich 2 gdzie od 2004 roku serwujemy dania ciepłej Italii i nie tylko.</p>
                            <div class="details-list">
                              <!--  <ul>
                                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li><i class="fa fa-check"></i>Quisque finibus eu lorem quis elementum</li>
                                    <li><i class="fa fa-check"></i>Vivamus accumsan porttitor justo sed </li>
                                    <li><i class="fa fa-check"></i>Curabitur at massa id tortor fermentum luctus</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="img/res1.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!-- event -->
    <section id="event">
        <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                      <h1 class="header-h">Wydarzenia</h1>
                      <p class="header-p"></p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                          <div class="col-md-6 col-sm-6 left-images">
                           <img src="img/res03.jpg" class="img-responsive">
                         </div>
                         <div class="col-md-6 col-sm-6 details-text">
                          <div class="content-holder">
                            <h2>Promocja</h2>
                            <?php   $myfile = fopen("artykuly.txt", "r") or die("Unable to open file!");
									echo "<p>".fread($myfile,filesize("artykuly.txt"))."</p>";
									fclose($myfile);
							?>
                            <address>

                            </address>
                            <a class="btn btn-imfo btn-read-more" href="events-details.html">Dowiedz sie wiecej</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ event -->
    <!-- menu -->
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu</h1>
                    <p class="header-p">Oto lista dań, które serwujemy w naszej restauracji</p>
                </div>
                <div class="col-md-12  text-center gallery-trigger">
                    <ul>
                        <li><a class="filter" data-filter="all">Show All</a></li>
                        <li><a class="filter" data-filter=".category-1">Pizza</a></li>
                        <li><a class="filter" data-filter=".category-2">Przekąski</a></li>
                        <li><a class="filter" data-filter=".category-3">Zupy</a></li>
                        <li><a class="filter" data-filter=".category-4">Dania obiadowe</a></li>
						<li><a class="filter" data-filter=".category-5">Spaghetti</a></li>
						<li><a class="filter" data-filter=".category-6">Zapiekanka ziemniaczana</a></li>
						<li><a class="filter" data-filter=".category-7">Zapiekanka penne</a></li>
						<li><a class="filter" data-filter=".category-8">Warzywa zapiekane</a></li>
						<li><a class="filter" data-filter=".category-9">Sałatki</a></li>
						<li><a class="filter" data-filter=".category-10">Napoje zimne</a></li>
						<li><a class="filter" data-filter=".category-11">Kawa, herbata</a></li>
                    </ul>
                </div>
                <div id="Container">
				<div class="mix category-1 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM pizza";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>
				<div class="mix category-2 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM przekaski";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>
				<div class="mix category-3 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,cena FROM zupy";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><br>";
										}

									}



								?>
				</div>










                  <div class="mix category-4 menu-restaurant" data-myorder="2">
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM obiad";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>


                  </div>
				  <div class="mix category-5 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM spaghetti";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>
				<div class="mix category-6 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM ziemniaczane";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>

				<div class="mix category-7 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM penne";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>

				<div class="mix category-8 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM warzywa";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>


				<div class="mix category-9 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,sklad,cena FROM salatki";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><span class=menu-subtitle> " . $row["sklad"]. "</span></span><br>";
										}

									}



								?>
				</div>

				<div class="mix category-10 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,cena FROM zimne";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]. "</span></span><br>";
										}

									}



								?>
				</div>

				<div class="mix category-11 menu-restaurant" data-myorder="2">
				<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "vabene";
									$conn = mysqli_connect($servername, $username, $password, $dbname);

									$sql="SELECT nazwa,cena FROM kawa";
									$result=mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<span class=clearfix><p class=menu-title>" . $row["nazwa"]. "</p> <span style='left: 166px; right: 44px'; class=menu-line></span><span class=menu-price>" . $row["cena"]."</span></span><br>";
										}

									}



								?>
				</div>
                </div>
            </div>
        </div>
    </section>
    <!--/ menu -->
    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Kontakt</h1>
                    <p class="header-p">Nie wiesz jak do nas trafić? Tu znajdziesz wszystkie potrzebne informacje!</p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Numer telefonu</h4>
                            <p class="light-blue regular alt-p">59 843 43 00<span class="contacts-sp"></span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Godziny otwarcia</h4>
                            <p class="light-blue regular alt-p"> Poniedziałek-Sobota 12.00 - 23:00</p>
                            <p class="light-blue regular alt-p">
                                 Niedziela 12:00 - 22.00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2319.203437738924!2d16.999569716225558!3d54.45934598022729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fe1a027dcc60c1%3A0xda3d05e3236f0f6c!2sVa+Bene.+Pizzeria!5e0!3m2!1spl!2spl!4v1484665660066" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- / contact -->
    <section id="galery" class="section-padding">
      <div class="Container">
        <div class="row">
          <div class="col-md-12 text-center">
              <h1 class="header-h">Galeria</h1>
              <p class="header-p">Oto kilka zdjęć naszego lokalu.</p>
          </div>
          <div class="col-md-12 text-center">
            <div class="w3-content w3-display-container" >
              <img class="mySlides" src="img\galeria1.jpg">
              <img class="mySlides" src="img\galeria2.jpg">
              <img class="mySlides" src="img\galeria3.jpg">
              <img class="mySlides" src="img\galeria4.jpg">
              <img class="mySlides" src="img\galeria5.jpg">
              <img class="mySlides" src="img\galeria6.jpg">
              <img class="mySlides" src="img\galeria7.jpg">
              <img class="mySlides" src="img\galeria8.jpg">
              <div class="w3-center w3-display-bottommiddle" style="width:100%">
                <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(4)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(5)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(6)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(7)"></span>
                <span class="w3-badge demo w3-border" onclick="currentDiv(8)"></span>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p class="header-p">Wiecej naszych zdjec mozesz znalezc na naszym profilu na facebook'u</p>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer class="footer text-center">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="widget">
                        <h4 class="widget-title">VaBene</h4>
                        <div class="social-list">

                            <a href="https://web.facebook.com/vabeneslupsk/?_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright clear-float">
                            C Delicious Theme. All Rights Reserved
                            <div class="credits">
                                <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                                -->
                                Designed by <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
    </script>

</body>
</html>
