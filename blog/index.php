<!doctype html>
<html>
<head>
<!--    <base href="--><?php //echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/';  ?><!--" />-->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import materialize.css-->
<!--    <link type="text/css" rel="stylesheet" href="libs/material/css/materialize.min.css" media="screen,projection"/>-->
    <link type="text/css" rel="stylesheet" href="libs/material/css/materializecss-grid.min.css" media="screen,projection"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Голосование</title>
</head>
<body>
    <span style="display: none" id="hidden"></span>

    <div class="container">
        <div class="main row">
            <div class="caption col s12">Голосование на team leader'a отдела маркетинга и продвижения</div>
            <div class="main-edit col s12">
                <ul class="edit">
                    <li class="edits" to="1"><span class="icon-ic_radio_button_unchecked_48px" id="pic1"></span>Антон Буленков</li>
                    <li class="edits" to="2"><span class="icon-ic_radio_button_unchecked_48px" id="pic2"></span>Никита Пырх</li>
                    <li class="edits" to="3"><span class="icon-ic_radio_button_unchecked_48px" id="pic3"></span>Сахаров Кирилл</li>
                    <li class="edits" to="4"><span class="icon-ic_radio_button_unchecked_48px" id="pic4"></span>Стас Пикуза</li>
                    <li class="edits" to="5"><span class="icon-ic_radio_button_unchecked_48px" id="pic5"></span>Алёна Завадская</li>
                </ul>
            </div>
            <div class="go col s4 offset-s4">
                <div class="button" id="go" voice="-1">Голосовать!</div>
                <span id="error-msg">Выберете один из голосов!</span>
            </div>
            <div class="col s12 m8 l10">
                <canvas id="res"></canvas>
            </div>
        </div>
    </div>

    <div id="mod1" class="modal">
        <p>Что бы голос засчитался, нужна авторизация через ВК! Пожалуйста, авторизируйтесь!</p>
        <a href="#" class="button" rel="modal:close">Хорошо!</a>
    </div>

    <div id="mod2" class="modal">
        <p>Спасибо за ваш голос!</p>
        <a href="#" class="button" rel="modal:close">Хорошо!</a>
    </div>

    <script src="scripts/widget_script.js"></script>
    <script src="libs/jquery-3.2.1.min.js"></script>
<!--    <script src="libs/material/js/materialize.min.js"></script>-->
    <script src="libs/anime.min.js"></script>
    <script src="libs/Chartjs/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="libs/base64.js"></script>
    <script src="js/index.js"></script>
</body>
</html>