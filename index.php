<!DOCTYPE html>
<html>
  <head>
    <base href="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['SERVER_NAME'].'/';  ?>" />
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="libs/material/css/materialize.min.css">
  </head>
  <body>
    <nav>
  <div class="nav-wrapper" id="navbar">
    <a href="#" class="brand-logo">Logo</a>
    <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">JavaScript</a></li>
    </ul>
  </div>
</nav>

<ul id="slide-out" class="sidenav">
  <li><a href="sass.html">Sass</a></li>
  <li><a href="badges.html">Components</a></li>
  <li><a href="collapsible.html">JavaScript</a></li>
  </ul>

    <script src="libs/jquery-3.2.1.min.js"></script>
    <script src="libs/material/js/materialize.min.js"></script>
    <script src="libs/anime.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
