<?php include_once "db/coneccion.php";?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Document
    </title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <style>
      html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
  </head>
  <body class="w3-light-grey">
    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
      <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();">
        <i class="fa fa-bars">
        </i>
        Menu
      </button>
      <span class="w3-bar-item w3-right">
        Logo
      </span>
    </div>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" id="mySidebar" style="z-index:3;width:300px;">
      <br/>
      <div class="w3-container w3-row">
        <div class="w3-col s4">
          <img class="w3-circle w3-margin-right" src="" style="width:46px"/>
        </div>
        <div class="w3-col s8 w3-bar">
          <span>
            Welcome,
            <strong>
              Mike
            </strong>
          </span>
          <br/>
          <a class="w3-bar-item w3-button" href="#">
            <i class="fa fa-envelope">
            </i>
          </a>
          <a class="w3-bar-item w3-button" href="#">
            <i class="fa fa-user">
            </i>
          </a>
          <a class="w3-bar-item w3-button" href="#">
            <i class="fa fa-cog">
            </i>
          </a>
        </div>
      </div>
      <hr/>
      <div class="w3-container">
        <h5>
          Dashboard
        </h5>
      </div>
      <div class="w3-bar-block">
        <a class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" href="#" onclick="w3_close()" title="close menu">
          <i class="fa fa-remove fa-fw">
          </i>
          Close Menu
        </a>
        <a class="w3-bar-item w3-button w3-padding w3-blue" href="#">
          <i class="fa fa-users fa-fw">
          </i>
          Overview
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-eye fa-fw">
          </i>
          Views
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-users fa-fw">
          </i>
          Traffic
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-bullseye fa-fw">
          </i>
          Geo
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-diamond fa-fw">
          </i>
          Orders
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-bell fa-fw">
          </i>
          News
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-bank fa-fw">
          </i>
          General
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-history fa-fw">
          </i>
          History
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-cog fa-fw">
          </i>
          Settings
        </a>
        <br/>
        <br/>
      </div>
    </nav>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <!-- Header -->
      <header class="w3-container" style="padding-top:22px">
        <h5>
          <b>
            <i class="fa fa-dashboard">
            </i>
            My Dashboard
          </b>
        </h5>
      </header>
      <!-- Footer -->
      <footer class="w3-container w3-padding-16 w3-light-grey">
        <h4>
          Prototipo de aplicacion
        </h4>
      </footer>
      <!-- End page content -->
    </div>
    <script src="js/js.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      add_img("img/blue.jpeg");
    </script>
  </body>
</html>
