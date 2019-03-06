<!DOCTYPE html>
<html>
  <head>
    <base href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['SERVER_NAME'].'/';  ?>" />
    <meta charset="utf-8">
    <meta name="theme-color" content="#202020">
    <title>BRICK TEAM | Portfolio</title>

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="libs/material/css/materialize.min.css"> -->
    <link rel="stylesheet" href="libs/bootsrtap-grid/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/fonts/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="navbar">
      <div class="glitch" data-text="BRICK">BRICK</div>
      <!-- <div class="glitch mini" data-text="TEAM">TEAM</div> -->
    </div>
    <div class="divider-scroll"><span class="icon-scroll" for="#content-scroll" id="main-scroll"></span></div>

    <div class="row" id="content-scroll">
      
    </div>

    <script src="libs/jquery-3.2.1.min.js"></script>
    <script src="libs/bootsrtap-grid/js/bootstrap.min.css"></script>
    <!-- <script src="libs/material/js/materialize.min.js"></script> -->
    <script src="libs/anime.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
