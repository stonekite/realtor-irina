<?php
 /* Здесь проверяется существование переменных */
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}

/* Сюда впишите свою эл. почту */
 $address = "info@site.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Тема: Заказ обратного звонка!\nИмя: $name\nТелефон: $phone\nE-mail: $email";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='info@site.ru'; //сабж
$mail='Заказ с сайта шаблон №179'; // от кого
$send = mail ($address,$mail,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$sub");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>