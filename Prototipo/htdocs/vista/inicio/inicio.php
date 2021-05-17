<?php include_once "../Prototipo/htdocs/db/coneccion.php";?>
<?php $url = "../Prototipo/htdocs/";?>
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
    <link href="<?=$url?>css/css.css" rel="stylesheet" type="text/css"/>
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
      <div class="w3-container w3-row w3-padding">
        <!--  <div class="w3-col s4">
          <img class="w3-circle w3-margin-right" src="" style="width:46px"/>
        </div> -->
        <div class="w3-col s8 w3-bar">
          <h6>
            <span>
              Prototipo de
              <strong>
                aplicación
              </strong>
            </span>
          </h6>
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
      <!--    <div class="w3-container ">
        <h5>
          Prototipo de aplicación
        </h5>
      </div> -->
      <div class="w3-bar-block">
        <a class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" href="#" onclick="w3_close()" title="close menu">
          <i class="fa fa-remove fa-fw">
          </i>
          Close Menu
        </a>
        <a class="w3-bar-item w3-button w3-padding " href="#">
          <i class="fa fa-cog fa-spin" style="font-size:24px">
          </i>
          Nueva Categoría
        </a>
        <a class="w3-bar-item w3-button w3-padding " href="#">
          <i class="fa fa-cog fa-spin" style="font-size:24px">
          </i>
          Nuevo pasillo
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-cog fa-spin" style="font-size:24px">
          </i>
          Nuevo Armario
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-cog fa-spin" style="font-size:24px">
          </i>
          Nueva Tablilla
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-cog fa-spin" style="font-size:24px">
          </i>
          Nuevo Cubículo
        </a>
        <a class="w3-bar-item w3-button w3-padding" href="#">
          <i class="fa fa-cog fa-spin" style="font-size:24px">
          </i>
          Nueva Articulo
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
      <div class="cuerpo">
        <div class="contenedor_input_categoria w3-container control_contenedor w3-card-4">
          <h3>
            Nueva Categoría
          </h3>
          <label>
            Nombre de la Categoría
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <input class="w3-btn w3-green" type="button" value="Input Button"/>
        </div>
        <div class="contenedor_input_pasillo w3-container control_contenedor w3-card-4">
          <h3>
            Nuevo pasillo
          </h3>
          <label>
            Nombre del pasillo
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            Código del pasillo
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            Categoría del pasillo
          </label>
          <select class="w3-select" name="option">
            <option disabled="" selected="" value="">
              Choose your option
            </option>
            <option value="1">
              Option 1
            </option>
            <option value="2">
              Option 2
            </option>
            <option value="3">
              Option 3
            </option>
          </select>
          <br/>
          <br/>
          <input class="w3-btn w3-green" type="button" value="Input Button"/>
        </div>
        <div class="contenedor_input_armario w3-container control_contenedor w3-card-4">
          <h3>
            Nuevo Armario
          </h3>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <input class="w3-btn w3-green" type="button" value="Input Button"/>
        </div>
        <div class="contenedor_input_tablilla w3-container control_contenedor w3-card-4">
          <h3>
            Nueva Tablilla
          </h3>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <input class="w3-btn w3-green" type="button" value="Input Button"/>
        </div>
        <div class="contenedor_input_cubiculo w3-container control_contenedor w3-card-4">
          <h3>
            Nuevo Cubiculo
          </h3>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <input class="w3-btn w3-green" type="button" value="Input Button"/>
        </div>
        <div class="contenedor_input_articulo w3-container control_contenedor w3-card-4">
          <h3>
            Nuevo Articulo
          </h3>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <label>
            xxxx
          </label>
          <input class="w3-input w3-border w3-animate-input" style="width:50%" type="text"/>
          <br/>
          <input class="w3-btn w3-green" type="button" value="Input Button"/>
        </div>
      </div>
      <div class="contenedor_select_pasillo">
        <input class="w3-btn w3-green" type="button" value="Input Button"/>
      </div>
      <div class="contenedor_select_armario">
        <input class="w3-btn w3-green" type="button" value="Input Button"/>
      </div>
      <div class="contenedor_select_tablilla">
        <input class="w3-btn w3-green" type="button" value="Input Button"/>
      </div>
      <div class="contenedor_select_cubiculo">
        <input class="w3-btn w3-green" type="button" value="Input Button"/>
      </div>
      <div class="contenedor_select_articulo">
        <input class="w3-btn w3-green" type="button" value="Input Button"/>
      </div>
      <!-- Footer -->
      <footer class="w3-container w3-padding-16 w3-light-grey">
        <h4>
          Prototipo de aplicación
        </h4>
      </footer>
      <!-- End page content -->
    </div>
    <script src="<?=$url?>js/js.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      add_img("<?=$url?>img/blue.jpeg");
    </script>
  </body>
</html>
