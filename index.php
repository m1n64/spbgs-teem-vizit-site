<?php
  $lng = trim($_GET['lng']);

  $lang = [];

  if (isset($_COOKIE['lang'])){
    $lang = getLang($_COOKIE['lang']);
  }
  else {
    $lang = getLang($lng);
  }

  function getLang($lng){
    switch($lng) {
      default:
      case "eng":
        return json_decode(file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/langs/en_EN.json"));
      case "ru":
        return json_decode(file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/langs/ru_RU.json"));
    }
  }
?>
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
    <!-- <link rel="stylesheet" href="libs/scrollbar/perfect-scrollbar.css"> -->
    <link rel="stylesheet" href="css/animations.css">
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
    <div class="lang" id="changelang">
      <a href="" lang="eng" class="lang_name">English</a>
      <a href="" lang="ru" class="lang_name">Русский</a>
    </div>

    <div id="content-scroll">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-content" id="card1">
            <div class="card-head"><span class="card-icon icon-embed"></span><span class="card-name"><?php echo $lang->card1->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card1->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/spbg_grib" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-content" id="card2">
            <div class="card-head"><span class="card-icon icon-laptop"></span><span class="card-name"><?php echo $lang->card2->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card2->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/spikuza" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-content" id="card3">
            <div class="card-head"><span class="card-icon icon-power"></span><span class="card-name"><?php echo $lang->card3->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card3->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/pyrkh1" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-content" id="card4">
            <div class="card-head"><span class="card-icon icon-pencil2"></span><span class="card-name"><?php echo $lang->card4->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card4->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/powerofstrike" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-content" id="card5">
            <div class="card-head"><span class="card-icon icon-fire red"></span><span class="card-name"><?php echo $lang->card5->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card5->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/id94947434" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
        </div>
    </div>
</div>

<!-- экономика
технико-экономическое обоснование. Внедрение программы "Информационно-справочная система по программе Adobe Dreamweaver"

Введение:
Значение автоматизации в жизни общества
Цель: получение практических навыков по расчёту экономических показателей разработки программы, а так же закрепление теоретических знаний, полученных в ходе изучение дисцпилины "Экномоика организаций"

1. Экономически обосновать постановку задач
2. Определить трудоёмкость разработчки программы
3. Определить затраты на разработку ПО
4. Определить свободно отпускную цену программы

3 главы.
список источников.
-->

<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>
<p>1</p>

<div id="scrolldown"></div>
    <script src="libs/jquery-3.2.1.min.js"></script>
    <script src="libs/bootsrtap-grid/js/bootstrap.min.js"></script>
    <!-- <script src="libs/scrollbar/perfect-scrollbar.min.js"></script> -->
    <!-- <script src="libs/material/js/materialize.min.js"></script> -->
    <script src="libs/anime.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
