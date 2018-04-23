<?php
$mailheaders = "Content-type: text/html; charset=UTF-8 \r\n";
$mailheaders .= "From: DskGarant";
$mailheaders .= "Reply-To: DskGarant";

$messeng ="<h1>Данные Пользователя</h1>
<h2 style=\"text-align: center\">Уточнение цены</h2>
<p>Имя пользователя:". $_POST["name"] . "</p>
<p>Телефон пользователя:" . $_POST["phone"] . "</p>

";

mail('dsk.garant2017@yandex.ru',"DskGarant",$messeng,$mailheaders);
header('Location: index.html');
exit;
?>