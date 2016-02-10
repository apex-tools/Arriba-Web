<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Дракон-->
<!-- * Date: 10.02.2016-->
<!-- * Time: 17:19-->
<!-- */-->

<?php
require("mailer/class.phpmailer.php");

$title = $_POST['title'];


$name = $_POST['user'];
$phone = $_POST['phone'];


$body = "<h4>Заказ на оформление диагностической карты</h4>".
    "<table>".
    "<tr><td>Имя</td><td>$name</td></tr><tr><td>Телефон</td><td>$phone</td></tr></table>";


$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->From = $mail;
$mail->FromName = "Arriba-site";
$mail->AddAddress("arseny@ca-arriba.ru");
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;
if($mail->Send())
{
    header("Location:ok.php");
}
else
{
    header("Location:ok.php");
}