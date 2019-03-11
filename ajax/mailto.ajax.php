<?php
function send_mail($from, $to, $subject, $body)
{
    $charset = 'utf-8';
    mb_language("ru");
    $headers  = "MIME-Version: 1.0 \r\n" ;
    $headers .= "From: <".$from."> \r\n";
    $headers .= "Reply-To: <".$from."> \r\n";
    $headers .= "Content-Type: text/html; charset=$charset \n";

    $subject = '=?'.$charset.'?B?'.base64_encode($subject).'?=';

    mail($to, $subject, $body, $headers);
}

  function returnLang()
  {
    if (isset($_COOKIE['lang']))
    {
      switch($_COOKIE['lang'])
      {
        default:
        case "en":
          return [
          "subj"=>"Thank You for order!",
          "body"=>"<html><body>
            <h4 align=\"center\">We will contact you soon!</h4>
          </body></html>"
        ];
        break;
        case "rus":
          return [
          "subj"=>"Спасибо за заказ!",
          "body"=>"<html><body>
            <h4 align=\"center\">Мы обязательно свяжемся с вами позже!</h4>
          </body></html>"
        ];
      }
    }
    return [
      "subj"=>"Thank You for order!",
      "body"=>"<html><body>
        <h4 align=\"center\">We will contact you soon!</h4>
      </body></html>"
    ];
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $mail = urldecode(base64_decode(trim($_POST['mail'])));

      $resopnse = returnLang();
      send_mail("support@brickweb.ru", $mail, $resopnse['subj'], $resopnse['body']);
  }
