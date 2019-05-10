<?php
  $lng = trim($_GET['lng']);

  $lang = [];

  if (isset($_COOKIE['lang'])) {
      $lang = getLang($_COOKIE['lang']);
  } else {
      $lang = getLang($lng);
  }

  function getLang($lng)
  {
      switch ($lng) {
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
    <base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/';  ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#202020">
    <meta name="yandex-tableau-widget" content="logo=pic/brick128.png, color=#202020" />
    <meta name="yandex-verification" content="fc998e1c835e2a17" />

    <title><?php echo $lang->title; ?></title>
    <meta name="description" content="BRICK - команда по созданию Web-сайтов или приложений. А так же мы оказываем услуги создания логотипов/дизайнов и так далее по самым низким ценам!">
    <meta name="keywords" content="brick,brickweb,brickweb.ru,заказать сайт,купить сайт,где купить сайт,купить интернет сайт, купить сайт онлайн,купить сайт магазин, купить сайт цена,купить логотип,купить логотип цена,услуги дизайнера,услуги дизайнера недорого,купить логотип цена,купить сайт недорого,купить логотип цена">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="libs/material/css/materialize.min.css"> -->
    <link rel="stylesheet" href="libs/material-grid/materializecss-grid.min.css">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link rel="shortcut icon" href="pic/brick128.png" type="image/x-png">
    <!-- <link rel="stylesheet" href="libs/scrollbar/perfect-scrollbar.css"> -->
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">


  </head>
  <body>
    <!-- пsытаемся наебать систему и заранжировать сайтецкий) как работают сео профессиОНАЛЫ)) -->
    <div id="scrolltop">
      <h1>Покупка сайтов</h1>
      <h1>Нарисуем логотип</h1>
      <h1>Создадим вам дизайн</h1>
    </div>
<!-- dsdsd6676767676767665675s -->
    <div class="navbar">
            <div class="brick-logo">
            <div class="glitch" data-text="BRICK">BRICK</div>
            <p>Build your web with our help</p>
            </div>
      <!-- <div class="glitch mini" data-text="TEAM">TEAM</div> -->
    </div>
    <div class="divider-scroll" for="#content-scroll" id="main-scroll"><span class="icon-scroll"></span></div>

    <div class="lang" id="changelang">
      <a href="" lang="eng" class="lang_name">English</a>
      <a href="" lang="ru" class="lang_name">Русский</a>
    </div>


