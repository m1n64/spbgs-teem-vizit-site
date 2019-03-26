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
<!--komentari-->
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
    <!-- пытаемся наебать систему и заранжировать сайтецкий) как работают сео профессиОНАЛЫ)) -->
    <div id="scrolltop">
      <h1>Покупка сайтов</h1>
      <h1>Нарисуем логотип</h1>
      <h1>Создадим вам дизайн</h1>
    </div>

    <div class="navbar">
      <div class="container">
        <div class="row">
          <div class="col s6 m6 l6 offset-l4 offset-m4 offset-l4 center-align valign-wrapper">
            <div class="glitch" data-text="BRICK">BRICK</div>
          </div>
        </div>
      </div>
      <!-- <div class="glitch mini" data-text="TEAM">TEAM</div> -->
    </div>
    <div class="divider-scroll"><span class="icon-scroll" for="#content-scroll" id="main-scroll"></span></div>
    <div class="lang" id="changelang">
      <a href="" lang="eng" class="lang_name">English</a>
      <a href="" lang="ru" class="lang_name">Русский</a>
    </div>

    <div id="content-scroll">
      <div class="name-team">
        <span class="team-text"><?php echo $lang->teamname; ?></span>
      </div>
      <!-- <div class="container-fluide"> -->
      <div class="row row-team">
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card1">
            <div class="card-head"><span class="card-icon icon-embed"></span><span class="card-name"><?php echo $lang->card1->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card1->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/spbg_grib" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card2">
            <div class="card-head"><span class="card-icon icon-laptop"></span><span class="card-name"><?php echo $lang->card2->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card2->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/spikuza" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card3">
            <div class="card-head"><span class="card-icon icon-power"></span><span class="card-name"><?php echo $lang->card3->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card3->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/pyrkh1" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card4">
            <div class="card-head"><span class="card-icon icon-pencil2"></span><span class="card-name"><?php echo $lang->card4->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card4->desc; ?></span></div>
            <div class="card-links">
              <a href="https://vk.com/powerofstrike" class="vk"><span class="icon-vk"></span> VK</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-mg">
          <div class="card-content" id="card5">
            <div class="card-head"><span class="card-icon icon-fire red"></span><span class="card-name"><?php echo $lang->card5->name; ?></span></div>
            <div><span class="card-text"><?php echo $lang->card5->desc; ?></span></div>
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


<div class="sites" id="project-list">
  <div class="name-team">
    <span class="team-text"><?php echo $lang->projectname; ?></span>
  </div>
  <div class="row">
    <div class="col s12 m6 l4 card-mg">
      <div class="card-content" id="project1">
        <div class="card-head"><span class="card-icon icon-fire"></span><span class="card-name"><?php echo $lang->pr1->name; ?></span></div>
        <div><span class="card-text"><?php echo $lang->pr1->desc; ?></span></div>
        <div class="card-links">
          <a href="#" class="vk"><span class="icon-logo"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span></span> LINK</a>
        </div>
    </div>
    </div>
    <div class="col s12 m6 l4 card-mg">

    </div>
    <div class="col s12 m6 l4 card-mg">

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

  <div class="row">
    <div class="col s12 m6 l6 offset-m4 offset-l4">
      <div>
        <div class="form-text"><?php echo $lang->form->inp1->text; ?></div>
        <input type="text" id="name-user"/>
      </div>
    </div>
    <div class="col s12 m6 l6 offset-m4 offset-l4">
      <div>
        <div class="form-text"><?php echo $lang->form->inp2->text; ?></div>
        <input type="email" id="email-user"/>
      </div>
    </div>
    <div class="col s12 m6 l6 offset-m4 offset-l4">
      <div class="form-text"><?php echo $lang->form->select->text; ?></div>
      <div class="select">
         <a class="slct"><?php echo $lang->form->select->text; ?></a>
           <ul class="drop">
             <?php for ($i = 0; $i < count($lang->form->select->drop); $i++) {
  ?>
               <li><?php echo $lang->form->select->drop[$i]; ?></li>
             <?php
} ?>
           </ul>
         <input type="hidden" id="select" />
      </div>
    </div>
    <div class="col s12 m6 l6 offset-m4 offset-l4">
      <div>
        <div class="form-text"><?php echo $lang->form->txtarea->text; ?></div>
        <textarea class="txtar" id="desc-user"></textarea>
      </div>
    </div>
    <div class="col s12 m4 l4 offset-m5 offset-l5">
      <div>
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