<!--Туть делал наши услуги-->
    <div id="content-scroll">
      <div class="name-team">
        <span class="team-text">Наши услуги:</span>
      </div>

      <div class="container-fluid">
      <div class="row">

        <div class="col s12 m6 l4 card-mg">
          <div class="card-content center" id="card6">
            <span class="card-icon-serv icon-embed"></span>
            <div class="card-head card-serv"><div class="card-back"><span class="card-name">Разработка сайтов под ключ</span></div></div>
            <!-- <div class="divider-card"><span class="icon-scroll"></span></div> -->
          </div>
        </div>

        <div class="col s12 m6 l4 card-mg">
          <div class="card-content center" id="card7">
            <span class="card-icon-serv icon-laptop"></span>
            <div class="card-head card-serv"><div class="card-back"><span class="card-name">Разработка дизайна</span></div></div>
            <!-- <div class="divider-card"><span class="icon-scroll"></span></div> -->
          </div>
        </div>

        <div class="col s12 m6 l4 card-mg">
          <div class="card-content center" id="card8">
            <span class="card-icon-serv icon-power"></span>
            <div class="card-head card-serv"><div class="card-back"><span class="card-name">Техническое обслуживание сайтов</span></div></div>
            <!-- <div class="divider-card"><span class="icon-scroll"></span></div> -->
          </div>
        </div>

    <div class="col s12 m6 l4 card-mg">
      <!-- <div class="card-content" id="card6">
        <div class="card-head"><span class="card-icon icon-fire red"></span><span class="card-name"><?php echo $lang->card6->name; ?></span></div>
        <div><span class="card-text"><?php echo $lang->card6->desc; ?></span></div>
        <div class="card-links">
          <a href="#" class="vk"><span class="icon-vk"></span> VK</a>
        </div>
    </div> -->
    </div>
    <!-- </div> -->
    </div>
    </div>

    </div>









    <div id="">
      <div class="name-team">
        <span class="team-text"><?php echo $lang->teamname; ?></span>
      </div>

      <div class="container-fluid">
      <div class="row">
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card1">
            <div class="card-head"><span class="card-icon icon-embed"></span><span class="card-name"><?php echo $lang->card1->name; ?></span></div>
            <div><div class="card-back-desc"><span class="card-text"><?php echo $lang->card1->desc; ?></span></div></div>
            <div class="card-links">
              <a href="https://vk.com/spbg_grib" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card2">
            <div class="card-head"><span class="card-icon icon-laptop"></span><span class="card-name"><?php echo $lang->card2->name; ?></span></div>
            <div><div class="card-back-desc"><span class="card-text"><?php echo $lang->card2->desc; ?></span></div></div>
            <div class="card-links">
              <a href="https://vk.com/spikuza" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card3">
            <div class="card-head"><span class="card-icon icon-power"></span><span class="card-name"><?php echo $lang->card3->name; ?></span></div>
            <div><div class="card-back-desc"><span class="card-text"><?php echo $lang->card3->desc; ?></span></div></div>
            <div class="card-links">
              <a href="https://vk.com/pyrkh1" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card4">
            <div class="card-head"><span class="card-icon icon-pencil2"></span><span class="card-name"><?php echo $lang->card4->name; ?></span></div>
            <div><div class="card-back-desc"><span class="card-text"><?php echo $lang->card4->desc; ?></span></div></div>
            <div class="card-links">
              <a href="https://vk.com/powerofstrike" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card5">
            <div class="card-head"><span class="card-icon icon-fire red"></span><span class="card-name"><?php echo $lang->card5->name; ?></span></div>
            <div><div class="card-back-desc"><span class="card-text"><?php echo $lang->card5->desc; ?></span></div></div>
            <div class="card-links">
              <a href="https://vk.com/id94947434" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l4 card-mg">
      <!-- <div class="card-content" id="card6">
        <div class="card-head"><span class="card-icon icon-fire red"></span><span class="card-name"><?php echo $lang->card6->name; ?></span></div>
        <div><span class="card-text"><?php echo $lang->card6->desc; ?></span></div>
        <div class="card-links">
          <a href="#" class="vk"><span class="icon-vk"></span> VK</a>
        </div>
    </div> -->
    </div>
  <!-- </div> -->
</div>
</div>

</div>
<?php
include $_SERVER['DOCUMENT_ROOT']."/modules/sqlite.db.class.php";
$DB = new DB();

$l = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : "eng";
$dbName = "";
switch ($l) {
  case 'ru':
      $dbName = "brick_projects_ru";
    break;

  case 'eng':
      $dbName = "brick_projects_en";
    break;
}

$res = [];
$q = $DB->query("SELECT * FROM $dbName");
while ($row = $q->fetchArray()) {
    $res[] = $row;
}

?>

<div class="sites" id="project-list">
  <div class="name-team">
    <span class="team-text"><?php echo $lang->projectname; ?></span>
  </div>
  <div class="row">
    <?php
      foreach($res as $r) {
        $stream = $DB->openBlob($dbName, 'br_pr_pic', $r['br_pr_id']);
        $pic = base64_encode(stream_get_contents($stream));
        fclose($stream);
    ?>
    <div class="col s12 m6 l4 card-mg">
      <div class="card-content" style="background-image: url(<?php echo "data:image/jpg;base64,$pic"; ?>); background-size: cover; background-repeat: no-repeat;">
        <div class="card-head"><span class="card-icon icon-fire"></span><span class="card-name"><?php echo $r['br_pr_name']; ?></span></div>
        <div><div class="card-back-desc"><span class="card-text"><?php echo $r['br_pr_desc']; ?></span></div></div>
        <div class="card-links">
          <a href="<?php echo $r['br_pr_link']; ?>" target="_blank" class="vk"><span class="icon-logo"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span></span> LINK</a>
        </div>
      </div>
    </div>
    <?php
    }
    ?>

    <!-- <div class="col s12 m6 l4 card-mg">

    </div>
    <div class="col s12 m6 l4 card-mg">

    </div> -->
  </div>
</div>

<div class="about-us" id="aboutUs">
    <div class="about-title"><?php echo $lang->aboutCard->aboutTitle; ?></div>
    <div class="about"><?php echo $lang->aboutCard->about; ?></div>
    <div class="about-info"><?php echo $lang->aboutCard->info; ?></div>
    <div class="about-contacts">
        <div class="about-email"><span class="line-hover">E-MAIL:</span> <?php echo $lang->aboutCard->contacts->email; ?></div>
        <div class="about-phones">
            <?php foreach ($lang->aboutCard->contacts->phones as $phone) {?>
                <div class="about-phones"><span class="line-hover"><?php echo $phone->name; ?></span>: <?php echo $phone->number; ?> (Belarus)</div>
            <?php } ?>
        </div>
    </div>
</div>

<div id="get-site">
  <div class="name-team">
    <span class="team-text"><?php echo $lang->form->name; ?></span>
  </div>

  <!-- <div class="row">
    <div class="col l4"><span class="icon-landing"></span><?php echo $lang->form->lend; ?></div>
    <div class="col l4"><span class="icon-design"></span><?php echo $lang->form->design; ?></div>
    <div class="col l4"><span class="icon-icon"></span><?php echo $lang->form->logo; ?></div>
  </div> -->
  <div class="container">
  <div class="row">
    <div class="form-text"><?php echo $lang->form->inp1->text; ?></div>
    <div class="our-input">
        <input type="text" id="name-user"/>
    </div>
    <div class="form-text"><?php echo $lang->form->inp2->text; ?></div>
    <div class="our-input">
        <input type="email" id="email-user"/>
      </div>
      <div class="form-text"><?php echo $lang->form->select->text; ?></div>
    <div class="our-input">
      <div class="select">
         <a class="slct"><?php echo $lang->form->select->text; ?></a>
           <ul class="drop">
             <?php foreach($lang->form->select->drop as $drop) {
  ?>
               <li><?php echo $drop; ?></li>
             <?php
} ?>
           </ul>
         <input type="hidden" id="select" />
      </div>
    </div>
    <div class="form-text"><?php echo $lang->form->txtarea->text; ?></div>
    <div class="our-input">
        <textarea class="txtar" id="desc-user"></textarea>
    </div>
    <div class="our-input">
        <button type="button" class="submit" id="order"><?php echo $lang->form->button; ?></button>
    </div>

  </div>
  </div>
</div>

<div id="footer">
  <div class="footer-content">
    <div class="footer-text">
      <span><?php echo $lang->footer->main; ?><a href="mailto:support@brickweb.ru">support@brickweb.ru</a></span>
    </div>
    <div class="footer-copyright">
      <div>2019. (C) <span class="icon-logo"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span></span> BRICK.
      <?php echo $lang->footer->copy; ?></div>
    </div>
  </div>
</div>

<div id="wrapper-error">
  <div class="modal-error">
    <div class="content-error">
      <p><?php echo $lang->form->error; ?></p>
    </div>
  </div>

  <div id="wrapper-ok">
    <div class="modal-ok">
      <div class="content-ok">
        <p><?php echo $lang->form->alert; ?></p>
      </div>
    </div>

  <script src="libs/jquery-3.2.1.min.js"></script>
  <!-- <script src="libs/scrollbar/perfect-scrollbar.min.js"></script> -->
  <!-- <script src="libs/material/js/materialize.min.js"></script> -->
  <script src="libs/jquery.viewportchecker.min.js"></script>
  <script src="libs/anime.min.js"></script>
  <script src="libs/base64.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/index.js"></script>

  <script src="js/remove-fbclid.js" async defer></script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(52717228, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true,
          trackHash:true
     });
  </script>
  <!-- /Yandex.Metrika counter -->
</body>
</html>
